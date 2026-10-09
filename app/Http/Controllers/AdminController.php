<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function showLogin()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'))->with('success', 'Selamat datang di Dashboard Admin Lakemba 12!');
        }

        return back()->withErrors([
            'email' => 'Kredensial yang diberikan tidak cocok dengan data kami.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login')->with('success', 'Anda telah berhasil logout.');
    }

    public function dashboard()
    {
        $totalOrders = Order::count();
        $totalRevenue = Order::where('payment_status', 'paid')->sum('total_amount');
        $totalProducts = Product::count();
        $unreadMessages = Contact::where('is_read', false)->count();

        $recentOrders = Order::with('items')->latest()->take(5)->get();
        $recentMessages = Contact::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalOrders',
            'totalRevenue',
            'totalProducts',
            'unreadMessages',
            'recentOrders',
            'recentMessages'
        ));
    }

    public function orders(Request $request)
    {
        $status = $request->get('status');
        $query = Order::with('items.product')->latest();

        if ($status && $status !== 'all') {
            $query->where('status', $status);
        }

        $orders = $query->paginate(10)->withQueryString();

        return view('admin.orders.index', compact('orders', 'status'));
    }

    public function updateOrderStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|string|in:pending,processing,completed,cancelled',
            'payment_status' => 'required|string|in:unpaid,paid',
        ]);

        $order = Order::findOrFail($id);
        $order->update([
            'status' => $request->status,
            'payment_status' => $request->payment_status,
        ]);

        return redirect()->back()->with('success', "Status pesanan #{$order->order_number} berhasil diperbarui.");
    }

    public function products()
    {
        $products = Product::with('category')->latest()->paginate(10);
        $categories = Category::all();
        return view('admin.products.index', compact('products', 'categories'));
    }

    public function storeProduct(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'image' => 'nullable|string',
            'is_active' => 'sometimes|boolean',
        ]);

        $validated['slug'] = Str::slug($validated['name']) . '-' . rand(100, 999);
        $validated['is_active'] = $request->has('is_active');
        if (empty($validated['image'])) {
            $validated['image'] = 'https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?auto=format&fit=crop&w=600&q=80';
        }

        Product::create($validated);

        return redirect()->back()->with('success', 'Produk baru berhasil ditambahkan.');
    }

    public function updateProduct(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'image' => 'nullable|string',
            'is_active' => 'sometimes|boolean',
        ]);

        $validated['is_active'] = $request->has('is_active');

        $product->update($validated);

        return redirect()->back()->with('success', 'Produk berhasil diperbarui.');
    }

    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->back()->with('success', 'Produk berhasil dihapus.');
    }

    public function messages()
    {
        $messages = Contact::latest()->paginate(15);
        return view('admin.messages.index', compact('messages'));
    }

    public function toggleMessageRead($id)
    {
        $msg = Contact::findOrFail($id);
        $msg->update(['is_read' => !$msg->is_read]);

        return redirect()->back()->with('success', 'Status pesan berhasil diubah.');
    }
}
