@extends('layouts.app')

@section('title', 'Kontak & Reservasi - Lakemba 12')
@section('meta_description', 'Hubungi tim Lakemba 12 untuk reservasi meja, pemesanan katering acara, atau sapa kami secara langsung.')

@section('content')

<!-- Header -->
<section class="bg-coffeeDark text-white py-16 text-center">
    <div class="max-w-4xl mx-auto px-4 space-y-2">
        <span class="text-xs uppercase tracking-widest text-amberGold font-bold">Terhubung Bersama Kami</span>
        <h1 class="font-serif text-3xl sm:text-5xl font-extrabold text-cream">Kontak & Reservasi Meja</h1>
        <p class="text-stone-300 text-sm max-w-lg mx-auto">Kami dengan senang hati menyambut kunjungan Anda atau merespons kebutuhan acara spesial Anda.</p>
    </div>
</section>

<section class="py-16 bg-cream">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            
            <!-- Left: Information Cards & Hours -->
            <div class="space-y-8">
                <div>
                    <span class="text-brand-500 font-bold uppercase text-xs tracking-widest">Informasi Lokasi</span>
                    <h2 class="font-serif text-3xl font-extrabold text-stone-900 mt-1">Kunjungi Lakemba 12</h2>
                    <p class="text-stone-600 text-sm mt-2">Terletak strategis di kawasan asri dengan parkir kendaraan luas dan akses transportasi yang mudah.</p>
                </div>

                <!-- Info Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="bg-white p-5 rounded-2xl border border-stone-200/80 shadow-sm flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-brand-50 text-brand-500 flex items-center justify-center text-lg flex-shrink-0">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div>
                            <h4 class="font-serif font-bold text-stone-900 text-sm">Alamat Kedai</h4>
                            <p class="text-xs text-stone-500 mt-1 leading-relaxed">Jl. Lakemba Raya No. 12, Senopati / Pusat Kota</p>
                        </div>
                    </div>

                    <div class="bg-white p-5 rounded-2xl border border-stone-200/80 shadow-sm flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-lg flex-shrink-0">
                            <i class="fa-brands fa-whatsapp"></i>
                        </div>
                        <div>
                            <h4 class="font-serif font-bold text-stone-900 text-sm">WhatsApp</h4>
                            <p class="text-xs text-stone-500 mt-1">+62 812-3456-7890</p>
                            <span class="text-[10px] text-emerald-600 font-bold">Fast Response 24 Jam</span>
                        </div>
                    </div>

                    <div class="bg-white p-5 rounded-2xl border border-stone-200/80 shadow-sm flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center text-lg flex-shrink-0">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div>
                            <h4 class="font-serif font-bold text-stone-900 text-sm">Email Resmi</h4>
                            <p class="text-xs text-stone-500 mt-1">hello@lakemba12.com</p>
                            <span class="text-[10px] text-stone-400">Kerja sama & Karir</span>
                        </div>
                    </div>

                    <div class="bg-white p-5 rounded-2xl border border-stone-200/80 shadow-sm flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-pink-50 text-pink-600 flex items-center justify-center text-lg flex-shrink-0">
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                        <div>
                            <h4 class="font-serif font-bold text-stone-900 text-sm">Instagram</h4>
                            <p class="text-xs text-stone-500 mt-1">@lakemba12coffee</p>
                            <span class="text-[10px] text-stone-400">Update promo mingguan</span>
                        </div>
                    </div>
                </div>

                <!-- Hours Box -->
                <div class="bg-coffeeDark text-white p-6 rounded-3xl space-y-4">
                    <h4 class="font-serif font-bold text-lg text-cream flex items-center gap-2">
                        <i class="fa-solid fa-clock text-amberGold"></i> Waktu Kunjungan Terbaik
                    </h4>
                    <div class="space-y-2 text-xs text-stone-300">
                        <div class="flex justify-between border-b border-stone-800 pb-2">
                            <span>Hari Kerja (Senin - Jumat):</span>
                            <span class="text-amberGold font-bold">07:00 - 22:00 WIB</span>
                        </div>
                        <div class="flex justify-between border-b border-stone-800 pb-2">
                            <span>Akhir Pekan (Sabtu - Minggu):</span>
                            <span class="text-amberGold font-bold">07:00 - 23:00 WIB</span>
                        </div>
                        <p class="text-[11px] text-stone-400 pt-1">
                            *Untuk reservasi lebih dari 10 orang, silakan hubungi kami minimal 1 hari sebelumnya.
                        </p>
                    </div>
                </div>

                <!-- Map Mockup Container -->
                <div class="rounded-3xl overflow-hidden border border-stone-300 h-52 bg-stone-200 relative flex items-center justify-center">
                    <iframe class="w-full h-full border-0 filter grayscale hover:grayscale-0 transition-all duration-500" 
                            src="https://maps.google.com/maps?q=Senopati+Jakarta&t=&z=13&ie=UTF8&iwloc=&output=embed" 
                            allowfullscreen="" loading="lazy"></iframe>
                </div>

            </div>

            <!-- Right: Interactive Contact & Reservation Form -->
            <div class="bg-white rounded-3xl border border-stone-200/80 shadow-md p-6 sm:p-10 space-y-6">
                <div>
                    <span class="text-xs uppercase tracking-widest text-brand-500 font-bold">Kirim Pesan Langsung</span>
                    <h3 class="font-serif text-2xl font-bold text-stone-900 mt-1">Formulir Pesan & Reservasi</h3>
                    <p class="text-xs text-stone-500 mt-1">Isi formulir di bawah ini, tim kami akan merespons dalam waktu 1x24 jam.</p>
                </div>

                <form method="POST" action="{{ route('contact.store') }}" class="space-y-4">
                    @csrf

                    <div>
                        <label class="block text-xs font-bold text-stone-700 uppercase mb-1">Nama Lengkap *</label>
                        <input type="text" name="name" required value="{{ old('name') }}" placeholder="Nama Anda"
                               class="w-full px-4 py-3 rounded-xl border border-stone-300 text-sm focus:outline-none focus:border-brand-500 focus:ring-1 focus:ring-brand-500">
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-stone-700 uppercase mb-1">Alamat Email *</label>
                            <input type="email" name="email" required value="{{ old('email') }}" placeholder="email@domain.com"
                                   class="w-full px-4 py-3 rounded-xl border border-stone-300 text-sm focus:outline-none focus:border-brand-500 focus:ring-1 focus:ring-brand-500">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-stone-700 uppercase mb-1">Nomor WhatsApp</label>
                            <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="08xxxxxxxxxx"
                                   class="w-full px-4 py-3 rounded-xl border border-stone-300 text-sm focus:outline-none focus:border-brand-500 focus:ring-1 focus:ring-brand-500">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-stone-700 uppercase mb-1">Keperluan / Subjek *</label>
                        <select name="subject" required class="w-full px-4 py-3 rounded-xl border border-stone-300 text-sm focus:outline-none focus:border-brand-500">
                            <option value="Reservasi Meja">Reservasi Meja / Nongkrong</option>
                            <option value="Event Pribadi & Ulang Tahun">Event Pribadi / Ulang Tahun / Gathering</option>
                            <option value="Katering Kopi & Pastry">Katering Kantor / Pesanan Jumlah Besar</option>
                            <option value="Kritik & Saran Rasa">Kritik, Saran, & Pertanyaan Umum</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-stone-700 uppercase mb-1">Isi Pesan / Detail Reservasi *</label>
                        <textarea name="message" required rows="4" placeholder="Tuliskan tanggal, jumlah orang, atau pesan yang ingin disampaikan..."
                                  class="w-full px-4 py-3 rounded-xl border border-stone-300 text-sm focus:outline-none focus:border-brand-500 focus:ring-1 focus:ring-brand-500">{{ old('message') }}</textarea>
                    </div>

                    <button type="submit" class="w-full py-4 bg-brand-500 hover:bg-brand-600 text-white font-bold rounded-2xl shadow-lg hover:shadow-brand-500/50 transition-all text-xs uppercase tracking-wider flex items-center justify-center gap-2">
                        <i class="fa-solid fa-paper-plane"></i>
                        <span>Kirim Pesan Sekarang</span>
                    </button>
                </form>
            </div>

        </div>

    </div>
</section>

@endsection
