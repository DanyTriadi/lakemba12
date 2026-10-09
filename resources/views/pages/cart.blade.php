@extends('layouts.app')

@section('title', 'Keranjang Pesanan - Lakemba 12')

@section('content')

<div class="bg-coffeeDark text-white py-12">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="font-serif text-3xl sm:text-4xl font-extrabold text-cream">Keranjang Belanja Anda</h1>
        <p class="text-stone-300 text-xs sm:text-sm mt-2">Periksa kembali item pilihan Anda sebelum lanjut ke pembayaran.</p>
    </div>
</div>

<section class="py-16 bg-cream min-h-[60vh]">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div id="full-cart-empty" class="hidden text-center py-20 bg-white rounded-3xl p-10 border border-stone-200">
            <i class="fa-solid fa-mug-hot text-5xl text-stone-300 mb-4"></i>
            <h3 class="font-serif text-2xl font-bold text-stone-800">Keranjang Masih Kosong</h3>
            <p class="text-sm text-stone-500 mt-2">Belum ada kopi atau pastry yang dimasukkan ke dalam keranjang.</p>
            <a href="{{ route('products.index') }}" class="mt-6 inline-block px-8 py-3.5 bg-brand-500 text-white font-bold rounded-full text-xs uppercase tracking-wider">
                Mulai Pilih Menu &rarr;
            </a>
        </div>

        <div id="full-cart-content" class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Table of Items -->
            <div class="lg:col-span-2 bg-white rounded-3xl border border-stone-200/80 shadow-sm p-6 space-y-4">
                <div class="flex items-center justify-between border-b border-stone-200 pb-4">
                    <h3 class="font-serif font-bold text-lg text-stone-900">Daftar Menu</h3>
                    <button onclick="clearCart()" class="text-xs text-rose-500 hover:underline">Kosongkan Semua</button>
                </div>

                <div id="full-cart-list" class="divide-y divide-stone-100">
                    <!-- Populated via JS -->
                </div>
            </div>

            <!-- Summary Card -->
            <div class="bg-white rounded-3xl border border-stone-200/80 shadow-sm p-6 h-fit space-y-6">
                <h3 class="font-serif font-bold text-lg text-stone-900 border-b border-stone-200 pb-4">Ringkasan Biaya</h3>

                <div class="space-y-3 text-sm text-stone-600">
                    <div class="flex justify-between">
                        <span>Total Harga Menu</span>
                        <span id="full-subtotal" class="font-bold text-stone-900">Rp 0</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Pajak Restoran (PB1)</span>
                        <span class="text-emerald-600 font-medium">Sudah Termasuk</span>
                    </div>
                    <div class="border-t border-stone-200 pt-3 flex justify-between text-base font-bold text-stone-900">
                        <span>Total Pembayaran</span>
                        <span id="full-grandtotal" class="text-brand-500 font-serif text-xl">Rp 0</span>
                    </div>
                </div>

                <a href="{{ route('checkout') }}" class="block w-full py-4 bg-brand-500 hover:bg-brand-600 text-white font-bold rounded-2xl text-center shadow-md hover:shadow-lg transition-all text-sm uppercase tracking-wider">
                    Lanjut ke Checkout &rarr;
                </a>

                <a href="{{ route('products.index') }}" class="block text-center text-xs text-stone-500 hover:text-brand-500">
                    &larr; Tambah Menu Lainnya
                </a>
            </div>
        </div>

    </div>
</section>

@push('scripts')
<script>
    function renderFullCart() {
        const cart = getCart();
        const emptyDiv = document.getElementById('full-cart-empty');
        const contentDiv = document.getElementById('full-cart-content');
        const listContainer = document.getElementById('full-cart-list');
        const subtotalEl = document.getElementById('full-subtotal');
        const grandtotalEl = document.getElementById('full-grandtotal');

        if (!cart || cart.length === 0) {
            emptyDiv.classList.remove('hidden');
            contentDiv.classList.add('hidden');
            return;
        }

        emptyDiv.classList.add('hidden');
        contentDiv.classList.remove('hidden');

        const totalAmount = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
        subtotalEl.innerText = formatRupiah(totalAmount);
        grandtotalEl.innerText = formatRupiah(totalAmount);

        listContainer.innerHTML = cart.map(item => `
            <div class="py-4 flex items-center justify-between gap-4">
                <div class="flex items-center gap-4">
                    <img src="${item.image}" alt="${item.name}" class="w-16 h-16 object-cover rounded-xl">
                    <div>
                        <h4 class="font-serif font-bold text-stone-900 text-sm">${item.name}</h4>
                        <span class="text-xs text-brand-500 font-bold">${formatRupiah(item.price)}</span>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <div class="flex items-center border border-stone-200 rounded-lg">
                        <button onclick="updateQuantity(${item.id}, -1); renderFullCart();" class="px-2.5 py-1 text-stone-600 hover:bg-stone-100 text-xs font-bold">-</button>
                        <span class="px-3 text-xs font-bold text-stone-800">${item.quantity}</span>
                        <button onclick="updateQuantity(${item.id}, 1); renderFullCart();" class="px-2.5 py-1 text-stone-600 hover:bg-stone-100 text-xs font-bold">+</button>
                    </div>
                    <span class="font-bold text-stone-900 text-sm w-24 text-right">${formatRupiah(item.price * item.quantity)}</span>
                    <button onclick="removeFromCart(${item.id}); renderFullCart();" class="text-stone-300 hover:text-rose-500 p-2">
                        <i class="fa-solid fa-trash-can"></i>
                    </button>
                </div>
            </div>
        `).join('');
    }

    document.addEventListener('DOMContentLoaded', renderFullCart);
</script>
@endpush

@endsection
