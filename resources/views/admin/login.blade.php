<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Petugas & Admin - Lakemba 12</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            500: '#7E000B',
                            600: '#6C0009',
                        },
                        coffeeDark: '#191210',
                        amberGold: '#D4AF37',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-coffeeDark min-h-screen flex items-center justify-center p-4 selection:bg-brand-500 selection:text-white">

    <div class="max-w-md w-full bg-white rounded-3xl p-8 shadow-2xl border border-stone-800 space-y-6">
        
        <!-- Header -->
        <div class="text-center space-y-3">
            <img src="{{ asset('images/logo.png') }}" alt="Lakemba 12" class="h-16 w-16 rounded-full mx-auto shadow-md border-2 border-brand-500">
            <div>
                <h1 class="font-serif text-2xl font-extrabold text-stone-900">Lakemba 12 Portal</h1>
                <p class="text-xs text-stone-500 mt-1">Masuk untuk mengelola pesanan, stok menu, & pesan pelanggan.</p>
            </div>
        </div>

        @if($errors->any())
            <div class="p-3 bg-rose-50 border border-rose-200 text-rose-700 text-xs rounded-xl">
                {{ $errors->first() }}
            </div>
        @endif

        <!-- Form -->
        <form method="POST" action="{{ route('admin.login.submit') }}" class="space-y-4">
            @csrf

            <div>
                <label class="block text-xs font-bold text-stone-700 uppercase mb-1">Email Petugas</label>
                <div class="relative">
                    <input type="email" name="email" required value="{{ old('email', 'admin@lakemba12.com') }}" 
                           class="w-full pl-10 pr-4 py-3 rounded-xl border border-stone-300 text-sm focus:outline-none focus:border-brand-500">
                    <i class="fa-solid fa-envelope absolute left-3.5 top-3.5 text-stone-400 text-sm"></i>
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold text-stone-700 uppercase mb-1">Kata Sandi</label>
                <div class="relative">
                    <input type="password" name="password" required value="password123" 
                           class="w-full pl-10 pr-4 py-3 rounded-xl border border-stone-300 text-sm focus:outline-none focus:border-brand-500">
                    <i class="fa-solid fa-lock absolute left-3.5 top-3.5 text-stone-400 text-sm"></i>
                </div>
            </div>

            <div class="flex items-center justify-between text-xs text-stone-500">
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" name="remember" class="rounded text-brand-500 focus:ring-brand-500" checked>
                    <span>Ingat Saya</span>
                </label>
                <span class="text-amber-700 font-medium">Akses Khusus Staf</span>
            </div>

            <button type="submit" class="w-full py-3.5 bg-brand-500 hover:bg-brand-600 text-white font-bold rounded-xl shadow-lg transition-all text-xs uppercase tracking-wider flex items-center justify-center gap-2">
                <i class="fa-solid fa-right-to-bracket"></i>
                <span>Masuk ke Dashboard</span>
            </button>
        </form>

        <div class="pt-4 border-t border-stone-100 text-center text-xs text-stone-400">
            <a href="{{ route('home') }}" class="hover:text-brand-500">
                &larr; Kembali ke Website Utama
            </a>
        </div>

    </div>

</body>
</html>
