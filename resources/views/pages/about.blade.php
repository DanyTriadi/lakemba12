@extends('layouts.app')

@section('title', 'Cerita Kami - Lakemba 12 Specialty Coffee')
@section('meta_description', 'Pelajari perjalanan Lakemba 12, filosofi seduhan kami, dan komitmen menghadirkan ruang hangat bagi para pecinta kopi.')

@section('content')

<!-- Header Hero -->
<section class="bg-coffeeDark text-white py-20 relative overflow-hidden">
    <div class="max-w-4xl mx-auto px-4 text-center relative z-10 space-y-4">
        <span class="text-xs uppercase tracking-widest text-amberGold font-bold">Filosofi & Kisah Perjalanan</span>
        <h1 class="font-serif text-4xl sm:text-6xl font-extrabold text-cream leading-tight">
            Di Balik Setiap Cangkir Lakemba 12
        </h1>
        <p class="text-stone-300 text-sm sm:text-base leading-relaxed">
            Menghubungkan cerita para petani kopi lokal nusantara dengan momen berharga dalam kehidupan keseharian Anda.
        </p>
    </div>
</section>

<!-- Content Story Section -->
<section class="py-20 bg-cream">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 space-y-20">
        
        <!-- Story 1 -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <span class="text-brand-500 font-bold text-xs uppercase tracking-widest">Awal Perjalanan</span>
                <h2 class="font-serif text-3xl font-extrabold text-stone-900 leading-tight">
                    Lahir Dari Kecintaan Akan Kopi Nusantara
                </h2>
                <p class="text-stone-600 text-sm leading-relaxed">
                    Lakemba 12 didirikan dengan sebuah visi sederhana: menjadikan kedai kopi bukan sekadar tempat membeli kafein, melainkan sebuah ruang ketiga (third place) di mana ide-ide lahir, persahabatan dipererat, dan rasa dihargai dengan tulus.
                </p>
                <p class="text-stone-600 text-sm leading-relaxed">
                    Kami menjelajahi perkebunan di dataran tinggi Aceh Gayo, lereng Gunung Kerinci, hingga pegunungan Toraja untuk menemukan biji kopi dengan cita rasa unik dan mendukung kesejahteraan petani lokal melalui perdagangan langsung (fair trade).
                </p>
            </div>
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1442512595331-e89e73853f31?auto=format&fit=crop&w=800&q=80" 
                     alt="Lakemba Roastery" 
                     class="rounded-3xl shadow-xl w-full object-cover aspect-[4/3]">
            </div>
        </div>

        <!-- Story 2: Craftsmanship & Bakery -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center md:flex-row-reverse">
            <div class="md:order-2 space-y-6">
                <span class="text-amberGold font-bold text-xs uppercase tracking-widest">Keahlian & Bahan Alami</span>
                <h2 class="font-serif text-3xl font-extrabold text-stone-900 leading-tight">
                    Seni Sangrai & Roti Panggang Pagi
                </h2>
                <p class="text-stone-600 text-sm leading-relaxed">
                    Setiap batch biji kopi kami sangrai dengan profil pemanggangan presisi untuk mengeluarkan aroma karamel, floral, maupun fruity khas tiap varietas. Di saat bersamaan, tim baker kami mengaduk adonan croissant berlapis dengan butter Prancis murni.
                </p>
                <p class="text-stone-600 text-sm leading-relaxed">
                    Tidak ada bahan artifisial, tidak ada kompromi mutu. Kesegaran adalah janji harian yang kami jaga sejak pintu kedai dibuka pada pukul 7 pagi.
                </p>
            </div>
            <div class="md:order-1 relative">
                <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=800&q=80" 
                     alt="Artisan Pastries" 
                     class="rounded-3xl shadow-xl w-full object-cover aspect-[4/3]">
            </div>
        </div>

        <!-- Core Values -->
        <div class="bg-white p-8 sm:p-14 rounded-3xl border border-stone-200/80 shadow-sm">
            <div class="text-center max-w-xl mx-auto mb-10">
                <span class="text-brand-500 font-bold uppercase text-xs tracking-widest">Nilai Inti</span>
                <h3 class="font-serif text-2xl sm:text-3xl font-bold text-stone-900 mt-1">Komitmen Kami untuk Anda</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center space-y-2">
                    <div class="w-12 h-12 rounded-full bg-brand-50 text-brand-500 flex items-center justify-center mx-auto text-lg">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                    <h4 class="font-serif font-bold text-stone-900">Ketulusan Layanan</h4>
                    <p class="text-xs text-stone-500 leading-relaxed">Barista kami selalu siap menyapa dengan senyuman dan mendengarkan preferensi cangkir kopi Anda.</p>
                </div>
                <div class="text-center space-y-2">
                    <div class="w-12 h-12 rounded-full bg-amber-50 text-amber-600 flex items-center justify-center mx-auto text-lg">
                        <i class="fa-solid fa-gem"></i>
                    </div>
                    <h4 class="font-serif font-bold text-stone-900">Kualitas Tanpa Kompromi</h4>
                    <p class="text-xs text-stone-500 leading-relaxed">Menggunakan mesin espresso La Marzocco dan susu pasteurisasi segar kualitas tertinggi.</p>
                </div>
                <div class="text-center space-y-2">
                    <div class="w-12 h-12 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center mx-auto text-lg">
                        <i class="fa-solid fa-leaf"></i>
                    </div>
                    <h4 class="font-serif font-bold text-stone-900">Peduli Lingkungan</h4>
                    <p class="text-xs text-stone-500 leading-relaxed">Menggunakan sedotan biodegradable dan memberikan potongan harga jika membawa tumbler sendiri.</p>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection
