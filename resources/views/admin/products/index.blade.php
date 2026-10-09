@extends('layouts.admin')

@section('title', 'Kelola Produk Plastik & Bahan Kue - Lakemba 12')
@section('page_title', 'Katalog Produk Plastik & Bahan Kue')

@section('admin_content')

<div class="space-y-6">
    
    <!-- Top Action: Add Product Button -->
    <div class="flex items-center justify-between">
        <p class="text-xs text-stone-500">Kelola daftar kemasan plastik food grade, cup, dan bahan baku kue yang tampil pada katalog toko.</p>
        <button onclick="toggleModal('add-product-modal', true)" class="px-4 py-2.5 bg-brand-500 hover:bg-brand-600 text-white rounded-xl text-xs font-bold uppercase tracking-wider shadow-sm flex items-center gap-2">
            <i class="fa-solid fa-plus"></i>
            <span>Tambah Produk Baru</span>
        </button>
    </div>

    <!-- Products Table -->
    <div class="bg-white rounded-2xl border border-stone-200/80 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="bg-stone-50 border-b border-stone-200 text-stone-500 uppercase font-bold">
                    <tr>
                        <th class="p-4">Foto</th>
                        <th class="p-4">Nama Menu</th>
                        <th class="p-4">Kategori</th>
                        <th class="p-4">Harga</th>
                        <th class="p-4">Stok</th>
                        <th class="p-4 text-center">Status</th>
                        <th class="p-4 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-stone-100">
                    @foreach($products as $product)
                        <tr class="hover:bg-stone-50/50">
                            <td class="p-4">
                                <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-12 h-12 object-cover rounded-xl shadow-sm">
                            </td>
                            <td class="p-4">
                                <span class="font-bold text-stone-900 block">{{ $product->name }}</span>
                                <span class="text-stone-400 text-[10px] line-clamp-1">{{ $product->description }}</span>
                            </td>
                            <td class="p-4">
                                <span class="px-2.5 py-1 bg-stone-100 text-stone-700 rounded-full font-semibold text-[10px]">
                                    {{ $product->category->name }}
                                </span>
                            </td>
                            <td class="p-4 font-serif font-bold text-brand-500 text-sm">
                                Rp {{ number_format($product->price, 0, ',', '.') }}
                            </td>
                            <td class="p-4 font-bold text-stone-800">
                                {{ $product->stock }} porsi
                            </td>
                            <td class="p-4 text-center">
                                @if($product->is_active)
                                    <span class="px-2 py-0.5 bg-emerald-100 text-emerald-800 font-bold rounded-full text-[10px]">Aktif</span>
                                @else
                                    <span class="px-2 py-0.5 bg-stone-200 text-stone-600 font-bold rounded-full text-[10px]">Nonaktif</span>
                                @endif
                            </td>
                            <td class="p-4 text-right space-x-2">
                                <button onclick="openEditModal({{ json_encode($product) }})" class="p-2 bg-stone-100 hover:bg-stone-200 text-stone-600 rounded-lg" title="Edit">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                
                                <form method="POST" action="{{ route('admin.products.delete', $product->id) }}" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus menu ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 bg-stone-100 hover:bg-rose-50 text-stone-400 hover:text-rose-600 rounded-lg" title="Hapus">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="p-4 border-t border-stone-200">
            {{ $products->links() }}
        </div>
    </div>

</div>

<!-- Modal Tambah Produk Baru -->
<div id="add-product-modal" class="fixed inset-0 z-50 bg-stone-900/60 backdrop-blur-sm hidden flex items-center justify-center p-4">
    <div class="bg-white rounded-3xl max-w-lg w-full p-6 shadow-2xl border border-stone-200 space-y-4 max-h-[90vh] overflow-y-auto">
        <div class="flex items-center justify-between border-b border-stone-200 pb-3">
            <h3 class="font-serif font-bold text-lg text-stone-900">Tambah Menu Kopi/Pastry Baru</h3>
            <button onclick="toggleModal('add-product-modal', false)" class="text-stone-400 hover:text-stone-600">
                <i class="fa-solid fa-xmark text-lg"></i>
            </button>
        </div>

        <form method="POST" action="{{ route('admin.products.store') }}" class="space-y-4 text-xs">
            @csrf

            <div>
                <label class="block font-bold text-stone-700 uppercase mb-1">Kategori Menu *</label>
                <select name="category_id" required class="w-full px-3 py-2.5 rounded-xl border border-stone-300">
                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block font-bold text-stone-700 uppercase mb-1">Nama Menu *</label>
                <input type="text" name="name" required placeholder="Contoh: Lakemba Affogato Delux" class="w-full px-3 py-2.5 rounded-xl border border-stone-300">
            </div>

            <div class="grid grid-cols-2 gap-3">
                <div>
                    <label class="block font-bold text-stone-700 uppercase mb-1">Harga (Rp) *</label>
                    <input type="number" name="price" required placeholder="35000" class="w-full px-3 py-2.5 rounded-xl border border-stone-300">
                </div>
                <div>
                    <label class="block font-bold text-stone-700 uppercase mb-1">Stok Porsi *</label>
                    <input type="number" name="stock" required placeholder="50" class="w-full px-3 py-2.5 rounded-xl border border-stone-300">
                </div>
            </div>

            <div>
                <label class="block font-bold text-stone-700 uppercase mb-1">URL Foto (Unsplash/Web) *</label>
                <input type="url" name="image" placeholder="https://images.unsplash.com/..." class="w-full px-3 py-2.5 rounded-xl border border-stone-300">
            </div>

            <div>
                <label class="block font-bold text-stone-700 uppercase mb-1">Deskripsi & Racikan</label>
                <textarea name="description" rows="3" placeholder="Jelaskan aroma, notes rasa, atau bahan penyusun..." class="w-full px-3 py-2.5 rounded-xl border border-stone-300"></textarea>
            </div>

            <div class="flex items-center gap-2">
                <input type="checkbox" name="is_active" id="add_is_active" value="1" checked class="rounded text-brand-500">
                <label for="add_is_active" class="font-bold text-stone-700">Tampilkan menu di katalog pelanggan</label>
            </div>

            <div class="pt-2 flex justify-end gap-2">
                <button type="button" onclick="toggleModal('add-product-modal', false)" class="px-4 py-2 bg-stone-100 hover:bg-stone-200 text-stone-700 rounded-xl font-bold">Batal</button>
                <button type="submit" class="px-5 py-2 bg-brand-500 hover:bg-brand-600 text-white rounded-xl font-bold">Simpan Menu</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal Edit Produk -->
