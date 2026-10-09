@extends('layouts.admin')

@section('title', 'Kelola Pesanan - Lakemba 12')
@section('page_title', 'Daftar Pesanan Masuk')

@section('admin_content')

<div class="space-y-6">
    
    <!-- Filter Tabs -->
    <div class="flex items-center gap-2 overflow-x-auto pb-2">
        <a href="{{ route('admin.orders') }}" 
           class="px-4 py-2 rounded-xl text-xs font-bold transition-all {{ !$status || $status === 'all' ? 'bg-brand-500 text-white shadow-sm' : 'bg-white border border-stone-200 text-stone-600 hover:border-brand-500' }}">
            Semua
        </a>
        <a href="{{ route('admin.orders', ['status' => 'pending']) }}" 
           class="px-4 py-2 rounded-xl text-xs font-bold transition-all {{ $status === 'pending' ? 'bg-amber-500 text-white shadow-sm' : 'bg-white border border-stone-200 text-stone-600 hover:border-amber-500' }}">
            Menunggu (Pending)
        </a>
        <a href="{{ route('admin.orders', ['status' => 'processing']) }}" 
           class="px-4 py-2 rounded-xl text-xs font-bold transition-all {{ $status === 'processing' ? 'bg-blue-600 text-white shadow-sm' : 'bg-white border border-stone-200 text-stone-600 hover:border-blue-500' }}">
            Diproses (Processing)
        </a>
        <a href="{{ route('admin.orders', ['status' => 'completed']) }}" 
           class="px-4 py-2 rounded-xl text-xs font-bold transition-all {{ $status === 'completed' ? 'bg-emerald-600 text-white shadow-sm' : 'bg-white border border-stone-200 text-stone-600 hover:border-emerald-500' }}">
            Selesai (Completed)
        </a>
        <a href="{{ route('admin.orders', ['status' => 'cancelled']) }}" 
           class="px-4 py-2 rounded-xl text-xs font-bold transition-all {{ $status === 'cancelled' ? 'bg-rose-600 text-white shadow-sm' : 'bg-white border border-stone-200 text-stone-600 hover:border-rose-500' }}">
            Dibatalkan (Cancelled)
        </a>
    </div>

    <!-- Orders Table -->
    <div class="bg-white rounded-2xl border border-stone-200/80 shadow-sm overflow-hidden">
        @if($orders->isEmpty())
            <div class="p-12 text-center text-stone-400 text-xs">
                Tidak ada data pesanan pada filter ini.
            </div>
        @else
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs">
                    <thead class="bg-stone-50 border-b border-stone-200 text-stone-500 uppercase font-bold">
                        <tr>
                            <th class="p-4">No. Order</th>
                            <th class="p-4">Pelanggan</th>
                            <th class="p-4">Detail Menu</th>
                            <th class="p-4">Total</th>
                            <th class="p-4">Metode Bayar</th>
                            <th class="p-4">Status & Pembayaran</th>
                            <th class="p-4 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-stone-100">
                        @foreach($orders as $order)
                            <tr class="hover:bg-stone-50/50">
                                <td class="p-4 font-bold text-stone-900">
                                    {{ $order->order_number }}
                                    <span class="block text-[10px] text-stone-400 font-normal">{{ $order->created_at->format('d/m/Y H:i') }}</span>
                                </td>
                                <td class="p-4">
                                    <span class="font-bold text-stone-800 block">{{ $order->customer_name }}</span>
                                    <span class="text-stone-500">{{ $order->customer_phone }}</span>
                                    <span class="block text-[10px] text-stone-400 truncate max-w-xs">{{ $order->shipping_address }}</span>
                                </td>
                                <td class="p-4">
                                    <ul class="space-y-0.5">
                                        @foreach($order->items as $item)
                                            <li class="text-stone-700">
                                                <strong>{{ $item->quantity }}x</strong> {{ $item->product_name }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td class="p-4 font-serif font-bold text-brand-500 text-sm">
                                    Rp {{ number_format($order->total_amount, 0, ',', '.') }}
                                </td>
                                <td class="p-4 text-stone-600 uppercase font-semibold">
                                    {{ str_replace('_', ' ', $order->payment_method) }}
                                </td>
                                <td class="p-4">
                                    <form method="POST" action="{{ route('admin.orders.updateStatus', $order->id) }}" class="flex flex-col gap-1.5">
                                        @csrf
                                        <div class="flex items-center gap-1">
                                            <select name="status" class="text-[11px] font-bold py-1 px-2 rounded-lg border border-stone-300 bg-white">
                                                <option value="pending" {{ $order->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                                <option value="processing" {{ $order->status === 'processing' ? 'selected' : '' }}>Processing</option>
                                                <option value="completed" {{ $order->status === 'completed' ? 'selected' : '' }}>Completed</option>
                                                <option value="cancelled" {{ $order->status === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                            </select>

                                            <select name="payment_status" class="text-[11px] font-bold py-1 px-2 rounded-lg border border-stone-300 bg-white">
                                                <option value="unpaid" {{ $order->payment_status === 'unpaid' ? 'selected' : '' }}>Unpaid</option>
                                                <option value="paid" {{ $order->payment_status === 'paid' ? 'selected' : '' }}>Paid</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="text-[10px] font-bold text-brand-500 hover:underline self-start">
                                            Update Status &rarr;
                                        </button>
                                    </form>
                                </td>
                                <td class="p-4 text-right">
                                    <a href="{{ route('orders.show', $order->order_number) }}" target="_blank" class="p-2 bg-stone-100 hover:bg-brand-50 text-stone-600 hover:text-brand-500 rounded-lg inline-block" title="Lihat Faktur">
                                        <i class="fa-solid fa-file-invoice"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="p-4 border-t border-stone-200">
                {{ $orders->links() }}
            </div>
        @endif
    </div>

</div>

@endsection
