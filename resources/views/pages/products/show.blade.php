@extends('layouts.app')

@section('title', $product->name . ' - Lakemba 12 Toko Plastik & Bahan Kue')
@section('meta_description', Str::limit($product->description, 150))

@section('content')

<!-- Breadcrumb -->
<div class="bg-warmGray border-b border-stone-200 py-3">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-xs text-stone-500 flex items-center gap-2">
        <a href="{{ route('home') }}" class="hover:text-brand-500">Beranda</a>
        <span>/</span>
        <a href="{{ route('products.index') }}" class="hover:text-brand-500">Katalog Produk</a>
        <span>/</span>
        <a href="{{ route('products.index', ['category' => $product->category->slug]) }}" class="hover:text-brand-500">{{ $product->category->name }}</a>
        <span>/</span>
        <span class="text-stone-800 font-semibold">{{ $product->name }}</span>
    </div>
</div>

<!-- Product Detail Section -->
<section class="py-16 bg-cream">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-3xl border border-stone-200/80 shadow-md p-6 sm:p-10 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            
            <!-- Left: Product Image -->
            <div class="relative rounded-2xl overflow-hidden aspect-square bg-stone-100 shadow-inner">
                <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                <span class="absolute top-4 left-4 bg-brand-500 text-white text-xs font-bold uppercase tracking-wider px-3.5 py-1.5 rounded-full shadow-md">
                    {{ $product->category->name }}
                </span>
            </div>

            <!-- Right: Information & Actions -->
            <div class="space-y-6">
                <div>
                    <span class="text-xs uppercase tracking-widest text-amberGold font-bold">Produk Terverifikasi Food Grade / Resmi</span>
                    <h1 class="font-serif text-2xl sm:text-3xl font-extrabold text-stone-900 mt-1">{{ $product->name }}</h1>
                    <div class="flex items-center gap-3 mt-3">
                        <div class="flex items-center text-amber-500 text-xs">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <span class="text-xs text-stone-500">Stok Siap Kirim: <strong>{{ $product->stock }} unit</strong></span>
                    </div>
                </div>

                <!-- Price Box -->
                <div class="p-4 bg-brand-50/60 rounded-2xl border border-brand-100">
                    <span class="text-xs text-stone-500 block">Harga Eceran Toko</span>
                    <span class="font-serif text-3xl font-extrabold text-brand-500">
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    </span>
                    <span class="text-[11px] text-stone-500 block mt-0.5">*Tersedia harga khusus grosir untuk pembelian dus/bal</span>
                </div>

                <!-- Description -->
                <div class="text-stone-600 text-sm leading-relaxed space-y-2">
                    <p>{{ $product->description }}</p>
                    <p class="text-xs text-stone-500 italic">*Barang dicek dan dikemas aman dengan bubble wrap / dus saat pengiriman.</p>
                </div>

                <!-- Quantity & Add to Cart -->
                <div class="pt-6 border-t border-stone-200 flex flex-col sm:flex-row items-center gap-4">
                    <div class="flex items-center border border-stone-300 rounded-2xl bg-stone-50 p-1">
                        <button onclick="decrementDetailQty()" class="w-10 h-10 rounded-xl hover:bg-stone-200 text-stone-700 font-bold flex items-center justify-center transition-colors">-</button>
                        <input type="number" id="detail-qty" value="1" min="1" max="{{ $product->stock }}" class="w-12 text-center bg-transparent text-sm font-bold text-stone-900 focus:outline-none" readonly>
                        <button onclick="incrementDetailQty()" class="w-10 h-10 rounded-xl hover:bg-stone-200 text-stone-700 font-bold flex items-center justify-center transition-colors">+</button>
                    </div>

                    <button onclick="addMultipleToCart()" class="w-full sm:flex-grow py-3.5 px-6 bg-brand-500 hover:bg-brand-600 text-white font-bold rounded-2xl shadow-md hover:shadow-lg transition-all flex items-center justify-center gap-2">
                        <i class="fa-solid fa-basket-shopping"></i>
                        <span>Masukkan ke Keranjang</span>
                    </button>
                </div>

                <!-- Fast WhatsApp Grosir Inquiry -->
                <div class="pt-2">
                    <a href="https://wa.me/6281234567890?text=Halo%20Lakemba%2012,%20saya%20mau%20tanya%20harga%20grosir%20dus%20untuk%20produk%20{{ urlencode($product->name) }}" target="_blank" class="text-xs font-bold text-emerald-600 hover:text-emerald-700 flex items-center gap-1.5">
                        <i class="fa-brands fa-whatsapp text-sm"></i> Ingin beli kuantiti dus/bal partai besar? Hubungi Admin Grosir
                    </a>
                </div>

            </div>

        </div>

        <!-- Related Products -->
        @if($relatedProducts->isNotEmpty())
            <div class="mt-20">
                <h3 class="font-serif text-2xl font-bold text-stone-900 mb-8">Produk Sejenis Lainnya</h3>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                    @foreach($relatedProducts as $rel)
                        <div class="bg-white rounded-2xl overflow-hidden border border-stone-200/80 shadow-sm p-4 flex gap-4 items-center group">
                            <img src="{{ $rel->image }}" alt="{{ $rel->name }}" class="w-20 h-20 object-cover rounded-xl flex-shrink-0 group-hover:scale-105 transition-transform">
                            <div class="flex-grow min-w-0">
                                <a href="{{ route('products.show', $rel->slug) }}" class="font-serif font-bold text-stone-900 text-sm hover:text-brand-500 transition-colors block truncate">
                                    {{ $rel->name }}
                                </a>
                                <span class="font-serif font-bold text-brand-500 text-sm block mt-1">
                                    Rp {{ number_format($rel->price, 0, ',', '.') }}
                                </span>
                                <button onclick="addToCart({{ $rel->id }}, '{{ addslashes($rel->name) }}', {{ $rel->price }}, '{{ $rel->image }}')" class="mt-2 text-[11px] font-bold text-brand-500 hover:underline">
                                    + Beli
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

    </div>
</section>

@push('scripts')
<script>
    function decrementDetailQty() {
        const input = document.getElementById('detail-qty');
        let val = parseInt(input.value) || 1;
        if (val > 1) {
            input.value = val - 1;
        }
    }

    function incrementDetailQty() {
        const input = document.getElementById('detail-qty');
        let val = parseInt(input.value) || 1;
        input.value = val + 1;
    }

    function addMultipleToCart() {
        const qty = parseInt(document.getElementById('detail-qty').value) || 1;
        for (let i = 0; i < qty; i++) {
            addToCart({{ $product->id }}, "{{ addslashes($product->name) }}", {{ $product->price }}, "{{ $product->image }}");
        }
    }
</script>
@endpush

@endsection
