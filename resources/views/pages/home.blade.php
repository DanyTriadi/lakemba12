@extends('layouts.app')

@section('title', 'Lakemba 12 - Specialty Coffee & Artisan Bakery')

@section('content')

<!-- Hero Section with Background Photography & Gradient Overlay -->
<section class="relative bg-coffeeDark min-h-[85vh] flex items-center justify-center overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?auto=format&fit=crop&w=1920&q=80" 
             alt="Lakemba 12 Coffee Space" 
             class="w-full h-full object-cover object-center filter brightness-50 scale-105 transform motion-safe:animate-pulse">
        <div class="absolute inset-0 hero-gradient"></div>
    </div>

    <!-- Hero Content -->
    <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-24 text-center text-white space-y-8">
        <!-- Logo Emblem -->
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-amberGold text-xs sm:text-sm font-semibold tracking-widest uppercase mb-2 badge-pulse">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-5 h-5 rounded-full inline">
            <span>Specialty Roastery & Artisan Cafe</span>
        </div>

        <h1 class="font-serif text-4xl sm:text-6xl lg:text-7xl font-extrabold tracking-tight leading-tight sm:leading-none text-cream">
            Harmoni Cita Rasa <br>
            <span class="text-amberGold italic font-medium">&</span> Kehangatan Suasana
        </h1>

        <p class="max-w-2xl mx-auto text-base sm:text-xl text-stone-300 font-normal leading-relaxed">
            Menghadirkan kurasi biji kopi terbaik nusantara, roti artisan dipanggang fresh setiap fajar, serta ruang estetik yang merangkul setiap obrolan berharga Anda.
        </p>

        <!-- CTAs -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-4">
            <a href="{{ route('products.index') }}" class="w-full sm:w-auto px-8 py-4 bg-brand-500 hover:bg-brand-600 text-white font-bold rounded-full shadow-lg hover:shadow-brand-500/50 hover:scale-105 transition-all duration-300 flex items-center justify-center gap-3">
                <i class="fa-solid fa-mug-hot"></i>
                <span>Jelajahi Menu & Pesan</span>
            </a>
            <a href="{{ route('contact') }}" class="w-full sm:w-auto px-8 py-4 bg-white/15 hover:bg-white/25 text-white backdrop-blur-md border border-white/30 font-bold rounded-full hover:scale-105 transition-all duration-300 flex items-center justify-center gap-3">
                <i class="fa-solid fa-calendar-check text-amberGold"></i>
                <span>Reservasi Meja / Event</span>
            </a>
        </div>

        <!-- Social Proof Stats -->
        <div class="pt-8 border-t border-white/10 grid grid-cols-2 sm:grid-cols-4 gap-6 max-w-3xl mx-auto text-center">
            <div>
                <p class="text-2xl sm:text-3xl font-extrabold text-amberGold font-serif">4.9 / 5</p>
                <p class="text-xs text-stone-400 mt-1">Ulasan Google (1,200+)</p>
            </div>
            <div>
                <p class="text-2xl sm:text-3xl font-extrabold text-amberGold font-serif">100%</p>
                <p class="text-xs text-stone-400 mt-1">Single Origin Pilihan</p>
            </div>
            <div>
                <p class="text-2xl sm:text-3xl font-extrabold text-amberGold font-serif">Fresh</p>
                <p class="text-xs text-stone-400 mt-1">Pastry Harian Prancis</p>
            </div>
            <div>
                <p class="text-2xl sm:text-3xl font-extrabold text-amberGold font-serif">150 Mbps</p>
                <p class="text-xs text-stone-400 mt-1">Wi-Fi Cepat untuk WFC</p>
            </div>
        </div>
    </div>
</section>

