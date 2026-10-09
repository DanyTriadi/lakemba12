@extends('layouts.app')

@section('title', 'Penyelesaian Pesanan (Checkout) - Lakemba 12')

@section('content')

<div class="bg-coffeeDark text-white py-12">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <span class="text-xs uppercase tracking-widest text-amberGold font-bold">Langkah Terakhir</span>
        <h1 class="font-serif text-3xl sm:text-4xl font-extrabold text-cream mt-1">Konfirmasi & Pembayaran</h1>
    </div>
</div>

<section class="py-16 bg-cream min-h-[60vh]">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <form id="checkout-form" method="POST" action="{{ route('orders.store') }}" onsubmit="prepareCheckoutData(event)" class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            @csrf

            <!-- Container for hidden dynamic items input -->
            <div id="hidden-cart-inputs"></div>

            <!-- Left: Customer Information & Delivery -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Data Pemesan -->
                <div class="bg-white rounded-3xl border border-stone-200/80 shadow-sm p-6 sm:p-8 space-y-4">
                    <h3 class="font-serif font-bold text-xl text-stone-900 border-b border-stone-200 pb-3 flex items-center gap-2">
                        <i class="fa-solid fa-user-circle text-brand-500"></i> Informasi Pelanggan
                    </h3>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-stone-700 uppercase mb-1">Nama Lengkap *</label>
                            <input type="text" name="customer_name" required value="{{ old('customer_name') }}" placeholder="Contoh: Rian Pratama"
                                   class="w-full px-4 py-3 rounded-xl border border-stone-300 text-sm focus:outline-none focus:border-brand-500 focus:ring-1 focus:ring-brand-500">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-stone-700 uppercase mb-1">Nomor WhatsApp *</label>
                            <input type="tel" name="customer_phone" required value="{{ old('customer_phone') }}" placeholder="081234567890"
                                   class="w-full px-4 py-3 rounded-xl border border-stone-300 text-sm focus:outline-none focus:border-brand-500 focus:ring-1 focus:ring-brand-500">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-stone-700 uppercase mb-1">Email Aktif *</label>
                        <input type="email" name="customer_email" required value="{{ old('customer_email') }}" placeholder="rian@gmail.com"
                               class="w-full px-4 py-3 rounded-xl border border-stone-300 text-sm focus:outline-none focus:border-brand-500 focus:ring-1 focus:ring-brand-500">
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-stone-700 uppercase mb-1">Alamat Pengiriman / Nomor Meja *</label>
                        <textarea name="shipping_address" required rows="3" placeholder="Tuliskan alamat lengkap pengantaran, atau jika sedang di cafe tuliskan 'Dine In Meja 05'"
                                  class="w-full px-4 py-3 rounded-xl border border-stone-300 text-sm focus:outline-none focus:border-brand-500 focus:ring-1 focus:ring-brand-500">{{ old('shipping_address') }}</textarea>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-stone-700 uppercase mb-1">Catatan Tambahan (Opsional)</label>
                        <input type="text" name="notes" value="{{ old('notes') }}" placeholder="Contoh: Less sugar pada macchiato, bungkus terpisah"
                               class="w-full px-4 py-3 rounded-xl border border-stone-300 text-sm focus:outline-none focus:border-brand-500 focus:ring-1 focus:ring-brand-500">
                    </div>
                </div>

                <!-- Metode Pembayaran -->
                <div class="bg-white rounded-3xl border border-stone-200/80 shadow-sm p-6 sm:p-8 space-y-4">
                    <h3 class="font-serif font-bold text-xl text-stone-900 border-b border-stone-200 pb-3 flex items-center gap-2">
                        <i class="fa-solid fa-credit-card text-brand-500"></i> Pilih Metode Pembayaran
                    </h3>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                        <label class="border-2 border-stone-200 rounded-2xl p-4 flex flex-col items-center text-center cursor-pointer hover:border-brand-500 transition-colors has-[:checked]:border-brand-500 has-[:checked]:bg-brand-50/50">
                            <input type="radio" name="payment_method" value="transfer_bank" checked class="hidden">
                            <i class="fa-solid fa-building-columns text-2xl text-brand-500 mb-2"></i>
                            <span class="font-bold text-xs text-stone-900">Transfer Bank</span>
                            <span class="text-[10px] text-stone-500 mt-1">BCA / Mandiri</span>
                        </label>

                        <label class="border-2 border-stone-200 rounded-2xl p-4 flex flex-col items-center text-center cursor-pointer hover:border-brand-500 transition-colors has-[:checked]:border-brand-500 has-[:checked]:bg-brand-50/50">
                            <input type="radio" name="payment_method" value="qris" class="hidden">
                            <i class="fa-solid fa-qrcode text-2xl text-brand-500 mb-2"></i>
                            <span class="font-bold text-xs text-stone-900">QRIS Instan</span>
                            <span class="text-[10px] text-stone-500 mt-1">GoPay / OVO / Dana</span>
                        </label>

                        <label class="border-2 border-stone-200 rounded-2xl p-4 flex flex-col items-center text-center cursor-pointer hover:border-brand-500 transition-colors has-[:checked]:border-brand-500 has-[:checked]:bg-brand-50/50">
                            <input type="radio" name="payment_method" value="cash" class="hidden">
                            <i class="fa-solid fa-money-bill-wave text-2xl text-brand-500 mb-2"></i>
                            <span class="font-bold text-xs text-stone-900">Tunai di Kasir</span>
                            <span class="text-[10px] text-stone-500 mt-1">Dine In / Pick Up</span>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Right: Order Summary Sticky -->
            <div class="space-y-6">
                <div class="bg-white rounded-3xl border border-stone-200/80 shadow-sm p-6 space-y-4">
                    <h3 class="font-serif font-bold text-lg text-stone-900 border-b border-stone-200 pb-3">Ringkasan Pesanan</h3>

                    <div id="checkout-cart-list" class="divide-y divide-stone-100 max-h-60 overflow-y-auto pr-1">
                        <!-- Populated by JS -->
                    </div>

                    <div class="border-t border-stone-200 pt-3 space-y-2 text-sm text-stone-600">
                        <div class="flex justify-between">
                            <span>Subtotal Menu</span>
                            <span id="checkout-subtotal" class="font-bold text-stone-900">Rp 0</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Pajak & Layanan</span>
                            <span class="text-emerald-600 font-bold">Termasuk</span>
                        </div>
                        <div class="border-t border-stone-200 pt-3 flex justify-between text-base font-bold text-stone-900">
                            <span>Total Tagihan</span>
                            <span id="checkout-grandtotal" class="text-brand-500 font-serif text-xl">Rp 0</span>
                        </div>
                    </div>

                    <button type="submit" id="submit-btn" class="w-full py-4 bg-brand-500 hover:bg-brand-600 text-white font-bold rounded-2xl shadow-lg hover:shadow-brand-500/50 transition-all flex items-center justify-center gap-2 text-sm uppercase tracking-wider">
                        <i class="fa-solid fa-lock"></i>
                        <span>Konfirmasi & Bayar</span>
                    </button>

                    <p class="text-[11px] text-stone-400 text-center">
                        <i class="fa-solid fa-shield-halved text-emerald-500"></i> Transaksi terenkripsi aman. Barista kami siap meracik pesanan Anda.
                    </p>
                </div>
            </div>

        </form>

    </div>
