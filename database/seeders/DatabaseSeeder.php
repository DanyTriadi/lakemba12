<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\GalleryImage;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin User
        User::updateOrCreate(
            ['email' => 'admin@lakemba12.com'],
            [
                'name' => 'Lakemba 12 Admin',
                'password' => bcrypt('password123'),
                'email_verified_at' => now(),
            ]
        );

        // Kategori Toko Plastik & Bahan Kue
        $catPlastik = Category::create([
            'name' => 'Kemasan & Plastik Makanan',
            'slug' => 'kemasan-plastik-makanan',
            'description' => 'Aneka wadah thinwall food grade, cup gelas plastik, kantong kresek, mika, dan standing pouch berkualitas.',
            'image' => 'https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?auto=format&fit=crop&w=600&q=80',
        ]);

        $catBahanKue = Category::create([
            'name' => 'Bahan Baku Kue & Roti',
            'slug' => 'bahan-baku-kue-roti',
            'description' => 'Tepung terigu, butter & margarin pilihan, ragi instan, baking powder, susu, dan bahan dasar baking premium.',
            'image' => 'https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=600&q=80',
        ]);

        $catTopping = Category::create([
            'name' => 'Cokelat, Keju & Topping',
            'slug' => 'cokelat-keju-topping',
            'description' => 'Cokelat blok compound, meses, keju cheddar parut, selai aneka rasa, dan choco chips untuk dekorasi kue.',
            'image' => 'https://images.unsplash.com/photo-1541781774459-bb2af2f05b55?auto=format&fit=crop&w=600&q=80',
        ]);

        $catPerlengkapan = Category::create([
            'name' => 'Peralatan & Aksesoris Baking',
            'slug' => 'peralatan-aksesoris-baking',
            'description' => 'Loyang aluminium anti lengket, kertas roti baking paper, piping bag, spuit, dan sarung tangan plastik higienis.',
            'image' => 'https://images.unsplash.com/photo-1586985289688-ca3cf47d3e6e?auto=format&fit=crop&w=600&q=80',
        ]);

        // Daftar Produk Plastik & Bahan Kue
        $products = [
            // Kategori: Kemasan & Plastik Makanan
            [
                'category_id' => $catPlastik->id,
                'name' => 'Thinwall Persegi 650ml Food Grade (Pack isi 25 pcs)',
                'slug' => 'thinwall-persegi-650ml-pack-25pcs',
                'description' => 'Kotak makan plastik bening microwave safe & freezer safe. Cocok untuk nasi box, lauk, dessert box, dan salad buah.',
                'price' => 24500,
                'stock' => 120,
                'image' => 'https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?auto=format&fit=crop&w=600&q=80',
                'is_active' => true,
            ],
            [
                'category_id' => $catPlastik->id,
                'name' => 'Cup Gelas Minuman Plastik Oval 16 oz + Tutup Dome (Pack isi 50 pcs)',
                'slug' => 'cup-gelas-plastik-oval-16oz-tutup-50pcs',
                'description' => 'Gelas plastik PP tebal model bawah cembung (U-Shape) untuk boba, kopi kekinian, jus, dan es teh jumbo. Tahan panas dan dingin.',
                'price' => 28000,
                'stock' => 85,
                'image' => 'https://images.unsplash.com/photo-1517256064527-09c73fc73e38?auto=format&fit=crop&w=600&q=80',
                'is_active' => true,
            ],
            [
                'category_id' => $catPlastik->id,
                'name' => 'Standing Pouch Transparan Zipper Lock 14x22 cm (Pack isi 50 pcs)',
                'slug' => 'standing-pouch-transparan-zipper-14x22',
                'description' => 'Kemasan berdiri transparan tebal dengan klip kedap udara. Sangat cocok untuk keripik, cookies, bubuk kopi, dan camilan kering.',
                'price' => 32000,
                'stock' => 150,
                'image' => 'https://images.unsplash.com/photo-1530587191325-3db32d826c18?auto=format&fit=crop&w=600&q=80',
                'is_active' => true,
            ],
            [
                'category_id' => $catPlastik->id,
                'name' => 'Kantong Kresek Bening Tebal HD Lakemba Ukuran 24 (Isi 500 gr)',
                'slug' => 'kantong-kresek-bening-tebal-hd-uk-24',
                'description' => 'Kantong kresek bening higienis tidak berbau. Kuat membawa beban take-away box makanan dan minuman tanpa mudah robek.',
                'price' => 17500,
                'stock' => 200,
                'image' => 'https://images.unsplash.com/photo-1618160702438-9b02ab6515c9?auto=format&fit=crop&w=600&q=80',
                'is_active' => true,
            ],

            // Kategori: Bahan Baku Kue & Roti
            [
                'category_id' => $catBahanKue->id,
                'name' => 'Tepung Terigu Protein Tinggi Cakra Kembar Premium 1 Kg',
                'slug' => 'tepung-terigu-cakra-kembar-premium-1kg',
                'description' => 'Tepung terigu protein tinggi pilihan utama untuk pembuatan roti tawar, donat empuk, pizza, dan mie kenyal berkualitas tinggi.',
                'price' => 14500,
                'stock' => 180,
                'image' => 'https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=600&q=80',
                'is_active' => true,
            ],
            [
                'category_id' => $catBahanKue->id,
                'name' => 'Butter Wijsman Dutch Butter Kaleng Asli 200 gr',
                'slug' => 'butter-wijsman-kaleng-asli-200gr',
                'description' => 'Mentega konsentrat Belanda dengan aroma wangi istimewa yang khas. Wajib untuk nastar lumer, kastengel gurih, dan lapis legit legit.',
                'price' => 74000,
                'stock' => 45,
                'image' => 'https://images.unsplash.com/photo-1589985270826-4b7bb135bc9d?auto=format&fit=crop&w=600&q=80',
                'is_active' => true,
            ],
            [
                'category_id' => $catBahanKue->id,
                'name' => 'Ragi Instan Saf-Instant Red 500 gr (Kemasan Vakum)',
                'slug' => 'ragi-instan-saf-instant-red-500gr',
                'description' => 'Ragi pengembang roti Prancis no. 1 di dunia. Bekerja cepat, menghasilkan adonan mengembang sempurna dan aroma roti yang sedap.',
                'price' => 46000,
                'stock' => 60,
                'image' => 'https://images.unsplash.com/photo-1517433670267-08bbd4be890f?auto=format&fit=crop&w=600&q=80',
                'is_active' => true,
            ],

            // Kategori: Cokelat, Keju & Topping
            [
                'category_id' => $catTopping->id,
                'name' => 'Cokelat Batang Colatta Dark Compound 1 Kg',
                'slug' => 'cokelat-batang-colatta-dark-compound-1kg',
                'description' => 'Cokelat masak batangan dengan rasa cokelat pekat seimbang dan mudah dilelehkan (melting). Bagus untuk ganache, praline, dan serutan kue.',
                'price' => 52000,
                'stock' => 90,
                'image' => 'https://images.unsplash.com/photo-1541781774459-bb2af2f05b55?auto=format&fit=crop&w=600&q=80',
                'is_active' => true,
            ],
            [
                'category_id' => $catTopping->id,
                'name' => 'Keju Olahan Cheddar Megcheese Serbaguna Balok 2 Kg',
                'slug' => 'keju-cheddar-megcheese-serbaguna-balok-2kg',
                'description' => 'Keju cheddar ekonomis bertekstur padat yang mudah diparut panjang tidak mudah patah. Tahan panas saat dipanggang.',
                'price' => 112000,
                'stock' => 35,
                'image' => 'https://images.unsplash.com/photo-1452195100486-9cc805987862?auto=format&fit=crop&w=600&q=80',
                'is_active' => true,
            ],

            // Kategori: Peralatan & Aksesoris Baking
            [
                'category_id' => $catPerlengkapan->id,
                'name' => 'Kertas Roti Baking Paper Anti Lengket Roll 30cm x 10m',
                'slug' => 'kertas-roti-baking-paper-roll-30cm-x-10m',
                'description' => 'Alas loyang panggang tahan panas oven hingga 220°C tanpa perlu oles margarin lagi. Hasil kue tidak lengket dan loyang tetap bersih.',
                'price' => 19500,
                'stock' => 75,
                'image' => 'https://images.unsplash.com/photo-1586985289688-ca3cf47d3e6e?auto=format&fit=crop&w=600&q=80',
                'is_active' => true,
            ],
            [
                'category_id' => $catPerlengkapan->id,
                'name' => 'Loyang Kue Brownies Sekat Aluminium Tebal 20x20 cm',
                'slug' => 'loyang-kue-brownies-sekat-aluminium-20x20',
                'description' => 'Loyang brownies dengan sekat isi 25 lubang potong rapi seragam. Terbuat dari aluminium berkualitas tidak berkarat.',
                'price' => 38000,
                'stock' => 40,
                'image' => 'https://images.unsplash.com/photo-1556911220-e15b29be8c8f?auto=format&fit=crop&w=600&q=80',
                'is_active' => true,
            ],
        ];

        foreach ($products as $p) {
            Product::create($p);
        }

        // Galeri Toko Plastik & Bahan Kue
        $gallery = [
            ['title' => 'Gudang & Rak Kemasan Plastik', 'caption' => 'Stok thinwall, cup, dan botol siap kirim grosir maupun eceran', 'image_url' => 'https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?auto=format&fit=crop&w=800&q=80', 'category' => 'kemasan'],
            ['title' => 'Etalase Bahan Kue Segar', 'caption' => 'Penyimpanan mentega, ragi, dan keju dalam suhu ruangan terjaga', 'image_url' => 'https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=800&q=80', 'category' => 'bahan-kue'],
            ['title' => 'Varian Cup & Gelas Minuman', 'caption' => 'Pilihan ukuran lengkap 12oz, 14oz, 16oz hingga 22oz untuk usaha minuman', 'image_url' => 'https://images.unsplash.com/photo-1517256064527-09c73fc73e38?auto=format&fit=crop&w=800&q=80', 'category' => 'kemasan'],
            ['title' => 'Topping & Cokelat Baking', 'caption' => 'Pilihan cokelat blok compound, meses, dan choco chips aneka warna', 'image_url' => 'https://images.unsplash.com/photo-1541781774459-bb2af2f05b55?auto=format&fit=crop&w=800&q=80', 'category' => 'topping'],
            ['title' => 'Pelayanan Ramah Toko Fisik', 'caption' => 'Tim Lakemba 12 siap membantu konsultasi ukuran kemasan UMKM Anda', 'image_url' => 'https://images.unsplash.com/photo-1556742049-0a67c5574f73?auto=format&fit=crop&w=800&q=80', 'category' => 'toko'],
            ['title' => 'Peralatan & Loyang Cetakan', 'caption' => 'Aneka loyang kue, spuit, dan perlengkapan dekorasi baking lengkap', 'image_url' => 'https://images.unsplash.com/photo-1586985289688-ca3cf47d3e6e?auto=format&fit=crop&w=800&q=80', 'category' => 'peralatan'],
        ];

        foreach ($gallery as $item) {
            GalleryImage::create($item);
        }
    }
}
