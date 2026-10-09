@extends('layouts.app')

@section('title', 'Galeri Produk & Toko - Lakemba 12 Toko Plastik & Bahan Kue')
@section('meta_description', 'Dokumentasi produk kemasan plastik makanan, display bahan kue, dan suasana toko fisik Lakemba 12.')

@section('content')

<!-- Header -->
<section class="bg-stone-900 text-white py-16 text-center">
    <div class="max-w-4xl mx-auto px-4 space-y-2">
        <span class="text-xs uppercase tracking-widest text-amberGold font-bold">Dokumentasi Produk & Toko</span>
        <h1 class="font-serif text-3xl sm:text-5xl font-extrabold text-cream">Galeri Lakemba 12</h1>
        <p class="text-stone-300 text-sm max-w-lg mx-auto">Lihat aneka varian kemasan plastik, stok bahan kue, dan kesiapan pengiriman kami.</p>
    </div>
</section>

<!-- Filter Category Chips -->
<section class="py-6 bg-cream border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <div class="flex items-center justify-center gap-2 overflow-x-auto pb-2 scrollbar-none">
            <a href="{{ route('gallery') }}" 
               class="px-5 py-2 rounded-full text-xs font-bold transition-all {{ !$category || $category == 'all' ? 'bg-brand-500 text-white shadow-sm' : 'bg-white border border-stone-300 text-stone-700 hover:border-brand-500' }}">
                Semua Koleksi
            </a>
            @foreach($categories as $cat)
                <a href="{{ route('gallery', ['category' => $cat]) }}" 
                   class="px-5 py-2 rounded-full text-xs font-bold capitalize transition-all {{ $category === $cat ? 'bg-brand-500 text-white shadow-sm' : 'bg-white border border-stone-300 text-stone-700 hover:border-brand-500' }}">
                    {{ str_replace('-', ' ', $cat) }}
                </a>
            @endforeach
        </div>
    </div>
</section>

<!-- Photo Gallery Mosaic -->
<section class="py-16 bg-warmGray min-h-[60vh]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($images as $img)
                <div class="group relative rounded-3xl overflow-hidden aspect-[4/3] bg-stone-900 shadow-md hover:shadow-2xl transition-all duration-300 cursor-pointer"
                     onclick="openLightbox('{{ $img->image_url }}', '{{ addslashes($img->title) }}', '{{ addslashes($img->caption) }}')">
                    
                    <img src="{{ $img->image_url }}" alt="{{ $img->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 opacity-90 group-hover:opacity-100">
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-stone-950/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6 text-white">
                        <span class="text-[10px] text-amberGold uppercase tracking-widest font-bold">{{ str_replace('-', ' ', $img->category) }}</span>
                        <h3 class="font-serif text-lg font-bold">{{ $img->title }}</h3>
                        <p class="text-xs text-stone-300 mt-1">{{ $img->caption }}</p>
                        <div class="mt-3 flex items-center gap-1.5 text-xs text-white/80">
                            <i class="fa-solid fa-expand text-[10px]"></i>
                            <span>Klik untuk memperbesar</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

<!-- Lightbox Modal -->
<div id="lightbox-modal" class="fixed inset-0 z-50 bg-stone-950/90 backdrop-blur-md hidden flex items-center justify-center p-4">
    <button onclick="closeLightbox()" class="absolute top-6 right-6 text-white text-3xl hover:text-amberGold transition-colors z-50">
        <i class="fa-solid fa-xmark"></i>
    </button>
    <div class="max-w-4xl w-full bg-stone-900 rounded-3xl overflow-hidden border border-stone-800 shadow-2xl">
        <img id="lightbox-img" src="" alt="Zoom" class="w-full max-h-[70vh] object-contain bg-black">
        <div class="p-6 text-white space-y-1">
            <h4 id="lightbox-title" class="font-serif text-xl font-bold text-cream"></h4>
            <p id="lightbox-caption" class="text-xs text-stone-400"></p>
        </div>
    </div>
</div>

@push('scripts')
<script>
    function openLightbox(url, title, caption) {
        document.getElementById('lightbox-img').src = url;
        document.getElementById('lightbox-title').innerText = title;
        document.getElementById('lightbox-caption').innerText = caption;
        document.getElementById('lightbox-modal').classList.remove('hidden');
    }

    function closeLightbox() {
        document.getElementById('lightbox-modal').classList.add('hidden');
    }
</script>
@endpush

@endsection
