@extends('layouts.app')

@section('title', 'Tentang Toko - Lakemba 12 Toko Plastik & Bahan Kue')
@section('meta_description', 'Mengenal Toko Lakemba 12, mitra terpercaya penyedia aneka kemasan plastik makanan food grade dan bahan baku kue bakery untuk UMKM.')

@section('content')

<!-- Header Hero -->
<section class="bg-stone-900 text-white py-20 relative overflow-hidden">
    <div class="max-w-4xl mx-auto px-4 text-center relative z-10 space-y-4">
        <span class="text-xs uppercase tracking-widest text-amberGold font-bold">Profil & Komitmen Toko</span>
        <h1 class="font-serif text-4xl sm:text-6xl font-extrabold text-cream leading-tight">
            Tentang Lakemba 12
        </h1>
        <p class="text-stone-300 text-sm sm:text-base leading-relaxed">
            Menjadi mitra andalan bagi pertumbuhan ribuan pengusaha kuliner, bakery, katering, dan pedagang minuman di Indonesia.
        </p>
    </div>
</section>

<!-- Content Story Section -->
<section class="py-20 bg-cream">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 space-y-20">
        
        <!-- Story 1: Mengapa Lakemba 12 Hadir -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <span class="text-brand-500 font-bold text-xs uppercase tracking-widest">Kisah Kami</span>
                <h2 class="font-serif text-3xl font-extrabold text-stone-900 leading-tight">
                    Dedikasi Mendukung Kelancaran Usaha Kuliner Anda
                </h2>
                <p class="text-stone-600 text-sm leading-relaxed">
                    Lakemba 12 didirikan berawal dari kebutuhan nyata para pelaku UMKM kuliner di sekitar kami yang sering kesulitan mendapatkan kemasan makanan food grade berkualitas tanpa harus membeli dalam minimum order pabrik yang sangat besar.
                </p>
                <p class="text-stone-600 text-sm leading-relaxed">
                    Kami hadir sebagai solusi satu pintu (one-stop shop) yang menjembatani kebutuhan kemasan takeaway plastik higienis, cup gelas minuman tebal, kotak thinwall, hingga bahan baku pembuatan kue seperti tepung, mentega Wijsman, cokelat Colatta, ragi, dan keju dengan harga eceran yang terjangkau maupun harga grosir yang menguntungkan.
                </p>
            </div>
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?auto=format&fit=crop&w=800&q=80" 
                     alt="Gudang Kemasan Lakemba 12" 
                     class="rounded-3xl shadow-xl w-full object-cover aspect-[4/3]">
            </div>
        </div>

        <!-- Story 2: Standar Mutu Food-Safe & Keaslian Produk -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center md:flex-row-reverse">
            <div class="md:order-2 space-y-6">
                <span class="text-amberGold font-bold text-xs uppercase tracking-widest">Kualitas Terjamin</span>
                <h2 class="font-serif text-3xl font-extrabold text-stone-900 leading-tight">
                    Hanya Produk Food Grade & Bahan Resmi BPOM
                </h2>
                <p class="text-stone-600 text-sm leading-relaxed">
                    Kesehatan dan kepuasan pelanggan akhir Anda adalah prioritas kami. Oleh karena itu, seluruh kemasan plastik yang kami sediakan bersertifikasi food grade, tahan panas microwave, dan tidak melepaskan zat berbahaya pada makanan.
                </p>
                <p class="text-stone-600 text-sm leading-relaxed">
                    Begitu pula dengan seluruh bahan baku kue kami: disimpan di ruangan sejuk dengan rotasi stok cepat (FIFO) sehingga masa kadaluarsa selalu segar dan terjamin keasliannya dari distributor resmi produsen.
                </p>
            </div>
            <div class="md:order-1 relative">
                <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=800&q=80" 
                     alt="Bahan Baking Berkualitas" 
                     class="rounded-3xl shadow-xl w-full object-cover aspect-[4/3]">
            </div>
        </div>

        <!-- Nilai Utama -->
        <div class="bg-white p-8 sm:p-14 rounded-3xl border border-stone-200/80 shadow-sm">
            <div class="text-center max-w-xl mx-auto mb-10">
                <span class="text-brand-500 font-bold uppercase text-xs tracking-widest">Komitmen Layanan</span>
                <h3 class="font-serif text-2xl sm:text-3xl font-bold text-stone-900 mt-1">Mengapa Berbelanja di Lakemba 12?</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center space-y-2">
                    <div class="w-12 h-12 rounded-full bg-brand-50 text-brand-500 flex items-center justify-center mx-auto text-lg">
                        <i class="fa-solid fa-boxes-packing"></i>
                    </div>
                    <h4 class="font-serif font-bold text-stone-900">Kelengkapan Produk</h4>
                    <p class="text-xs text-stone-500 leading-relaxed">Lebih dari 500 SKU kemasan mika, thinwall, botol, plastik zipper, dan aneka bahan kue tersedia lengkap.</p>
                </div>
                <div class="text-center space-y-2">
                    <div class="w-12 h-12 rounded-full bg-amber-50 text-amber-600 flex items-center justify-center mx-auto text-lg">
                        <i class="fa-solid fa-hand-holding-dollar"></i>
                    </div>
                    <h4 class="font-serif font-bold text-stone-900">Skema Harga Grosir</h4>
                    <p class="text-xs text-stone-500 leading-relaxed">Mendukung efisiensi biaya produksi usaha Anda dengan diskon volume kuantiti yang transparan.</p>
                </div>
                <div class="text-center space-y-2">
                    <div class="w-12 h-12 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center mx-auto text-lg">
                        <i class="fa-solid fa-truck-ramp-box"></i>
                    </div>
                    <h4 class="font-serif font-bold text-stone-900">Pengiriman Cepat & Aman</h4>
                    <p class="text-xs text-stone-500 leading-relaxed">Siap kirim hari yang sama via kurir instan, ekspedisi reguler, maupun armada kargo antar kota.</p>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection
