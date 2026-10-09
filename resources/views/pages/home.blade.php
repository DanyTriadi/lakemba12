@extends('layouts.app')

@section('title', 'Lakemba 12 - Toko Plastik & Bahan Kue Terlengkap')

@section('content')

<!-- Hero Section: Toko Plastik & Bahan Kue -->
<section class="relative bg-stone-900 min-h-[85vh] flex items-center justify-center overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?auto=format&fit=crop&w=1920&q=80" 
             alt="Kemasan Plastik dan Bahan Kue Lakemba 12" 
             class="w-full h-full object-cover object-center filter brightness-40 scale-105 transform motion-safe:animate-pulse">
        <div class="absolute inset-0 hero-banner-gradient"></div>
    </div>

    <!-- Hero Content -->
    <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-24 text-center text-white space-y-8">
        <!-- Logo Emblem -->
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-amberGold text-xs sm:text-sm font-semibold tracking-widest uppercase mb-2">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-5 h-5 rounded-full inline">
            <span>Pusat Grosir & Eceran Kemasan Plastik & Bahan Bakery</span>
        </div>

        <h1 class="font-serif text-4xl sm:text-6xl lg:text-7xl font-extrabold tracking-tight leading-tight sm:leading-none text-cream">
            Kemasan Plastik <br>
            <span class="text-amberGold italic font-medium">&</span> Bahan Kue Terlengkap
        </h1>

        <p class="max-w-2xl mx-auto text-base sm:text-xl text-stone-200 font-normal leading-relaxed">
            Solusi satu pintu bagi pengusaha kuliner, UMKM catering, bakery rumahan, dan warung makan. Produk berkualitas food grade dengan harga grosir terbaik.
        </p>

        <!-- CTAs -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-4">
            <a href="{{ route('products.index') }}" class="w-full sm:w-auto px-8 py-4 bg-brand-500 hover:bg-brand-600 text-white font-bold rounded-full shadow-lg hover:shadow-brand-500/50 hover:scale-105 transition-all duration-300 flex items-center justify-center gap-3">
                <i class="fa-solid fa-boxes-stacked"></i>
                <span>Lihat Katalog Produk & Belanja</span>
            </a>
            <a href="https://wa.me/6281234567890?text=Halo%20Admin%20Lakemba%2012,%20saya%20ingin%20konsultasi%20pembelian%20grosir%20dus" target="_blank" class="w-full sm:w-auto px-8 py-4 bg-white/15 hover:bg-white/25 text-white backdrop-blur-md border border-white/30 font-bold rounded-full hover:scale-105 transition-all duration-300 flex items-center justify-center gap-3">
                <i class="fa-brands fa-whatsapp text-emerald-400"></i>
                <span>Pesan Grosir / Tanya Dus</span>
            </a>
        </div>

        <!-- Social Proof Stats -->
        <div class="pt-8 border-t border-white/10 grid grid-cols-2 sm:grid-cols-4 gap-6 max-w-3xl mx-auto text-center">
            <div>
                <p class="text-2xl sm:text-3xl font-extrabold text-amberGold font-serif">500+ Menu</p>
                <p class="text-xs text-stone-300 mt-1">Kemasan & Bahan Kue</p>
            </div>
            <div>
                <p class="text-2xl sm:text-3xl font-extrabold text-amberGold font-serif">Food Grade</p>
                <p class="text-xs text-stone-300 mt-1">Higienis & Bebas Bau</p>
            </div>
            <div>
                <p class="text-2xl sm:text-3xl font-extrabold text-amberGold font-serif">Harga Grosir</p>
                <p class="text-xs text-stone-300 mt-1">Eceran Maupun Partai Besar</p>
            </div>
            <div>
                <p class="text-2xl sm:text-3xl font-extrabold text-amberGold font-serif">Siap Kirim</p>
                <p class="text-xs text-stone-300 mt-1">Instan Gojek/Grab & Kargo</p>
            </div>
        </div>
    </div>
</section>

