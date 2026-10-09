<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function cart()
    {
        return view('pages.cart');
    }

    public function checkout()
    {
        return view('pages.checkout');
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            'customer_phone' => 'required|string|max:30',
            'shipping_address' => 'required|string|max:1000',
            'payment_method' => 'required|string|in:transfer_bank,qris,cash',
            'items' => 'required|array|min:1',
            'items.*.product_id' => 'required|exists:products,id',
            'items.*.quantity' => 'required|integer|min:1|max:50',
            'notes' => 'nullable|string|max:500',
        ]);

        return DB::transaction(function () use ($request) {
            $totalAmount = 0;
            $orderItemsData = [];

            foreach ($request->items as $item) {
                $product = Product::findOrFail($item['product_id']);
                $quantity = (int)$item['quantity'];
                $subtotal = $product->price * $quantity;
                $totalAmount += $subtotal;

                $orderItemsData[] = [
                    'product_id' => $product->id,
                    'product_name' => $product->name,
                    'price' => $product->price,
                    'quantity' => $quantity,
                    'subtotal' => $subtotal,
                ];
            }

            $orderNumber = 'LK-' . date('Ymd') . '-' . strtoupper(Str::random(5));

            $order = Order::create([
                'order_number' => $orderNumber,
                'customer_name' => $request->customer_name,
                'customer_email' => $request->customer_email,
                'customer_phone' => $request->customer_phone,
                'shipping_address' => $request->shipping_address,
                'total_amount' => $totalAmount,
                'status' => 'pending',
                'payment_method' => $request->payment_method,
                'payment_status' => 'unpaid',
                'notes' => $request->notes,
            ]);

            foreach ($orderItemsData as $itemData) {
                $order->items()->create($itemData);
            }

            return redirect()->route('orders.show', $order->order_number)
                ->with('success', 'Pesanan Anda berhasil dibuat! Silakan lakukan konfirmasi pembayaran.');
        });
    }

    public function show($order_number)
    {
        $order = Order::with('items.product')->where('order_number', $order_number)->firstOrFail();
        return view('pages.orders.show', compact('order'));
    }
}
