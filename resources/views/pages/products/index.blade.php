@extends('layouts.app')

@section('title', 'Katalog Menu & Pesanan - Lakemba 12')
@section('meta_description', 'Jelajahi sajian kopi signature, artisan drinks, dan pastry segar Lakemba 12. Pesan online dengan mudah.')

@section('content')

<!-- Header Banner -->
<section class="bg-coffeeDark text-white py-16 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <span class="text-xs uppercase tracking-widest text-amberGold font-bold">Menu & Handcrafted Bites</span>
        <h1 class="font-serif text-3xl sm:text-5xl font-extrabold text-cream mt-2">Daftar Menu Lakemba 12</h1>
        <p class="text-stone-300 text-sm max-w-xl mx-auto mt-3">Disajikan dengan bahan-bahan organik dan teknik seduh presisi tinggi.</p>
    </div>
</section>

<!-- Filter & Search Controls -->
<section class="py-8 bg-cream border-b border-stone-200 sticky top-20 z-30 shadow-sm backdrop-blur-md bg-cream/95">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <form method="GET" action="{{ route('products.index') }}" class="flex flex-col md:flex-row items-center justify-between gap-4">
            
            <!-- Category Pills -->
            <div class="flex items-center gap-2 overflow-x-auto w-full md:w-auto pb-2 md:pb-0 scrollbar-none">
                <a href="{{ route('products.index') }}" 
                   class="px-4 py-2 rounded-full text-xs font-bold whitespace-nowrap transition-all {{ !request('category') ? 'bg-brand-500 text-white shadow-sm' : 'bg-white border border-stone-300 text-stone-700 hover:border-brand-500' }}">
                    Semua Menu
                </a>
                @foreach($categories as $cat)
                    <a href="{{ route('products.index', array_merge(request()->query(), ['category' => $cat->slug])) }}" 
                       class="px-4 py-2 rounded-full text-xs font-bold whitespace-nowrap transition-all {{ request('category') === $cat->slug ? 'bg-brand-500 text-white shadow-sm' : 'bg-white border border-stone-300 text-stone-700 hover:border-brand-500' }}">
                        {{ $cat->name }}
                    </a>
                @endforeach
            </div>

            <!-- Search & Sort Box -->
            <div class="flex items-center gap-3 w-full md:w-auto">
                <!-- Search Input -->
                <div class="relative flex-grow md:w-64">
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari kopi, pastry..." 
                           class="w-full pl-9 pr-4 py-2 bg-white border border-stone-300 rounded-full text-xs text-stone-800 focus:outline-none focus:border-brand-500 focus:ring-1 focus:ring-brand-500">
                    <i class="fa-solid fa-magnifying-glass absolute left-3 top-2.5 text-stone-400 text-xs"></i>
                </div>

                <!-- Sort Dropdown -->
                <select name="sort" onchange="this.form.submit()" class="bg-white border border-stone-300 text-stone-700 rounded-full text-xs py-2 px-3 focus:outline-none focus:border-brand-500">
                    <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>Terbaru</option>
                    <option value="price_asc" {{ request('sort') == 'price_asc' ? 'selected' : '' }}>Harga Terendah</option>
                    <option value="price_desc" {{ request('sort') == 'price_desc' ? 'selected' : '' }}>Harga Tertinggi</option>
                </select>

                @if(request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
            </div>

        </form>
    </div>
</section>

<!-- Products Grid -->
<section class="py-16 bg-warmGray min-h-[50vh]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        @if($products->isEmpty())
            <div class="text-center py-20 bg-white rounded-3xl p-12 max-w-lg mx-auto shadow-sm">
                <i class="fa-solid fa-mug-saucer text-4xl text-stone-300 mb-4"></i>
                <h3 class="font-serif text-2xl font-bold text-stone-800">Menu Tidak Ditemukan</h3>
                <p class="text-sm text-stone-500 mt-2">Maaf, kata kunci atau filter yang Anda cari tidak memiliki hasil yang cocok.</p>
                <a href="{{ route('products.index') }}" class="mt-6 inline-block px-6 py-2.5 bg-brand-500 text-white rounded-full text-xs font-bold uppercase tracking-wider">
                    Reset Filter
                </a>
            </div>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($products as $product)
                    <div class="bg-white rounded-2xl overflow-hidden border border-stone-200/80 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col group">
                        <!-- Image Container -->
                        <div class="relative overflow-hidden aspect-[4/3] bg-stone-100">
                            <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <span class="absolute top-3 left-3 bg-white/90 backdrop-blur-md text-brand-500 text-[11px] font-bold uppercase tracking-wider px-3 py-1 rounded-full shadow-sm">
                                {{ $product->category->name }}
                            </span>
                            @if($product->stock <= 5 && $product->stock > 0)
                                <span class="absolute top-3 right-3 bg-amber-500 text-white text-[10px] font-bold px-2.5 py-1 rounded-full shadow">
                                    Sisa {{ $product->stock }}
                                </span>
                            @endif
                        </div>

                        <!-- Card Body -->
                        <div class="p-6 flex flex-col flex-grow">
                            <a href="{{ route('products.show', $product->slug) }}" class="font-serif text-xl font-bold text-stone-900 hover:text-brand-500 transition-colors line-clamp-1">
                                {{ $product->name }}
                            </a>
                            <p class="text-xs text-stone-600 mt-2 line-clamp-2 leading-relaxed flex-grow">
                                {{ $product->description }}
                            </p>

                            <div class="pt-5 mt-4 border-t border-stone-100 flex items-center justify-between">
                                <div>
                                    <span class="text-[10px] uppercase font-bold text-stone-400 block">Harga</span>
                                    <span class="font-serif text-lg font-extrabold text-brand-500">
                                        Rp {{ number_format($product->price, 0, ',', '.') }}
                                    </span>
                                </div>

                                <div class="flex items-center gap-2">
                                    <a href="{{ route('products.show', $product->slug) }}" class="p-2.5 rounded-xl border border-stone-200 hover:border-brand-500 text-stone-600 hover:text-brand-500 text-xs transition-colors" title="Detail Menu">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <button onclick="addToCart({{ $product->id }}, '{{ addslashes($product->name) }}', {{ $product->price }}, '{{ $product->image }}')" 
                                            class="px-4 py-2.5 bg-brand-500 hover:bg-brand-600 text-white rounded-xl text-xs font-bold flex items-center gap-2 shadow-sm hover:shadow transition-all active:scale-95">
                                        <i class="fa-solid fa-plus"></i>
                                        <span>Pesan</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-12">
                {{ $products->links() }}
            </div>
        @endif

    </div>
</section>

@endsection
