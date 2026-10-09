<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard - Lakemba 12')</title>

    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            500: '#7E000B',
                            600: '#6C0009',
                            700: '#5A0008',
                        },
                        amberGold: '#D4AF37',
                        coffeeDark: '#191210',
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        serif: ['"Playfair Display"', 'serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-stone-100 font-sans text-stone-800 antialiased min-h-screen flex flex-col md:flex-row">

    <!-- Sidebar -->
    <aside class="w-full md:w-64 bg-coffeeDark text-white flex-shrink-0 flex flex-col justify-between border-r border-stone-800">
        <div>
            <!-- Brand Logo -->
            <div class="p-6 border-b border-stone-800 flex items-center gap-3">
                <img src="{{ asset('images/logo.png') }}" alt="Lakemba 12" class="h-10 w-10 rounded-full border border-brand-500">
                <div>
                    <span class="block font-serif text-lg font-bold text-white tracking-wide">LAKEMBA 12</span>
                    <span class="block text-[10px] uppercase tracking-widest text-amberGold font-bold">Admin Portal</span>
                </div>
            </div>

            <!-- Nav Links -->
            <nav class="p-4 space-y-1.5 text-sm">
                <a href="{{ route('admin.dashboard') }}" 
                   class="flex items-center gap-3 px-4 py-3 rounded-xl font-medium transition-colors {{ request()->routeIs('admin.dashboard') ? 'bg-brand-500 text-white shadow' : 'text-stone-300 hover:bg-stone-800' }}">
                    <i class="fa-solid fa-chart-line w-5 text-center"></i>
                    <span>Ringkasan Dashboard</span>
                </a>

                <a href="{{ route('admin.orders') }}" 
                   class="flex items-center gap-3 px-4 py-3 rounded-xl font-medium transition-colors {{ request()->routeIs('admin.orders*') ? 'bg-brand-500 text-white shadow' : 'text-stone-300 hover:bg-stone-800' }}">
                    <i class="fa-solid fa-receipt w-5 text-center"></i>
                    <span>Kelola Pesanan</span>
                </a>

                <a href="{{ route('admin.products') }}" 
                   class="flex items-center gap-3 px-4 py-3 rounded-xl font-medium transition-colors {{ request()->routeIs('admin.products*') ? 'bg-brand-500 text-white shadow' : 'text-stone-300 hover:bg-stone-800' }}">
                    <i class="fa-solid fa-mug-hot w-5 text-center"></i>
                    <span>Katalog Menu Kopi</span>
                </a>

                <a href="{{ route('admin.messages') }}" 
                   class="flex items-center gap-3 px-4 py-3 rounded-xl font-medium transition-colors {{ request()->routeIs('admin.messages*') ? 'bg-brand-500 text-white shadow' : 'text-stone-300 hover:bg-stone-800' }}">
                    <i class="fa-solid fa-envelope w-5 text-center"></i>
                    <span>Pesan & Reservasi</span>
                </a>

                <div class="pt-4 mt-4 border-t border-stone-800">
                    <a href="{{ route('home') }}" target="_blank" 
                       class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-stone-400 hover:text-amberGold text-xs font-semibold transition-colors">
                        <i class="fa-solid fa-arrow-up-right-from-square w-5 text-center"></i>
                        <span>Buka Website Publik</span>
                    </a>
                </div>
            </nav>
        </div>

        <!-- Admin Profile & Logout -->
        <div class="p-4 border-t border-stone-800 bg-stone-900/50">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-full bg-brand-500 text-white text-xs font-bold flex items-center justify-center">
                        LK
                    </div>
                    <div class="text-xs">
                        <span class="block font-bold text-white">{{ Auth::user()->name ?? 'Admin Lakemba' }}</span>
                        <span class="text-stone-400 text-[10px]">{{ Auth::user()->email ?? 'admin@lakemba12.com' }}</span>
                    </div>
                </div>

                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="text-stone-400 hover:text-rose-400 p-2" title="Keluar">
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </button>
                </form>
            </div>
        </div>
    </aside>

    <!-- Main Content Area -->
    <div class="flex-grow flex flex-col min-h-screen">
        <!-- Top bar -->
        <header class="bg-white border-b border-stone-200 px-6 py-4 flex items-center justify-between">
            <h2 class="font-serif text-xl font-bold text-stone-900">@yield('page_title', 'Dashboard')</h2>
            <div class="flex items-center gap-4 text-xs">
                <span class="text-stone-500">Status Server: <span class="text-emerald-600 font-bold">● Online</span></span>
                <span class="text-stone-400">|</span>
                <span class="text-stone-600 font-medium">{{ date('d M Y, H:i') }} WIB</span>
            </div>
        </header>

        <!-- Flash alerts -->
        @if(session('success'))
            <div class="p-4 bg-emerald-50 border-b border-emerald-200 text-emerald-800 text-xs font-semibold flex items-center gap-2">
                <i class="fa-solid fa-circle-check text-emerald-600"></i>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        @if($errors->any())
            <div class="p-4 bg-rose-50 border-b border-rose-200 text-rose-800 text-xs space-y-1">
                @foreach($errors->all() as $error)
                    <p><i class="fa-solid fa-circle-exclamation text-rose-600 mr-1"></i> {{ $error }}</p>
                @endforeach
            </div>
        @endif

        <!-- Content -->
        <main class="p-6 sm:p-8 flex-grow">
            @yield('admin_content')
        </main>
    </div>

</body>
</html>
