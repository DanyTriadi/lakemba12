@extends('layouts.admin')

@section('title', 'Dashboard Overview - Lakemba 12')
@section('page_title', 'Ringkasan Aktivitas Toko')

@section('admin_content')

<div class="space-y-8">
    
    <!-- Top 4 Metrics Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Revenue -->
        <div class="bg-white p-6 rounded-2xl border border-stone-200/80 shadow-sm flex items-center justify-between">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider text-stone-500">Total Pendapatan</span>
                <h3 class="font-serif text-2xl font-extrabold text-stone-900 mt-1">
                    Rp {{ number_format($totalRevenue, 0, ',', '.') }}
                </h3>
                <span class="text-[11px] text-emerald-600 font-semibold mt-1 block">Pesanan Terkonfirmasi</span>
            </div>
            <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-xl">
                <i class="fa-solid fa-coins"></i>
            </div>
        </div>

        <!-- Orders -->
        <div class="bg-white p-6 rounded-2xl border border-stone-200/80 shadow-sm flex items-center justify-between">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider text-stone-500">Total Pesanan</span>
                <h3 class="font-serif text-2xl font-extrabold text-stone-900 mt-1">
                    {{ $totalOrders }} Pesanan
                </h3>
                <a href="{{ route('admin.orders') }}" class="text-[11px] text-brand-500 font-semibold mt-1 block hover:underline">Kelola Sekarang &rarr;</a>
            </div>
            <div class="w-12 h-12 rounded-xl bg-brand-50 text-brand-500 flex items-center justify-center text-xl">
                <i class="fa-solid fa-receipt"></i>
            </div>
        </div>

        <!-- Products -->
        <div class="bg-white p-6 rounded-2xl border border-stone-200/80 shadow-sm flex items-center justify-between">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider text-stone-500">Menu Aktif</span>
                <h3 class="font-serif text-2xl font-extrabold text-stone-900 mt-1">
                    {{ $totalProducts }} Produk
                </h3>
                <a href="{{ route('admin.products') }}" class="text-[11px] text-blue-600 font-semibold mt-1 block hover:underline">Kelola Menu &rarr;</a>
            </div>
            <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center text-xl">
                <i class="fa-solid fa-mug-hot"></i>
            </div>
        </div>

        <!-- Messages -->
        <div class="bg-white p-6 rounded-2xl border border-stone-200/80 shadow-sm flex items-center justify-between">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider text-stone-500">Pesan Masuk</span>
                <h3 class="font-serif text-2xl font-extrabold text-stone-900 mt-1">
                    {{ $unreadMessages }} Baru
                </h3>
                <a href="{{ route('admin.messages') }}" class="text-[11px] text-amber-600 font-semibold mt-1 block hover:underline">Lihat Kontak &rarr;</a>
            </div>
            <div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center text-xl">
                <i class="fa-solid fa-envelope-open-text"></i>
            </div>
        </div>
    </div>

    <!-- 2 Column Section: Recent Orders & Recent Inquiries -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        
        <!-- Left: Recent Orders Table (2 Cols) -->
        <div class="lg:col-span-2 bg-white rounded-2xl border border-stone-200/80 shadow-sm p-6 space-y-4">
            <div class="flex items-center justify-between border-b border-stone-100 pb-4">
                <h3 class="font-serif font-bold text-lg text-stone-900">Pesanan Masuk Terbaru</h3>
                <a href="{{ route('admin.orders') }}" class="text-xs font-bold text-brand-500 hover:underline">Lihat Semua &rarr;</a>
            </div>

            @if($recentOrders->isEmpty())
                <p class="text-xs text-stone-400 py-6 text-center">Belum ada pesanan terbaru.</p>
            @else
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs">
                        <thead>
                            <tr class="text-stone-400 uppercase border-b border-stone-100 pb-2">
                                <th class="pb-2">No. Pesanan</th>
                                <th class="pb-2">Pelanggan</th>
                                <th class="pb-2 text-right">Total</th>
                                <th class="pb-2 text-center">Status</th>
                                <th class="pb-2 text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-stone-100">
                            @foreach($recentOrders as $order)
                                <tr>
                                    <td class="py-3 font-bold text-stone-900">
                                        {{ $order->order_number }}
                                    </td>
                                    <td class="py-3">
                                        <span class="font-medium text-stone-800 block">{{ $order->customer_name }}</span>
                                        <span class="text-[10px] text-stone-400">{{ $order->customer_phone }}</span>
                                    </td>
                                    <td class="py-3 text-right font-bold text-brand-500">
                                        Rp {{ number_format($order->total_amount, 0, ',', '.') }}
                                    </td>
                                    <td class="py-3 text-center">
                                        <span class="px-2 py-0.5 rounded-full text-[10px] font-bold 
                                            {{ $order->status === 'completed' ? 'bg-emerald-100 text-emerald-800' : ($order->status === 'processing' ? 'bg-blue-100 text-blue-800' : 'bg-amber-100 text-amber-800') }}">
                                            {{ ucfirst($order->status) }}
                                        </span>
                                    </td>
                                    <td class="py-3 text-right">
                                        <a href="{{ route('orders.show', $order->order_number) }}" target="_blank" class="text-stone-400 hover:text-brand-500 font-bold">
                                            Faktur &rarr;
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>

        <!-- Right: Recent Inquiries (1 Col) -->
        <div class="bg-white rounded-2xl border border-stone-200/80 shadow-sm p-6 space-y-4">
            <div class="flex items-center justify-between border-b border-stone-100 pb-4">
                <h3 class="font-serif font-bold text-lg text-stone-900">Pesan Pelanggan</h3>
                <a href="{{ route('admin.messages') }}" class="text-xs font-bold text-brand-500 hover:underline">Semua</a>
            </div>

            @if($recentMessages->isEmpty())
                <p class="text-xs text-stone-400 py-6 text-center">Belum ada pesan pelanggan.</p>
            @else
                <div class="space-y-3">
                    @foreach($recentMessages as $msg)
                        <div class="p-3 rounded-xl border border-stone-100 bg-stone-50/50 space-y-1">
                            <div class="flex items-center justify-between">
                                <span class="font-bold text-xs text-stone-900">{{ $msg->name }}</span>
                                <span class="text-[10px] text-stone-400">{{ $msg->created_at->diffForHumans() }}</span>
                            </div>
                            <span class="text-[11px] text-brand-500 font-semibold block">{{ $msg->subject }}</span>
                            <p class="text-xs text-stone-600 line-clamp-2">{{ $msg->message }}</p>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

    </div>

</div>

@endsection
