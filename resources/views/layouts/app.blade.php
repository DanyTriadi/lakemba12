<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Lakemba 12 - Toko Plastik & Bahan Kue Terlengkap')</title>
    <meta name="description" content="@yield('meta_description', 'Lakemba 12 adalah pusat aneka kemasan plastik makanan food grade, thinwall, cup minuman, dan bahan baku kue bakery terlengkap dengan harga grosir dan eceran.')">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;0,800;1,600&display=swap" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Tailwind & Custom Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#FDF2F3',
                            100: '#FCE6E8',
                            200: '#F8C2C6',
                            300: '#F39CA3',
                            400: '#EA5463',
                            500: '#7E000B', // Logo Maroon / Crimson
                            600: '#6C0009',
                            700: '#5A0008',
                            800: '#480006',
                            900: '#340005',
                        },
                        amberGold: '#D4AF37',
                        navyDark: '#19181A',
                        cream: '#FAF7F2',
                        warmGray: '#F3EFEA',
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        serif: ['"Playfair Display"', 'serif'],
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #FAF7F2;
            color: #19181A;
        }
        .glass-nav {
            background: rgba(250, 247, 242, 0.94);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        .hero-banner-gradient {
            background: linear-gradient(180deg, rgba(25, 24, 26, 0.85) 0%, rgba(126, 0, 11, 0.70) 55%, rgba(25, 24, 26, 0.92) 100%);
        }
    </style>
</head>
<body class="min-h-screen flex flex-col antialiased selection:bg-brand-500 selection:text-white">

    <!-- Top Announcement Bar -->
    <div class="bg-brand-500 text-white text-xs sm:text-sm py-2 px-4 text-center font-medium tracking-wide flex items-center justify-center gap-2">
        <span class="inline-block w-2 h-2 rounded-full bg-amberGold animate-ping"></span>
        <span>📦 <strong>Pusat Plastik & Bahan Kue Lakemba 12</strong> — Melayani Eceran & Grosir Partai Besar untuk UMKM Kuliner</span>
        <span class="hidden md:inline text-amberGold font-semibold ml-2">| Buka Setiap Hari: 08:00 - 20:00 WIB</span>
    </div>

    <!-- Navigation Header -->
    <header class="sticky top-0 z-40 glass-nav border-b border-stone-200 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Brand Logo & Name -->
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <img src="{{ asset('images/logo.png') }}" alt="Lakemba 12 Logo" class="h-12 w-12 sm:h-14 sm:w-14 rounded-full shadow-md group-hover:scale-105 transition-transform duration-300">
                    <div>
                        <span class="block font-serif text-2xl sm:text-3xl font-extrabold text-brand-500 tracking-tight leading-none group-hover:text-brand-600 transition-colors">LAKEMBA 12</span>
                        <span class="block text-[10px] sm:text-xs uppercase tracking-widest text-stone-600 font-bold mt-0.5">Toko Plastik & Bahan Kue</span>
                    </div>
                </a>

                <!-- Desktop Navigation Menu -->
                <nav class="hidden md:flex items-center space-x-8 text-sm font-semibold tracking-wide">
                    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-brand-500 font-bold border-b-2 border-brand-500 pb-1' : 'text-stone-700 hover:text-brand-500 transition-colors' }}">
                        Beranda
                    </a>
                    <a href="{{ route('products.index') }}" class="{{ request()->routeIs('products.*') ? 'text-brand-500 font-bold border-b-2 border-brand-500 pb-1' : 'text-stone-700 hover:text-brand-500 transition-colors' }}">
                        Katalog Produk
                    </a>
                    <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-brand-500 font-bold border-b-2 border-brand-500 pb-1' : 'text-stone-700 hover:text-brand-500 transition-colors' }}">
                        Tentang Toko
                    </a>
                    <a href="{{ route('gallery') }}" class="{{ request()->routeIs('gallery') ? 'text-brand-500 font-bold border-b-2 border-brand-500 pb-1' : 'text-stone-700 hover:text-brand-500 transition-colors' }}">
                        Galeri Produk & Toko
                    </a>
                    <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-brand-500 font-bold border-b-2 border-brand-500 pb-1' : 'text-stone-700 hover:text-brand-500 transition-colors' }}">
                        Kontak & Grosir
                    </a>
                </nav>

                <!-- Actions: Cart Button & WhatsApp CTA -->
                <div class="flex items-center gap-3">
                    <!-- Cart Drawer Trigger Button -->
                    <button onclick="toggleCartDrawer(true)" class="relative p-2.5 rounded-full bg-white border border-stone-200 text-stone-800 hover:text-brand-500 hover:border-brand-500 transition-all shadow-sm focus:outline-none" aria-label="Keranjang Belanja">
                        <i class="fa-solid fa-basket-shopping text-lg"></i>
                        <span id="nav-cart-badge" class="absolute -top-1 -right-1 bg-brand-500 text-white text-[11px] font-bold w-5 h-5 rounded-full flex items-center justify-center shadow">
                            0
                        </span>
                    </button>

                    <!-- Direct WhatsApp Button -->
                    <a href="https://wa.me/6281234567890?text=Halo%20Admin%20Lakemba%2012,%20saya%20ingin%20tanya%20stok%20kemasan%20plastik%20dan%20bahan%20kue" target="_blank" class="hidden sm:inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white px-4 py-2.5 rounded-full text-xs font-bold uppercase tracking-wider shadow-md hover:shadow-lg transition-all duration-300">
                        <i class="fa-brands fa-whatsapp text-base"></i>
                        <span>Tanya Stok / Grosir</span>
                    </a>

                    <!-- Mobile Menu Hamburger Button -->
                    <button onclick="toggleMobileMenu()" class="md:hidden p-2 rounded-lg text-stone-700 hover:text-brand-500 focus:outline-none" aria-label="Buka Menu">
                        <i class="fa-solid fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Drawer Navigation -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-b border-stone-200 px-6 py-4 space-y-3">
            <a href="{{ route('home') }}" class="block py-2 font-medium {{ request()->routeIs('home') ? 'text-brand-500 font-bold' : 'text-stone-700' }}">Beranda</a>
            <a href="{{ route('products.index') }}" class="block py-2 font-medium {{ request()->routeIs('products.*') ? 'text-brand-500 font-bold' : 'text-stone-700' }}">Katalog Produk</a>
            <a href="{{ route('about') }}" class="block py-2 font-medium {{ request()->routeIs('about') ? 'text-brand-500 font-bold' : 'text-stone-700' }}">Tentang Toko</a>
            <a href="{{ route('gallery') }}" class="block py-2 font-medium {{ request()->routeIs('gallery') ? 'text-brand-500 font-bold' : 'text-stone-700' }}">Galeri Produk</a>
            <a href="{{ route('contact') }}" class="block py-2 font-medium {{ request()->routeIs('contact') ? 'text-brand-500 font-bold' : 'text-stone-700' }}">Kontak & Pemesanan Grosir</a>
            <div class="pt-2">
                <a href="https://wa.me/6281234567890" target="_blank" class="w-full text-center py-2.5 bg-emerald-600 text-white rounded-lg font-bold flex items-center justify-center gap-2 text-sm">
                    <i class="fa-brands fa-whatsapp text-lg"></i> Hubungi Toko via WhatsApp
                </a>
            </div>
        </div>
    </header>

    <!-- Global Toast Alert (Flash Message) -->
    @if(session('success'))
        <div class="max-w-4xl mx-auto px-4 mt-6">
            <div class="bg-emerald-50 border-l-4 border-emerald-500 text-emerald-800 p-4 rounded-r-lg shadow-sm flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-circle-check text-emerald-500 text-xl"></i>
                    <p class="font-medium text-sm">{{ session('success') }}</p>
                </div>
                <button onclick="this.parentElement.remove()" class="text-emerald-500 hover:text-emerald-700">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
        </div>
    @endif

    @if(session('error'))
        <div class="max-w-4xl mx-auto px-4 mt-6">
            <div class="bg-rose-50 border-l-4 border-rose-500 text-rose-800 p-4 rounded-r-lg shadow-sm flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-triangle-exclamation text-rose-500 text-xl"></i>
                    <p class="font-medium text-sm">{{ session('error') }}</p>
                </div>
                <button onclick="this.parentElement.remove()" class="text-rose-500 hover:text-rose-700">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
        </div>
    @endif

    <!-- Main Page Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Slide-Out Cart Drawer -->
    <div id="cart-drawer-backdrop" class="fixed inset-0 bg-stone-900/60 backdrop-blur-sm z-50 transition-opacity duration-300 opacity-0 pointer-events-none" onclick="toggleCartDrawer(false)"></div>
    
    <div id="cart-drawer" class="fixed top-0 right-0 h-full w-full sm:w-[420px] bg-white z-50 shadow-2xl flex flex-col transform translate-x-full transition-transform duration-300 ease-in-out">
        <!-- Header -->
        <div class="p-5 border-b border-stone-200 flex items-center justify-between bg-stone-50">
            <div class="flex items-center gap-2">
                <i class="fa-solid fa-basket-shopping text-brand-500 text-xl"></i>
                <h3 class="font-serif text-xl font-bold text-stone-900">Keranjang Belanja</h3>
                <span id="drawer-item-count" class="text-xs bg-brand-100 text-brand-600 font-bold px-2 py-0.5 rounded-full">0 item</span>
            </div>
            <button onclick="toggleCartDrawer(false)" class="p-2 text-stone-400 hover:text-stone-700 rounded-full hover:bg-stone-200 transition-colors">
                <i class="fa-solid fa-xmark text-lg"></i>
            </button>
        </div>

        <!-- Cart Items List -->
        <div id="cart-items-container" class="flex-grow overflow-y-auto p-5 space-y-4">
            <!-- Dynamic Cart Items Rendered Here -->
        </div>

        <!-- Footer / Checkout Action -->
        <div class="p-5 border-t border-stone-200 bg-stone-50 space-y-4">
            <div class="flex items-center justify-between text-stone-600 text-sm">
                <span>Subtotal Belanja</span>
                <span id="cart-subtotal" class="font-bold text-stone-900 text-lg">Rp 0</span>
            </div>
            <p class="text-xs text-stone-500">*Harga eceran resmi toko. Untuk pembelian dus/partai besar, hubungi admin untuk diskon grosir.</p>
            
            <div class="space-y-2">
                <a href="{{ route('checkout') }}" class="w-full bg-brand-500 hover:bg-brand-600 text-white font-bold py-3.5 px-4 rounded-xl text-center flex items-center justify-center gap-2 shadow-md hover:shadow-lg transition-all">
                    <span>Lanjutkan ke Pembayaran</span>
                    <i class="fa-solid fa-arrow-right text-sm"></i>
                </a>
                <button onclick="clearCart()" class="w-full text-center text-xs text-stone-400 hover:text-rose-500 py-1 transition-colors">
                    Kosongkan Keranjang
                </button>
            </div>
        </div>
    </div>

    <!-- Master Footer -->
    <footer class="bg-stone-900 text-stone-300 mt-20 border-t border-stone-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
                <!-- Col 1: Brand Info -->
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <img src="{{ asset('images/logo.png') }}" alt="Lakemba 12" class="h-12 w-12 rounded-full border-2 border-brand-500">
                        <div>
                            <span class="block font-serif text-2xl font-bold text-white tracking-wide">LAKEMBA 12</span>
                            <span class="block text-xs uppercase tracking-widest text-amberGold font-semibold">Toko Plastik & Bahan Kue</span>
                        </div>
                    </div>
                    <p class="text-sm text-stone-400 leading-relaxed">
                        Mitra terpercaya pengusaha kuliner, UMKM catering, bakery rumahan, dan warung makan. Menyediakan aneka kemasan plastik food grade & bahan kue lengkap, fresh, dan berkualitas.
                    </p>
                    <div class="flex items-center space-x-3 pt-2">
                        <a href="https://instagram.com" target="_blank" class="w-9 h-9 rounded-full bg-stone-800 hover:bg-brand-500 text-white flex items-center justify-center transition-colors">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="https://tiktok.com" target="_blank" class="w-9 h-9 rounded-full bg-stone-800 hover:bg-brand-500 text-white flex items-center justify-center transition-colors">
                            <i class="fa-brands fa-tiktok"></i>
                        </a>
                        <a href="https://wa.me/6281234567890" target="_blank" class="w-9 h-9 rounded-full bg-stone-800 hover:bg-emerald-600 text-white flex items-center justify-center transition-colors">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </div>
                </div>

                <!-- Col 2: Kategori Belanja -->
                <div>
                    <h4 class="text-white font-serif text-lg font-bold mb-4 border-l-2 border-brand-500 pl-3">Kategori Produk</h4>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="{{ route('products.index', ['category' => 'kemasan-plastik-makanan']) }}" class="hover:text-amberGold transition-colors">Kemasan & Plastik Makanan</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'bahan-baku-kue-roti']) }}" class="hover:text-amberGold transition-colors">Bahan Baku Kue & Roti</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'cokelat-keju-topping']) }}" class="hover:text-amberGold transition-colors">Cokelat, Keju & Topping</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'peralatan-aksesoris-baking']) }}" class="hover:text-amberGold transition-colors">Peralatan & Aksesoris Baking</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-amberGold transition-colors">Tentang Toko Lakemba 12</a></li>
                    </ul>
                </div>

                <!-- Col 3: Jam Layanan & Pengiriman -->
                <div>
                    <h4 class="text-white font-serif text-lg font-bold mb-4 border-l-2 border-brand-500 pl-3">Jam Operasional</h4>
                    <ul class="space-y-2 text-sm text-stone-400">
                        <li class="flex justify-between border-b border-stone-800 pb-1.5">
                            <span>Senin - Sabtu:</span>
                            <span class="text-white font-medium">08:00 - 20:00 WIB</span>
                        </li>
                        <li class="flex justify-between border-b border-stone-800 pb-1.5">
                            <span>Minggu:</span>
                            <span class="text-white font-medium">08:00 - 17:00 WIB</span>
                        </li>
                        <li class="pt-2 text-xs text-amberGold">
                            <i class="fa-solid fa-truck-fast mr-1"></i> Pengiriman Sameday & Cargo Tersedia
                        </li>
                    </ul>
                </div>

                <!-- Col 4: Lokasi & Kontak -->
                <div>
                    <h4 class="text-white font-serif text-lg font-bold mb-4 border-l-2 border-brand-500 pl-3">Toko Fisik & Kontak</h4>
                    <p class="text-sm text-stone-400 leading-relaxed mb-3">
                        <i class="fa-solid fa-location-dot text-brand-500 mr-1.5"></i>
                        Jl. Lakemba Raya No. 12, Pusat Pertokoan, Indonesia
                    </p>
                    <p class="text-sm text-stone-400 mb-2">
                        <i class="fa-solid fa-phone text-brand-500 mr-1.5"></i>
                        +62 812-3456-7890
                    </p>
                    <p class="text-sm text-stone-400 mb-4">
                        <i class="fa-solid fa-envelope text-brand-500 mr-1.5"></i>
                        order@lakemba12.com
                    </p>
                    <a href="{{ route('contact') }}" class="inline-block text-xs font-bold uppercase tracking-wider text-amberGold hover:underline">
                        Peta Lokasi & Pesan Grosir <i class="fa-solid fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>

            <!-- Bottom Copyright & Staff Link -->
            <div class="mt-12 pt-8 border-t border-stone-800 text-xs text-stone-500 flex flex-col sm:flex-row items-center justify-between gap-4">
                <p>&copy; {{ date('Y') }} Lakemba 12 Toko Plastik & Bahan Kue. Seluruh Hak Cipta Dilindungi.</p>
                <div class="flex items-center space-x-6">
                    <a href="{{ route('admin.login') }}" class="text-stone-400 hover:text-amberGold transition-colors flex items-center gap-1.5">
                        <i class="fa-solid fa-lock text-[10px]"></i> Portal Admin & Staf Gudang
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Cart State & UI Logic Script -->
    <script>
        const CART_STORAGE_KEY = 'lakemba12_cart';

        function getCart() {
            try {
                return JSON.parse(localStorage.getItem(CART_STORAGE_KEY)) || [];
            } catch (e) {
                return [];
            }
        }

        function saveCart(cart) {
            localStorage.setItem(CART_STORAGE_KEY, JSON.stringify(cart));
            updateCartUI();
        }

        function addToCart(id, name, price, image) {
            let cart = getCart();
            let existing = cart.find(item => item.id == id);
            if (existing) {
                existing.quantity += 1;
            } else {
                cart.push({
                    id: id,
                    name: name,
                    price: parseFloat(price),
                    image: image,
                    quantity: 1
                });
            }
            saveCart(cart);
            toggleCartDrawer(true);
            showToast(`${name} telah ditambahkan ke keranjang belanja!`);
        }

        function updateQuantity(id, delta) {
            let cart = getCart();
            let item = cart.find(i => i.id == id);
            if (item) {
                item.quantity += delta;
                if (item.quantity <= 0) {
                    cart = cart.filter(i => i.id != id);
                }
            }
            saveCart(cart);
        }

        function removeFromCart(id) {
            let cart = getCart().filter(i => i.id != id);
            saveCart(cart);
        }

        function clearCart() {
            if (confirm('Apakah Anda yakin ingin mengosongkan keranjang belanja?')) {
                saveCart([]);
            }
        }

        function formatRupiah(amount) {
            return new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0
            }).format(amount);
        }

        function updateCartUI() {
            const cart = getCart();
            const badge = document.getElementById('nav-cart-badge');
            const drawerBadge = document.getElementById('drawer-item-count');
            const container = document.getElementById('cart-items-container');
            const subtotalEl = document.getElementById('cart-subtotal');

            const totalCount = cart.reduce((sum, item) => sum + item.quantity, 0);
            const totalAmount = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);

            if (badge) badge.innerText = totalCount;
            if (drawerBadge) drawerBadge.innerText = `${totalCount} item`;
            if (subtotalEl) subtotalEl.innerText = formatRupiah(totalAmount);

            if (!container) return;

            if (cart.length === 0) {
                container.innerHTML = `
                    <div class="text-center py-16 space-y-3">
                        <div class="w-16 h-16 bg-stone-100 rounded-full flex items-center justify-center mx-auto text-stone-400">
                            <i class="fa-solid fa-basket-shopping text-2xl"></i>
                        </div>
                        <h4 class="font-serif font-bold text-stone-800">Keranjang Belanja Masih Kosong</h4>
                        <p class="text-xs text-stone-500 max-w-xs mx-auto">Pilih produk plastik kemasan atau bahan kue favoritmu untuk usaha kuliner Anda.</p>
                        <a href="{{ route('products.index') }}" onclick="toggleCartDrawer(false)" class="inline-block mt-2 text-xs font-bold text-brand-500 hover:underline">
                            Lihat Katalog Produk &rarr;
                        </a>
                    </div>
                `;
                return;
            }

            container.innerHTML = cart.map(item => `
                <div class="flex items-center gap-3 bg-stone-50 p-3 rounded-xl border border-stone-100">
                    <img src="${item.image}" alt="${item.name}" class="w-16 h-16 object-cover rounded-lg flex-shrink-0">
                    <div class="flex-grow min-w-0">
                        <h5 class="text-sm font-bold text-stone-900 truncate">${item.name}</h5>
                        <p class="text-xs text-brand-500 font-bold">${formatRupiah(item.price)}</p>
                        
                        <div class="flex items-center gap-2 mt-2">
                            <button onclick="updateQuantity(${item.id}, -1)" class="w-6 h-6 rounded bg-stone-200 hover:bg-stone-300 text-stone-700 flex items-center justify-center text-xs font-bold">-</button>
                            <span class="text-xs font-bold text-stone-800 w-6 text-center">${item.quantity}</span>
                            <button onclick="updateQuantity(${item.id}, 1)" class="w-6 h-6 rounded bg-stone-200 hover:bg-stone-300 text-stone-700 flex items-center justify-center text-xs font-bold">+</button>
                        </div>
                    </div>
                    <button onclick="removeFromCart(${item.id})" class="text-stone-300 hover:text-rose-500 p-2">
                        <i class="fa-solid fa-trash-can text-sm"></i>
                    </button>
                </div>
            `).join('');
        }

        function toggleCartDrawer(open) {
            const drawer = document.getElementById('cart-drawer');
            const backdrop = document.getElementById('cart-drawer-backdrop');
            if (open) {
                backdrop.classList.remove('opacity-0', 'pointer-events-none');
                drawer.classList.remove('translate-x-full');
            } else {
                backdrop.classList.add('opacity-0', 'pointer-events-none');
                drawer.classList.add('translate-x-full');
            }
        }

        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }

        function showToast(msg) {
            const toast = document.createElement('div');
            toast.className = 'fixed bottom-5 right-5 z-50 bg-stone-900 text-white px-5 py-3 rounded-xl shadow-2xl flex items-center gap-3 text-sm animate-bounce';
            toast.innerHTML = `<i class="fa-solid fa-check text-amberGold"></i><span>${msg}</span>`;
            document.body.appendChild(toast);
            setTimeout(() => {
                toast.remove();
            }, 3000);
        }

        document.addEventListener('DOMContentLoaded', () => {
            updateCartUI();
        });
    </script>

    @stack('scripts')
</body>
</html>