<!-- Value Proposition / Keunggulan Lakemba 12 -->
<section class="py-16 bg-cream border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="bg-white p-6 rounded-2xl border border-stone-200/80 shadow-sm hover:shadow-md transition-shadow flex items-start gap-4">
                <div class="w-12 h-12 rounded-xl bg-brand-50 text-brand-500 flex items-center justify-center text-xl flex-shrink-0">
                    <i class="fa-solid fa-seedling"></i>
                </div>
                <div>
                    <h3 class="font-serif font-bold text-stone-900 text-lg">Biji Kopi Terpilih</h3>
                    <p class="text-xs text-stone-600 mt-1 leading-relaxed">Disangrai secara presisi untuk menonjolkan aroma dan karakter notes alami.</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-stone-200/80 shadow-sm hover:shadow-md transition-shadow flex items-start gap-4">
                <div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center text-xl flex-shrink-0">
                    <i class="fa-solid fa-bread-slice"></i>
                </div>
                <div>
                    <h3 class="font-serif font-bold text-stone-900 text-lg">Artisan Bakery</h3>
                    <p class="text-xs text-stone-600 mt-1 leading-relaxed">Croissant & cheesecake dipanggang fresh setiap pagi tanpa bahan pengawet.</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-stone-200/80 shadow-sm hover:shadow-md transition-shadow flex items-start gap-4">
                <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-xl flex-shrink-0">
                    <i class="fa-solid fa-laptop-code"></i>
                </div>
                <div>
                    <h3 class="font-serif font-bold text-stone-900 text-lg">Work-Friendly Space</h3>
                    <p class="text-xs text-stone-600 mt-1 leading-relaxed">Didukung colokan listrik di hampir setiap sudut, musik santai, dan kursi ergonomis.</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-stone-200/80 shadow-sm hover:shadow-md transition-shadow flex items-start gap-4">
                <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center text-xl flex-shrink-0">
                    <i class="fa-solid fa-motorcycle"></i>
                </div>
                <div>
                    <h3 class="font-serif font-bold text-stone-900 text-lg">Pesan Mudah & Cepat</h3>
                    <p class="text-xs text-stone-600 mt-1 leading-relaxed">Pesan online dengan konfirmasi WhatsApp instan langsung ke barista kami.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Kategori Menu Showcase -->