<div id="edit-product-modal" class="fixed inset-0 z-50 bg-stone-900/60 backdrop-blur-sm hidden flex items-center justify-center p-4">
    <div class="bg-white rounded-3xl max-w-lg w-full p-6 shadow-2xl border border-stone-200 space-y-4 max-h-[90vh] overflow-y-auto">
        <div class="flex items-center justify-between border-b border-stone-200 pb-3">
            <h3 class="font-serif font-bold text-lg text-stone-900">Ubah Menu Produk</h3>
            <button onclick="toggleModal('edit-product-modal', false)" class="text-stone-400 hover:text-stone-600">
                <i class="fa-solid fa-xmark text-lg"></i>
            </button>
        </div>

        <form id="edit-product-form" method="POST" action="" class="space-y-4 text-xs">
            @csrf
            @method('PUT')

            <div>
                <label class="block font-bold text-stone-700 uppercase mb-1">Kategori Menu *</label>
                <select id="edit_category_id" name="category_id" required class="w-full px-3 py-2.5 rounded-xl border border-stone-300">
                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block font-bold text-stone-700 uppercase mb-1">Nama Menu *</label>
                <input type="text" id="edit_name" name="name" required class="w-full px-3 py-2.5 rounded-xl border border-stone-300">
            </div>

            <div class="grid grid-cols-2 gap-3">
                <div>
                    <label class="block font-bold text-stone-700 uppercase mb-1">Harga (Rp) *</label>
                    <input type="number" id="edit_price" name="price" required class="w-full px-3 py-2.5 rounded-xl border border-stone-300">
                </div>
                <div>
                    <label class="block font-bold text-stone-700 uppercase mb-1">Stok Porsi *</label>
                    <input type="number" id="edit_stock" name="stock" required class="w-full px-3 py-2.5 rounded-xl border border-stone-300">
                </div>
            </div>

            <div>
                <label class="block font-bold text-stone-700 uppercase mb-1">URL Foto *</label>
                <input type="url" id="edit_image" name="image" class="w-full px-3 py-2.5 rounded-xl border border-stone-300">
            </div>

            <div>
                <label class="block font-bold text-stone-700 uppercase mb-1">Deskripsi & Racikan</label>
                <textarea id="edit_description" name="description" rows="3" class="w-full px-3 py-2.5 rounded-xl border border-stone-300"></textarea>
            </div>

            <div class="flex items-center gap-2">
                <input type="checkbox" name="is_active" id="edit_is_active" value="1" class="rounded text-brand-500">
                <label for="edit_is_active" class="font-bold text-stone-700">Tampilkan menu di katalog pelanggan</label>
            </div>

            <div class="pt-2 flex justify-end gap-2">
                <button type="button" onclick="toggleModal('edit-product-modal', false)" class="px-4 py-2 bg-stone-100 hover:bg-stone-200 text-stone-700 rounded-xl font-bold">Batal</button>
                <button type="submit" class="px-5 py-2 bg-brand-500 hover:bg-brand-600 text-white rounded-xl font-bold">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script>
    function toggleModal(id, show) {
        const el = document.getElementById(id);
        if (show) el.classList.remove('hidden');
        else el.classList.add('hidden');
    }

    function openEditModal(product) {
        document.getElementById('edit-product-form').action = `/admin/products/${product.id}`;
        document.getElementById('edit_category_id').value = product.category_id;
        document.getElementById('edit_name').value = product.name;
        document.getElementById('edit_price').value = parseInt(product.price);
        document.getElementById('edit_stock').value = product.stock;
        document.getElementById('edit_image').value = product.image;
        document.getElementById('edit_description').value = product.description || '';
        document.getElementById('edit_is_active').checked = Boolean(product.is_active);
        toggleModal('edit-product-modal', true);
    }
</script>
@endpush

@endsection
