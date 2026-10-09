@extends('layouts.app')

@section('title', 'Faktur Pesanan #' . $order->order_number . ' - Lakemba 12')

@section('content')

<div class="bg-coffeeDark text-white py-12">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <div class="w-16 h-16 bg-emerald-500/20 text-emerald-400 rounded-full flex items-center justify-center mx-auto text-2xl mb-3 border border-emerald-500/40">
            <i class="fa-solid fa-check"></i>
        </div>
        <h1 class="font-serif text-3xl sm:text-4xl font-extrabold text-cream">Pesanan Berhasil Diterima!</h1>
        <p class="text-stone-300 text-xs sm:text-sm mt-1">Nomor Transaksi: <strong class="text-amberGold">{{ $order->order_number }}</strong></p>
    </div>
</div>

<section class="py-16 bg-cream min-h-[60vh]">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
        
        <!-- Status Box -->
        <div class="bg-white rounded-3xl border border-stone-200/80 shadow-md p-6 sm:p-8 flex flex-col sm:flex-row items-center justify-between gap-4">
            <div>
                <span class="text-xs text-stone-500 block uppercase font-bold tracking-wider">Status Pemrosesan</span>
                <div class="flex items-center gap-2 mt-1">
                    @if($order->status === 'pending')
                        <span class="px-3 py-1 bg-amber-100 text-amber-800 rounded-full text-xs font-bold flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-amber-500 animate-pulse"></span> Menunggu Pembayaran / Konfirmasi
                        </span>
                    @elseif($order->status === 'processing')
                        <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-bold flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-blue-500 animate-ping"></span> Sedang Diramu Barista
                        </span>
                    @elseif($order->status === 'completed')
                        <span class="px-3 py-1 bg-emerald-100 text-emerald-800 rounded-full text-xs font-bold">
                            <i class="fa-solid fa-check-double mr-1"></i> Pesanan Selesai
                        </span>
                    @else
                        <span class="px-3 py-1 bg-rose-100 text-rose-800 rounded-full text-xs font-bold">
                            Dibatalkan
                        </span>
                    @endif

                    <span class="text-xs text-stone-400">| Pembayaran: <strong class="text-stone-800 uppercase">{{ $order->payment_status }}</strong></span>
                </div>
            </div>

            <!-- WhatsApp Direct Confirmation -->
            @php
                $waText = "Halo Barista Lakemba 12, saya mengonfirmasi pesanan #{$order->order_number} atas nama {$order->customer_name} sebesar Rp " . number_format($order->total_amount, 0, ',', '.') . ".";
            @endphp
            <a href="https://wa.me/6281234567890?text={{ urlencode($waText) }}" target="_blank" 
               class="px-5 py-3 bg-emerald-600 hover:bg-emerald-700 text-white rounded-full font-bold text-xs uppercase tracking-wider shadow-md hover:shadow-lg transition-all flex items-center gap-2">
                <i class="fa-brands fa-whatsapp text-base"></i>
                <span>Konfirmasi ke WhatsApp Barista</span>
            </a>
        </div>

        <!-- Receipt Card -->
        <div class="bg-white rounded-3xl border border-stone-200/80 shadow-md p-6 sm:p-10 space-y-8">
            <div class="flex flex-col sm:flex-row justify-between pb-6 border-b border-stone-200 gap-4">
                <div>
                    <img src="{{ asset('images/logo.png') }}" alt="Lakemba 12" class="h-12 w-12 rounded-full mb-2">
                    <h3 class="font-serif font-bold text-lg text-stone-900">Lakemba 12 Specialty Coffee</h3>
                    <p class="text-xs text-stone-500">Jl. Lakemba Raya No. 12, Senopati / Pusat Kota</p>
                    <p class="text-xs text-stone-500">Tanggal: {{ $order->created_at->format('d M Y, H:i') }} WIB</p>
                </div>
                <div class="sm:text-right">
                    <span class="text-xs text-stone-400 font-bold uppercase block">Ditujukan Kepada</span>
                    <h4 class="font-bold text-stone-900 text-sm">{{ $order->customer_name }}</h4>
                    <p class="text-xs text-stone-600">{{ $order->customer_phone }}</p>
                    <p class="text-xs text-stone-600">{{ $order->customer_email }}</p>
                    <p class="text-xs text-stone-500 mt-1 max-w-xs sm:ml-auto">Lokasi/Meja: {{ $order->shipping_address }}</p>
                </div>
            </div>

            <!-- Items Table -->
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead>
                        <tr class="border-b border-stone-200 text-stone-400 text-xs uppercase font-bold">
                            <th class="pb-3">Menu</th>
                            <th class="pb-3 text-center">Qty</th>
                            <th class="pb-3 text-right">Harga Satuan</th>
                            <th class="pb-3 text-right">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-stone-100">
                        @foreach($order->items as $item)
                            <tr>
                                <td class="py-3.5 font-medium text-stone-900">{{ $item->product_name }}</td>
                                <td class="py-3.5 text-center text-stone-600">{{ $item->quantity }}</td>
                                <td class="py-3.5 text-right text-stone-600">Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                                <td class="py-3.5 text-right font-bold text-stone-900">Rp {{ number_format($item->subtotal, 0, ',', '.') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr class="border-t-2 border-stone-200">
                            <td colspan="3" class="pt-4 text-right font-bold text-stone-700">Total Pembayaran</td>
                            <td class="pt-4 text-right font-serif text-xl font-extrabold text-brand-500">
                                Rp {{ number_format($order->total_amount, 0, ',', '.') }}
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <!-- Payment Instructions Box -->
            <div class="bg-stone-50 p-6 rounded-2xl border border-stone-200">
                <h4 class="font-serif font-bold text-stone-900 text-sm mb-3 flex items-center gap-2">
                    <i class="fa-solid fa-circle-info text-brand-500"></i> Petunjuk Pembayaran ({{ strtoupper(str_replace('_', ' ', $order->payment_method)) }})
                </h4>

                @if($order->payment_method === 'transfer_bank')
                    <div class="space-y-3 text-xs text-stone-600">
                        <p>Silakan transfer nominal tepat ke salah satu rekening resmi Lakemba 12 di bawah ini:</p>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-1">
                            <div class="bg-white p-3 rounded-xl border border-stone-200">
                                <span class="font-bold text-blue-700 block">BANK BCA</span>
                                <span class="text-base font-extrabold text-stone-900 select-all tracking-wider">8290 1212 99</span>
                                <span class="text-[11px] text-stone-500 block">a.n. PT Lakemba Kopi Kreasi</span>
                            </div>
                            <div class="bg-white p-3 rounded-xl border border-stone-200">
                                <span class="font-bold text-amber-700 block">BANK MANDIRI</span>
                                <span class="text-base font-extrabold text-stone-900 select-all tracking-wider">1370 0012 3456</span>
                                <span class="text-[11px] text-stone-500 block">a.n. PT Lakemba Kopi Kreasi</span>
                            </div>
                        </div>
                    </div>
                @elseif($order->payment_method === 'qris')
                    <div class="text-center py-4 space-y-3">
                        <p class="text-xs text-stone-600">Scan QRIS Lakemba 12 menggunakan aplikasi e-wallet apa pun:</p>
                        <img src="https://api.qrserver.com/v1/create-qr-code/?size=180x180&data=LAKEMBA12-{{ $order->order_number }}-{{ $order->total_amount }}" 
                             alt="QRIS Code" class="mx-auto rounded-xl border-2 border-stone-300 p-2 bg-white shadow-sm">
                        <span class="text-[11px] text-stone-400 block">NMID: ID102003948593 • Lakemba 12 Roastery</span>
                    </div>
                @else
                    <p class="text-xs text-stone-600">
                        Silakan tunjukkan nomor pesanan ini (<strong>{{ $order->order_number }}</strong>) ke kasir saat mengambil pesanan Anda di outlet.
                    </p>
                @endif
            </div>

            <div class="text-center pt-4">
                <a href="{{ route('home') }}" class="text-xs font-bold text-stone-500 hover:text-brand-500">
                    &larr; Kembali ke Halaman Utama
                </a>
            </div>

        </div>

    </div>
</section>

@endsection
