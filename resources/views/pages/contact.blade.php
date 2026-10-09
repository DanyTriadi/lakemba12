@extends('layouts.app')

@section('title', 'Kontak & Pemesanan Grosir - Lakemba 12 Toko Plastik & Bahan Kue')
@section('meta_description', 'Hubungi toko Lakemba 12 untuk konsultasi ukuran kemasan plastik, pemesanan bahan kue partai besar, atau kunjungi toko fisik kami.')

@section('content')

<!-- Header -->
<section class="bg-stone-900 text-white py-16 text-center">
    <div class="max-w-4xl mx-auto px-4 space-y-2">
        <span class="text-xs uppercase tracking-widest text-amberGold font-bold">Layanan Pelanggan & Grosir</span>
        <h1 class="font-serif text-3xl sm:text-5xl font-extrabold text-cream">Kontak & Pemesanan Grosir</h1>
        <p class="text-stone-300 text-sm max-w-lg mx-auto">Tim kami siap membantu kebutuhan kemasan plastik dan suplai bahan kue untuk usaha Anda.</p>
    </div>
</section>

<section class="py-16 bg-cream">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            
            <!-- Left: Information Cards & Hours -->
            <div class="space-y-8">
                <div>
                    <span class="text-brand-500 font-bold uppercase text-xs tracking-widest">Informasi Toko Fisik</span>
                    <h2 class="font-serif text-3xl font-extrabold text-stone-900 mt-1">Kunjungi Toko Lakemba 12</h2>
                    <p class="text-stone-600 text-sm mt-2">Dapatkan sampel ukuran kemasan plastik langsung di tempat dan cek kesegaran bahan kue di toko kami.</p>
                </div>

                <!-- Info Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="bg-white p-5 rounded-2xl border border-stone-200/80 shadow-sm flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-brand-50 text-brand-500 flex items-center justify-center text-lg flex-shrink-0">
                            <i class="fa-solid fa-store"></i>
                        </div>
                        <div>
                            <h4 class="font-serif font-bold text-stone-900 text-sm">Alamat Toko</h4>
                            <p class="text-xs text-stone-500 mt-1 leading-relaxed">Jl. Lakemba Raya No. 12, Pusat Pertokoan, Indonesia</p>
                        </div>
                    </div>

                    <div class="bg-white p-5 rounded-2xl border border-stone-200/80 shadow-sm flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-lg flex-shrink-0">
                            <i class="fa-brands fa-whatsapp"></i>
                        </div>
                        <div>
                            <h4 class="font-serif font-bold text-stone-900 text-sm">WhatsApp Admin</h4>
                            <p class="text-xs text-stone-500 mt-1">+62 812-3456-7890</p>
                            <span class="text-[10px] text-emerald-600 font-bold">Fast Response Pesan Grosir</span>
                        </div>
                    </div>

                    <div class="bg-white p-5 rounded-2xl border border-stone-200/80 shadow-sm flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center text-lg flex-shrink-0">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div>
                            <h4 class="font-serif font-bold text-stone-900 text-sm">Email Toko</h4>
                            <p class="text-xs text-stone-500 mt-1">order@lakemba12.com</p>
                            <span class="text-[10px] text-stone-400">Kerja sama suplai UMKM</span>
                        </div>
                    </div>

                    <div class="bg-white p-5 rounded-2xl border border-stone-200/80 shadow-sm flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-pink-50 text-pink-600 flex items-center justify-center text-lg flex-shrink-0">
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                        <div>
                            <h4 class="font-serif font-bold text-stone-900 text-sm">Instagram</h4>
                            <p class="text-xs text-stone-500 mt-1">@lakemba12plastik</p>
                            <span class="text-[10px] text-stone-400">Katalog & info promo dus</span>
                        </div>
                    </div>
                </div>

                <!-- Hours Box -->
                <div class="bg-stone-900 text-white p-6 rounded-3xl space-y-4">
                    <h4 class="font-serif font-bold text-lg text-cream flex items-center gap-2">
                        <i class="fa-solid fa-clock text-amberGold"></i> Jam Operasional & Layanan Toko
                    </h4>
                    <div class="space-y-2 text-xs text-stone-300">
                        <div class="flex justify-between border-b border-stone-800 pb-2">
                            <span>Senin - Sabtu:</span>
                            <span class="text-amberGold font-bold">08:00 - 20:00 WIB</span>
                        </div>
                        <div class="flex justify-between border-b border-stone-800 pb-2">
                            <span>Minggu:</span>
                            <span class="text-amberGold font-bold">08:00 - 17:00 WIB</span>
                        </div>
                        <p class="text-[11px] text-stone-400 pt-1">
                            *Pemesanan instan Gojek/Grab dikirim sebelum jam 17:00 WIB setiap harinya.
                        </p>
                    </div>
                </div>

                <!-- Map Mockup Container -->
                <div class="rounded-3xl overflow-hidden border border-stone-300 h-52 bg-stone-200 relative flex items-center justify-center">
                    <iframe class="w-full h-full border-0 filter grayscale hover:grayscale-0 transition-all duration-500" 
                            src="https://maps.google.com/maps?q=Jakarta&t=&z=13&ie=UTF8&iwloc=&output=embed" 
                            allowfullscreen="" loading="lazy"></iframe>
                </div>

            </div>

            <!-- Right: Interactive Contact & Grosir Form -->
            <div class="bg-white rounded-3xl border border-stone-200/80 shadow-md p-6 sm:p-10 space-y-6">
                <div>
                    <span class="text-xs uppercase tracking-widest text-brand-500 font-bold">Kirim Pesan / Tanya Stok</span>
                    <h3 class="font-serif text-2xl font-bold text-stone-900 mt-1">Formulir Pertanyaan & Grosir</h3>
                    <p class="text-xs text-stone-500 mt-1">Sampaikan kebutuhan kemasan plastik atau bahan kue Anda, admin kami akan merespons cepat.</p>
                </div>

                <form method="POST" action="{{ route('contact.store') }}" class="space-y-4">
                    @csrf

                    <div>
                        <label class="block text-xs font-bold text-stone-700 uppercase mb-1">Nama Lengkap / Nama Usaha *</label>
                        <input type="text" name="name" required value="{{ old('name') }}" placeholder="Contoh: Ibu Rina (Dapur Rina Cake)"
                               class="w-full px-4 py-3 rounded-xl border border-stone-300 text-sm focus:outline-none focus:border-brand-500 focus:ring-1 focus:ring-brand-500">
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-stone-700 uppercase mb-1">Alamat Email *</label>
                            <input type="email" name="email" required value="{{ old('email') }}" placeholder="email@usaha.com"
                                   class="w-full px-4 py-3 rounded-xl border border-stone-300 text-sm focus:outline-none focus:border-brand-500 focus:ring-1 focus:ring-brand-500">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-stone-700 uppercase mb-1">Nomor WhatsApp Aktif *</label>
                            <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="08xxxxxxxxxx"
                                   class="w-full px-4 py-3 rounded-xl border border-stone-300 text-sm focus:outline-none focus:border-brand-500 focus:ring-1 focus:ring-brand-500">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-stone-700 uppercase mb-1">Topik Kebutuhan *</label>
                        <select name="subject" required class="w-full px-4 py-3 rounded-xl border border-stone-300 text-sm focus:outline-none focus:border-brand-500">
                            <option value="Pemesanan Grosir Partai Besar (Dus/Bal)">Pemesanan Grosir Partai Besar (Dus / Bal)</option>
                            <option value="Konsultasi Ukuran & Kemasan UMKM">Konsultasi Ukuran Kemasan Plastik UMKM</option>
                            <option value="Cek Ketersediaan Stok Bahan Kue">Cek Ketersediaan Stok Bahan Kue / Roti</option>
                            <option value="Kerja Sama Suplai Rutin Katering/Bakery">Kerja Sama Suplai Rutin Katering / Bakery</option>
                            <option value="Pertanyaan Umum">Pertanyaan Umum Lainnya</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-stone-700 uppercase mb-1">Detail Kebutuhan / Pertanyaan *</label>
                        <textarea name="message" required rows="4" placeholder="Tuliskan produk apa yang dicari, estimasi jumlah dus/pack, atau pertanyaan Anda..."
                                  class="w-full px-4 py-3 rounded-xl border border-stone-300 text-sm focus:outline-none focus:border-brand-500 focus:ring-1 focus:ring-brand-500">{{ old('message') }}</textarea>
                    </div>

                    <button type="submit" class="w-full py-4 bg-brand-500 hover:bg-brand-600 text-white font-bold rounded-2xl shadow-lg hover:shadow-brand-500/50 transition-all text-xs uppercase tracking-wider flex items-center justify-center gap-2">
                        <i class="fa-solid fa-paper-plane"></i>
                        <span>Kirim Pertanyaan Sekarang</span>
                    </button>
                </form>
            </div>

        </div>

    </div>
</section>

@endsection