<!-- Keunggulan Toko Plastik & Bahan Kue -->
<section class="py-16 bg-cream border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="bg-white p-6 rounded-2xl border border-stone-200/80 shadow-sm hover:shadow-md transition-shadow flex items-start gap-4">
                <div class="w-12 h-12 rounded-xl bg-brand-50 text-brand-500 flex items-center justify-center text-xl flex-shrink-0">
                    <i class="fa-solid fa-shield-virus"></i>
                </div>
                <div>
                    <h3 class="font-serif font-bold text-stone-900 text-lg">100% Food Grade</h3>
                    <p class="text-xs text-stone-600 mt-1 leading-relaxed">Plastik thinwall & cup bebas BPA, aman microwave, dan tidak berbau plastik tajam.</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-stone-200/80 shadow-sm hover:shadow-md transition-shadow flex items-start gap-4">
                <div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center text-xl flex-shrink-0">
                    <i class="fa-solid fa-wheat-awn"></i>
                </div>
                <div>
                    <h3 class="font-serif font-bold text-stone-900 text-lg">Bahan Kue Segar & Asli</h3>
                    <p class="text-xs text-stone-600 mt-1 leading-relaxed">Butter, ragi, cokelat, dan tepung resmi BPOM dengan masa kadaluarsa (expired) selalu panjang.</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-stone-200/80 shadow-sm hover:shadow-md transition-shadow flex items-start gap-4">
                <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-xl flex-shrink-0">
                    <i class="fa-solid fa-tags"></i>
                </div>
                <div>
                    <h3 class="font-serif font-bold text-stone-900 text-lg">Harga Grosir UMKM</h3>
                    <p class="text-xs text-stone-600 mt-1 leading-relaxed">Dapatkan potongan harga spesial untuk pembelian kuantiti pack, dus, maupun bal partai besar.</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-stone-200/80 shadow-sm hover:shadow-md transition-shadow flex items-start gap-4">
                <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center text-xl flex-shrink-0">
                    <i class="fa-solid fa-truck-fast"></i>
                </div>
                <div>
                    <h3 class="font-serif font-bold text-stone-900 text-lg">Pengiriman Cepat</h3>
                    <p class="text-xs text-stone-600 mt-1 leading-relaxed">Bisa dikirim instan kurir motor/mobil atau ambil langsung di kasir toko fisik kami.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Kategori Produk Showcase -->
<section class="py-20 bg-warmGray">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-14">
            <span class="text-brand-500 font-bold uppercase tracking-widest text-xs">Koleksi Lengkap</span>
            <h2 class="font-serif text-3xl sm:text-4xl font-extrabold text-stone-900 mt-2">Kategori Produk Pilihan</h2>
            <p class="text-stone-600 text-sm mt-3">Temukan kebutuhan kemasan makanan takeaway dan bahan pembuatan kue terbaik dalam satu tempat.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($categories as $category)
                <a href="{{ route('products.index', ['category' => $category->slug]) }}" class="group relative rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 block bg-stone-900 aspect-square">
                    <img src="{{ $category->image ?? 'https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?auto=format&fit=crop&w=600&q=80' }}" 
                         alt="{{ $category->name }}" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500 opacity-80 group-hover:opacity-60">
                    <div class="absolute inset-0 bg-gradient-to-t from-stone-950 via-stone-950/40 to-transparent"></div>
                    <div class="absolute bottom-0 inset-x-0 p-6 text-white">
                        <span class="text-[11px] font-bold uppercase tracking-widest text-amberGold mb-1 block">{{ $category->products_count }} Produk Siap Kirim</span>
                        <h3 class="font-serif text-xl font-bold group-hover:text-amberGold transition-colors">{{ $category->name }}</h3>
                        <p class="text-xs text-stone-300 mt-1 line-clamp-2 opacity-90">{{ $category->description }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>

<!-- Produk Terlaris (Best Sellers) -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-14">
            <div>
                <span class="text-brand-500 font-bold uppercase tracking-widest text-xs">Paling Sering Dibeli UMKM</span>
                <h2 class="font-serif text-3xl sm:text-4xl font-extrabold text-stone-900 mt-2">Produk Unggulan Lakemba 12</h2>
                <p class="text-stone-600 text-sm mt-2">Stok selalu fresh dan siap diantar untuk kelancaran usaha kuliner Anda.</p>
            </div>
            <a href="{{ route('products.index') }}" class="inline-flex items-center gap-2 font-bold text-brand-500 hover:text-brand-600 text-sm mt-4 md:mt-0 hover:underline">
                <span>Lihat Semua Produk ({{ count($featuredProducts) }}+)</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($featuredProducts as $product)
                <div class="bg-cream rounded-2xl overflow-hidden border border-stone-200/80 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col group">
                    <!-- Image with badge -->
                    <div class="relative overflow-hidden aspect-[4/3] bg-stone-100">
                        <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-3 left-3 bg-white/95 backdrop-blur-md text-brand-500 text-[11px] font-bold uppercase tracking-wider px-3 py-1 rounded-full shadow-sm">
                            {{ $product->category->name }}
                        </span>
                    </div>

                    <!-- Details -->
                    <div class="p-6 flex flex-col flex-grow">
                        <a href="{{ route('products.show', $product->slug) }}" class="font-serif text-lg font-bold text-stone-900 hover:text-brand-500 transition-colors line-clamp-1">
                            {{ $product->name }}
                        </a>
                        <p class="text-xs text-stone-600 mt-2 line-clamp-2 leading-relaxed flex-grow">
                            {{ $product->description }}
                        </p>

                        <div class="pt-5 mt-4 border-t border-stone-200/60 flex items-center justify-between">
                            <div>
                                <span class="text-[10px] uppercase font-bold text-stone-400 block">Harga Eceran</span>
                                <span class="font-serif text-lg font-extrabold text-brand-500">
                                    Rp {{ number_format($product->price, 0, ',', '.') }}
                                </span>
                            </div>

                            <button onclick="addToCart({{ $product->id }}, '{{ addslashes($product->name) }}', {{ $product->price }}, '{{ $product->image }}')" 
                                    class="px-4 py-2.5 bg-brand-500 hover:bg-brand-600 text-white rounded-xl text-xs font-bold flex items-center gap-2 shadow-sm hover:shadow transition-all active:scale-95">
                                <i class="fa-solid fa-cart-plus"></i>
                                <span>Beli</span>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Kisah & Komitmen Lakemba 12 untuk UMKM -->
<section class="py-24 bg-stone-900 text-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- Left: Imagery Collage -->
            <div class="grid grid-cols-2 gap-4 relative">
                <img src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?auto=format&fit=crop&w=600&q=80" 
                     alt="Gudang Kemasan Plastik" 
                     class="rounded-2xl object-cover shadow-2xl h-64 sm:h-80 w-full transform -rotate-1">
                <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=600&q=80" 
                     alt="Display Bahan Kue" 
                     class="rounded-2xl object-cover shadow-2xl h-64 sm:h-80 w-full transform rotate-2 mt-8">
                <!-- Floating Emblem -->
                <div class="absolute -bottom-6 left-1/2 -translate-x-1/2 bg-brand-500 border-4 border-stone-900 p-4 rounded-full shadow-2xl">
                    <img src="{{ asset('images/logo.png') }}" alt="Lakemba 12" class="w-16 h-16 rounded-full">
                </div>
            </div>

            <!-- Right: Brand Philosophy -->
            <div class="space-y-6">
                <div class="inline-block px-3 py-1 rounded-full bg-brand-500/20 text-amberGold border border-brand-500/30 text-xs font-bold uppercase tracking-widest">
                    Mitra Usaha Kuliner Anda
                </div>
                <h2 class="font-serif text-3xl sm:text-5xl font-extrabold text-cream leading-tight">
                    Tumbuh Bersama UMKM Kuliner & Bakery Indonesia.
                </h2>
                <p class="text-stone-300 text-sm sm:text-base leading-relaxed">
                    Lakemba 12 hadir untuk menjawab tantangan para pengusaha makanan: sulitnya mencari kemasan plastik food grade yang tebal dan higienis serta bahan kue original dengan harga ramah di kantong modal usaha.
                </p>
                <div class="grid grid-cols-2 gap-4 pt-4 border-t border-stone-800">
                    <div>
                        <h4 class="font-serif text-lg font-bold text-amberGold">Kemasan Standar Food-Safe</h4>
                        <p class="text-xs text-stone-400 mt-1">Thinwall, standing pouch, dan cup bersertifikat aman kontak pangan.</p>
                    </div>
                    <div>
                        <h4 class="font-serif text-lg font-bold text-amberGold">Bahan Baking Terlengkap</h4>
                        <p class="text-xs text-stone-400 mt-1">Dari mentega premium, cokelat masak, ragi impor, hingga keju balok serbaguna.</p>
                    </div>
                </div>
                <div class="pt-4">
                    <a href="{{ route('about') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-amberGold hover:bg-amber-500 text-stone-900 font-bold rounded-full text-xs uppercase tracking-wider transition-all">
                        <span>Pelajari Profil Toko Kami</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cuplikan Galeri & Stok Toko -->
<section class="py-20 bg-warmGray">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-14">
            <span class="text-brand-500 font-bold uppercase tracking-widest text-xs">Dokumentasi Toko</span>
            <h2 class="font-serif text-3xl sm:text-4xl font-extrabold text-stone-900 mt-2">Etalase & Gudang Stok Lakemba 12</h2>
            <p class="text-stone-600 text-sm mt-3">Kunjungi toko fisik kami atau pesan secara online dengan kepastian stok selalu siap kirim.</p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
            @foreach($galleryImages as $image)
                <div class="group relative rounded-2xl overflow-hidden aspect-[4/3] shadow-sm hover:shadow-lg transition-all duration-300">
                    <img src="{{ $image->image_url }}" alt="{{ $image->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-stone-900/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-4 text-white">
                        <span class="text-[10px] text-amberGold uppercase tracking-wider font-bold">{{ $image->category }}</span>
                        <h4 class="font-serif font-bold text-sm">{{ $image->title }}</h4>
                        <p class="text-[11px] text-stone-300 line-clamp-1">{{ $image->caption }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-10">
            <a href="{{ route('gallery') }}" class="inline-flex items-center gap-2 px-8 py-3.5 bg-white border border-stone-300 hover:border-brand-500 text-stone-800 hover:text-brand-500 font-bold rounded-full text-xs uppercase tracking-wider transition-all shadow-sm">
                <span>Lihat Seluruh Galeri Toko</span>
                <i class="fa-solid fa-images"></i>
            </a>
        </div>
    </div>
</section>

<!-- Ulasan Pelanggan / Pelaku Usaha Kuliner -->
<section class="py-20 bg-white border-t border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-xl mx-auto mb-14">
            <div class="flex items-center justify-center gap-1 text-amber-500 text-sm mb-2">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <h2 class="font-serif text-3xl font-extrabold text-stone-900">Dipercaya Ratusan Pelaku Usaha</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-cream p-8 rounded-2xl border border-stone-200/80 shadow-sm relative">
                <i class="fa-solid fa-quote-right text-3xl text-stone-300 absolute top-6 right-6"></i>
                <p class="text-sm text-stone-700 italic leading-relaxed">
                    "Thinwall 650ml-nya kualitas premium, tutupnya presisi tidak gampang tumpah saat dikirim kurir ojol. Harga grosirnya sangat bersahabat buat usaha katering saya."
                </p>
                <div class="mt-6 flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-brand-500 text-white font-bold flex items-center justify-center text-sm">
                        DK
                    </div>
                    <div>
                        <h4 class="font-bold text-stone-900 text-sm">Dapur Bu Kartini</h4>
                        <span class="text-xs text-stone-500">Usaha Katering Harian & Nasi Box</span>
                    </div>
                </div>
            </div>

            <div class="bg-cream p-8 rounded-2xl border border-stone-200/80 shadow-sm relative">
                <i class="fa-solid fa-quote-right text-3xl text-stone-300 absolute top-6 right-6"></i>
                <p class="text-sm text-stone-700 italic leading-relaxed">
                    "Butter Wijsman dan cokelat Colatta-nya dijamin 100% original. Stok selalu ada waktu musim pesanan kue kering lebaran dan natal. Pengiriman cepat banget!"
                </p>
                <div class="mt-6 flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-brand-500 text-white font-bold flex items-center justify-center text-sm">
                        MB
                    </div>
                    <div>
                        <h4 class="font-bold text-stone-900 text-sm">Mawar Bakery House</h4>
                        <span class="text-xs text-stone-500">Produsen Kue Kering & Roti</span>
                    </div>
                </div>
            </div>

            <div class="bg-cream p-8 rounded-2xl border border-stone-200/80 shadow-sm relative">
                <i class="fa-solid fa-quote-right text-3xl text-stone-300 absolute top-6 right-6"></i>
                <p class="text-sm text-stone-700 italic leading-relaxed">
                    "Cup oval 16 oz + tutup cembungnya tebal dan bening mengkilap. Bikin jualan minuman boba dan es kopi susu saya kelihatan mewah dan disukai anak muda."
                </p>
                <div class="mt-6 flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-brand-500 text-white font-bold flex items-center justify-center text-sm">
                        KO
                    </div>
                    <div>
                        <h4 class="font-bold text-stone-900 text-sm">Kopi Nusantara Booth</h4>
                        <span class="text-xs text-stone-500">Usaha Minuman Kekinian</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call To Action Grosir & Pemesanan -->
<section class="py-20 bg-brand-500 text-white text-center relative overflow-hidden">
    <div class="max-w-4xl mx-auto px-4 relative z-10 space-y-6">
        <h2 class="font-serif text-3xl sm:text-5xl font-extrabold text-cream">
            Butuh Pasokan Kemasan Plastik & Bahan Kue Rutin?
        </h2>
        <p class="text-brand-100 max-w-xl mx-auto text-sm sm:text-base">
            Belanja eceran langsung via website atau hubungi admin kami untuk penawaran harga grosir partai besar (per dus/bal) dan kerja sama supply rutin.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-4">
            <a href="{{ route('products.index') }}" class="w-full sm:w-auto px-8 py-4 bg-white text-brand-600 hover:bg-stone-100 font-bold rounded-full shadow-lg hover:scale-105 transition-all text-sm uppercase tracking-wider">
                Mulai Belanja Sekarang
            </a>
            <a href="https://wa.me/6281234567890?text=Halo%20Admin%20Lakemba%2012,%20saya%20ingin%20tanya%20harga%20grosir%20dus" target="_blank" class="w-full sm:w-auto px-8 py-4 bg-emerald-600 hover:bg-emerald-700 text-white font-bold rounded-full shadow-lg hover:scale-105 transition-all text-sm uppercase tracking-wider flex items-center justify-center gap-2">
                <i class="fa-brands fa-whatsapp text-lg"></i>
                <span>Hubungi Admin Grosir</span>
            </a>
        </div>
    </div>
</section>

@endsection