</section>

@push('scripts')
<script>
    function renderCheckoutItems() {
        const cart = getCart();
        const listContainer = document.getElementById('checkout-cart-list');
        const subtotalEl = document.getElementById('checkout-subtotal');
        const grandtotalEl = document.getElementById('checkout-grandtotal');

        if (!cart || cart.length === 0) {
            alert('Keranjang pesanan Anda kosong! Silakan pilih menu terlebih dahulu.');
            window.location.href = "{{ route('products.index') }}";
            return;
        }

        const totalAmount = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
        subtotalEl.innerText = formatRupiah(totalAmount);
        grandtotalEl.innerText = formatRupiah(totalAmount);

        listContainer.innerHTML = cart.map(item => `
            <div class="py-2.5 flex items-center justify-between text-xs">
                <div class="flex-grow pr-2">
                    <span class="font-bold text-stone-800 block">${item.name}</span>
                    <span class="text-stone-400">${item.quantity}x @ ${formatRupiah(item.price)}</span>
                </div>
                <span class="font-bold text-stone-900">${formatRupiah(item.price * item.quantity)}</span>
            </div>
        `).join('');
    }

    function prepareCheckoutData(event) {
        const cart = getCart();
        if (!cart || cart.length === 0) {
            event.preventDefault();
            alert('Keranjang pesanan kosong!');
            return false;
        }

        const container = document.getElementById('hidden-cart-inputs');
        container.innerHTML = '';

        cart.forEach((item, index) => {
            const inputId = document.createElement('input');
            inputId.type = 'hidden';
            inputId.name = `items[${index}][product_id]`;
            inputId.value = item.id;
            container.appendChild(inputId);

            const inputQty = document.createElement('input');
            inputQty.type = 'hidden';
            inputQty.name = `items[${index}][quantity]`;
            inputQty.value = item.quantity;
            container.appendChild(inputQty);
        });

        // Clear localStorage on submit so cart resets
        localStorage.removeItem(CART_STORAGE_KEY);
        document.getElementById('submit-btn').innerHTML = '<i class="fa-solid fa-spinner animate-spin"></i> Memproses Pesanan...';
        document.getElementById('submit-btn').disabled = true;
        return true;
    }

    document.addEventListener('DOMContentLoaded', renderCheckoutItems);
</script>
@endpush

@endsection