<section class="py-20 bg-warmGray">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-14">
            <span class="text-brand-500 font-bold uppercase tracking-widest text-xs">Pilihan Istimewa</span>
            <h2 class="font-serif text-3xl sm:text-4xl font-extrabold text-stone-900 mt-2">Koleksi Rasa Lakemba 12</h2>
            <p class="text-stone-600 text-sm mt-3">Setiap racikan dibuat dengan dedikasi tinggi untuk memberikan kenikmatan di setiap tegukan dan gigitan.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($categories as $category)
                <a href="{{ route('products.index', ['category' => $category->slug]) }}" class="group relative rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 block bg-stone-900 aspect-square">
                    <img src="{{ $category->image ?? 'https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=600&q=80' }}" 
                         alt="{{ $category->name }}" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500 opacity-80 group-hover:opacity-60">
                    <div class="absolute inset-0 bg-gradient-to-t from-stone-950 via-stone-950/40 to-transparent"></div>
                    <div class="absolute bottom-0 inset-x-0 p-6 text-white">
                        <span class="text-[11px] font-bold uppercase tracking-widest text-amberGold mb-1 block">{{ $category->products_count }} Menu Pilihan</span>
                        <h3 class="font-serif text-xl font-bold group-hover:text-amberGold transition-colors">{{ $category->name }}</h3>
                        <p class="text-xs text-stone-300 mt-1 line-clamp-2 opacity-90">{{ $category->description }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>

<!-- Produk Unggulan / Best Sellers -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-14">
            <div>
                <span class="text-brand-500 font-bold uppercase tracking-widest text-xs">Menu Paling Dicintai</span>
                <h2 class="font-serif text-3xl sm:text-4xl font-extrabold text-stone-900 mt-2">Favorit Pengunjung Lakemba</h2>
                <p class="text-stone-600 text-sm mt-2">Menu ikonik yang wajib Anda nikmati saat berkunjung atau memesan online.</p>
            </div>
            <a href="{{ route('products.index') }}" class="inline-flex items-center gap-2 font-bold text-brand-500 hover:text-brand-600 text-sm mt-4 md:mt-0 hover:underline">
                <span>Lihat Seluruh Menu ({{ count($featuredProducts) }}+)</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($featuredProducts as $product)
                <div class="bg-cream rounded-2xl overflow-hidden border border-stone-200/80 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col group">
                    <!-- Image with badge -->
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-3 left-3 bg-white/90 backdrop-blur-md text-brand-500 text-[11px] font-bold uppercase tracking-wider px-3 py-1 rounded-full shadow-sm">
                            {{ $product->category->name }}
                        </span>
                    </div>

                    <!-- Details -->
                    <div class="p-6 flex flex-col flex-grow">
                        <a href="{{ route('products.show', $product->slug) }}" class="font-serif text-xl font-bold text-stone-900 hover:text-brand-500 transition-colors line-clamp-1">
                            {{ $product->name }}
                        </a>
                        <p class="text-xs text-stone-600 mt-2 line-clamp-2 leading-relaxed flex-grow">
                            {{ $product->description }}
                        </p>

                        <div class="pt-5 mt-4 border-t border-stone-200/60 flex items-center justify-between">
                            <div>
                                <span class="text-[10px] uppercase font-bold text-stone-400 block">Harga</span>
                                <span class="font-serif text-lg font-extrabold text-brand-500">
                                    Rp {{ number_format($product->price, 0, ',', '.') }}
                                </span>
                            </div>

                            <button onclick="addToCart({{ $product->id }}, '{{ addslashes($product->name) }}', {{ $product->price }}, '{{ $product->image }}')" 
                                    class="px-4 py-2.5 bg-brand-500 hover:bg-brand-600 text-white rounded-xl text-xs font-bold flex items-center gap-2 shadow-sm hover:shadow transition-all active:scale-95">
                                <i class="fa-solid fa-plus"></i>
                                <span>Pesan</span>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- About Lakemba 12 Story Section -->
<section class="py-24 bg-coffeeDark text-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- Left: High Quality Imagery Collage -->
            <div class="grid grid-cols-2 gap-4 relative">
                <img src="https://images.unsplash.com/photo-1442512595331-e89e73853f31?auto=format&fit=crop&w=600&q=80" 
                     alt="Barista at work" 
                     class="rounded-2xl object-cover shadow-2xl h-64 sm:h-80 w-full transform -rotate-1">
                <img src="https://images.unsplash.com/photo-1555507036-ab1f4038808a?auto=format&fit=crop&w=600&q=80" 
                     alt="Freshly baked pastries" 
                     class="rounded-2xl object-cover shadow-2xl h-64 sm:h-80 w-full transform rotate-2 mt-8">
                <!-- Floating Emblem -->
                <div class="absolute -bottom-6 left-1/2 -translate-x-1/2 bg-brand-500 border-4 border-coffeeDark p-4 rounded-full shadow-2xl">
                    <img src="{{ asset('images/logo.png') }}" alt="Lakemba 12" class="w-16 h-16 rounded-full">
                </div>
            </div>

            <!-- Right: Brand Philosophy -->
            <div class="space-y-6">
                <div class="inline-block px-3 py-1 rounded-full bg-brand-500/20 text-amberGold border border-brand-500/30 text-xs font-bold uppercase tracking-widest">
                    Dedikasi & Passion
                </div>
                <h2 class="font-serif text-3xl sm:text-5xl font-extrabold text-cream leading-tight">
                    Lebih Dari Sekadar Secangkir Kopi, Ini Ruang Bertemu Jiwa.
                </h2>
                <p class="text-stone-300 text-sm sm:text-base leading-relaxed">
                    Terinspirasi dari semangat komunitas dan keramahan sejati, Lakemba 12 lahir untuk menjadi oase ketenangan di tengah hiruk-pikuk kesibukan. Kami percaya bahwa setiap cangkir kopi membawa cerita tentang tanah asal, sang petani, ketelitian sang roaster, dan sentuhan tulus sang barista.
                </p>
                <div class="grid grid-cols-2 gap-4 pt-4 border-t border-stone-800">
                    <div>
                        <h4 class="font-serif text-lg font-bold text-amberGold">100% Arabica & Robusta Blend</h4>
                        <p class="text-xs text-stone-400 mt-1">Biji kopi nusantara berkualitas specialty dari Aceh Gayo hingga Toraja.</p>
                    </div>
                    <div>
                        <h4 class="font-serif text-lg font-bold text-amberGold">Hygienic & Halal Friendly</h4>
                        <p class="text-xs text-stone-400 mt-1">Bahan-bahan bermutu tinggi diolah secara higienis dan bertanggung jawab.</p>
                    </div>
                </div>
                <div class="pt-4">
                    <a href="{{ route('about') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-amberGold hover:bg-amber-500 text-stone-900 font-bold rounded-full text-xs uppercase tracking-wider transition-all">
                        <span>Baca Cerita Lengkap Kami</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cuplikan Galeri & Suasana -->
<section class="py-20 bg-warmGray">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-14">
            <span class="text-brand-500 font-bold uppercase tracking-widest text-xs">Visual Lakemba</span>
            <h2 class="font-serif text-3xl sm:text-4xl font-extrabold text-stone-900 mt-2">Suasana Hangat yang Menyambut</h2>
            <p class="text-stone-600 text-sm mt-3">Setiap sudut dirancang estetis dan nyaman untuk bekerja, berbincang santai, maupun menikmati waktu sendiri.</p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
            @foreach($galleryImages as $image)
                <div class="group relative rounded-2xl overflow-hidden aspect-[4/3] shadow-sm hover:shadow-lg transition-all duration-300">
                    <img src="{{ $image->image_url }}" alt="{{ $image->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-stone-900/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-4 text-white">
                        <span class="text-[10px] text-amberGold uppercase tracking-wider font-bold">{{ $image->category }}</span>
                        <h4 class="font-serif font-bold text-sm">{{ $image->title }}</h4>
                        <p class="text-[11px] text-stone-300 line-clamp-1">{{ $image->caption }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-10">
            <a href="{{ route('gallery') }}" class="inline-flex items-center gap-2 px-8 py-3.5 bg-white border border-stone-300 hover:border-brand-500 text-stone-800 hover:text-brand-500 font-bold rounded-full text-xs uppercase tracking-wider transition-all shadow-sm">
                <span>Lihat Seluruh Galeri Foto</span>
                <i class="fa-solid fa-camera"></i>
            </a>
        </div>
    </div>
</section>

<!-- Ulasan Pelanggan Setia -->
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
            <h2 class="font-serif text-3xl font-extrabold text-stone-900">Kata Mereka Tentang Lakemba 12</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-cream p-8 rounded-2xl border border-stone-200/80 shadow-sm relative">
                <i class="fa-solid fa-quote-right text-3xl text-stone-300 absolute top-6 right-6"></i>
                <p class="text-sm text-stone-700 italic leading-relaxed">
                    "Caramel Macchiato-nya juara banget! Karamelnya homemade jadi rasanya legit tapi nggak bikin enek. Tempatnya juga sangat nyaman buat nugas seharian."
                </p>
                <div class="mt-6 flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-brand-500 text-white font-bold flex items-center justify-center text-sm">
                        AR
                    </div>
                    <div>
                        <h4 class="font-bold text-stone-900 text-sm">Aditya Rizky</h4>
                        <span class="text-xs text-stone-500">Software Engineer & Remote Worker</span>
                    </div>
                </div>
            </div>

            <div class="bg-cream p-8 rounded-2xl border border-stone-200/80 shadow-sm relative">
                <i class="fa-solid fa-quote-right text-3xl text-stone-300 absolute top-6 right-6"></i>
                <p class="text-sm text-stone-700 italic leading-relaxed">
                    "Croissant-nya renyah di luar, moist di dalam. Kombinasi sama Cold Brew Nitro bener-bener perpaduan surga pagi hari. Baristanya ramah dan mengerti selera saya."
                </p>
                <div class="mt-6 flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-brand-500 text-white font-bold flex items-center justify-center text-sm">
                        SN
                    </div>
                    <div>
                        <h4 class="font-bold text-stone-900 text-sm">Sarah Nadira</h4>
                        <span class="text-xs text-stone-500">Food Enthusiast</span>
                    </div>
                </div>
            </div>

            <div class="bg-cream p-8 rounded-2xl border border-stone-200/80 shadow-sm relative">
                <i class="fa-solid fa-quote-right text-3xl text-stone-300 absolute top-6 right-6"></i>
                <p class="text-sm text-stone-700 italic leading-relaxed">
                    "Area outdoor garden-nya sangat asri dan adem di sore hari. Cocok banget buat meeting santai bareng klien atau sekadar kumpul akhir pekan bareng keluarga."
                </p>
                <div class="mt-6 flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-brand-500 text-white font-bold flex items-center justify-center text-sm">
                        BP
                    </div>
                    <div>
                        <h4 class="font-bold text-stone-900 text-sm">Bambang Pratama</h4>
                        <span class="text-xs text-stone-500">Entrepreneur</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call To Action Pemesanan & Reservasi -->
<section class="py-20 bg-brand-500 text-white text-center relative overflow-hidden">
    <div class="max-w-4xl mx-auto px-4 relative z-10 space-y-6">
        <h2 class="font-serif text-3xl sm:text-5xl font-extrabold text-cream">
            Siap Menikmati Seduhan Kopi Istimewa Hari Ini?
        </h2>
        <p class="text-brand-100 max-w-xl mx-auto text-sm sm:text-base">
            Pesan online sekarang untuk antar cepat atau mampir langsung ke outlet Lakemba 12. Nikmati atmosfer hangat dan pelayanan terbaik dari kami.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-4">
            <a href="{{ route('products.index') }}" class="w-full sm:w-auto px-8 py-4 bg-white text-brand-600 hover:bg-stone-100 font-bold rounded-full shadow-lg hover:scale-105 transition-all text-sm uppercase tracking-wider">
                Pesan Menu Sekarang
            </a>
            <a href="https://wa.me/6281234567890" target="_blank" class="w-full sm:w-auto px-8 py-4 bg-emerald-600 hover:bg-emerald-700 text-white font-bold rounded-full shadow-lg hover:scale-105 transition-all text-sm uppercase tracking-wider flex items-center justify-center gap-2">
                <i class="fa-brands fa-whatsapp text-lg"></i>
                <span>Reservasi via WhatsApp</span>
            </a>
        </div>
    </div>
</section>

@endsection
