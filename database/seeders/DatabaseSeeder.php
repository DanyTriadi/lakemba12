<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin User
        \App\Models\User::updateOrCreate(
            ['email' => 'admin@lakemba12.com'],
            [
                'name' => 'Lakemba 12 Admin',
                'password' => bcrypt('password123'),
                'email_verified_at' => now(),
            ]
        );

        // Categories
        $coffee = \App\Models\Category::create([
            'name' => 'Signature Coffee',
            'slug' => 'signature-coffee',
            'description' => 'Biji kopi pilihan nusantara disangrai sempurna untuk cita rasa autentik kelas dunia.',
            'image' => 'https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=600&q=80',
        ]);

        $nonCoffee = \App\Models\Category::create([
            'name' => 'Artisan & Non-Coffee',
            'slug' => 'artisan-non-coffee',
            'description' => 'Minuman segar, matcha premium Uji Jepang, dan racikan mocktail khas Lakemba.',
            'image' => 'https://images.unsplash.com/photo-1536256263959-770b48d82b0a?auto=format&fit=crop&w=600&q=80',
        ]);

        $pastry = \App\Models\Category::create([
            'name' => 'Pastry & Bakery',
            'slug' => 'pastry-bakery',
            'description' => 'Dipanggang fresh setiap pagi dengan butter Prancis premium untuk tekstur renyah dan lembut.',
            'image' => 'https://images.unsplash.com/photo-1555507036-ab1f4038808a?auto=format&fit=crop&w=600&q=80',
        ]);

        $mainCourse = \App\Models\Category::create([
            'name' => 'Main Course & Brunch',
            'slug' => 'main-course-brunch',
            'description' => 'Hidangan hangat perpaduan Western & Nusantara untuk menemani santap siang Anda.',
            'image' => 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=600&q=80',
        ]);

        // Products
        $products = [
            [
                'category_id' => $coffee->id,
                'name' => 'Lakemba Signature Caramel Macchiato',
                'slug' => 'lakemba-signature-caramel-macchiato',
                'description' => 'Espresso ganda berpadu dengan susu vanila creamy dan siraman saus karamel homemade istimewa.',
                'price' => 38000,
                'stock' => 50,
                'image' => 'https://images.unsplash.com/photo-1485808191679-5f86510681a2?auto=format&fit=crop&w=600&q=80',
                'is_active' => true,
            ],
            [
                'category_id' => $coffee->id,
                'name' => 'Cold Brew Nitro Reserve',
                'slug' => 'cold-brew-nitro-reserve',
                'description' => 'Seduhan dingin 16 jam dengan infusi nitrogen yang menghasilkan tekstur lembut seperti beludru.',
                'price' => 35000,
                'stock' => 30,
                'image' => 'https://images.unsplash.com/photo-1517701550927-30cf4ba1dba5?auto=format&fit=crop&w=600&q=80',
                'is_active' => true,
            ],
            [
                'category_id' => $coffee->id,
                'name' => 'Caffe Latte Double Shot',
                'slug' => 'caffe-latte-double-shot',
                'description' => 'Kombinasi klasik espresso robusta-arabica blend dengan steamed milk dan microfoam halus.',
                'price' => 32000,
                'stock' => 100,
                'image' => 'https://images.unsplash.com/photo-1570968915860-54d5c301fa9f?auto=format&fit=crop&w=600&q=80',
                'is_active' => true,
            ],
            [
                'category_id' => $nonCoffee->id,
                'name' => 'Kyoto Ceremonial Matcha Latte',
                'slug' => 'kyoto-ceremonial-matcha-latte',
                'description' => 'Bubuk matcha murni kelas seremonial dari Kyoto, diperkaya susu segar dan madu bunga liar.',
                'price' => 40000,
                'stock' => 45,
                'image' => 'https://images.unsplash.com/photo-1536256263959-770b48d82b0a?auto=format&fit=crop&w=600&q=80',
                'is_active' => true,
            ],
            [
                'category_id' => $nonCoffee->id,
                'name' => 'Berry Hibiscus Sparkling Mocktail',
                'slug' => 'berry-hibiscus-sparkling-mocktail',
                'description' => 'Infusi bunga telang & hibiscus segar, buah beri asli, soda kristal dan mint aromatik.',
                'price' => 36000,
                'stock' => 40,
                'image' => 'https://images.unsplash.com/photo-1513558161293-cdaf765ed2fd?auto=format&fit=crop&w=600&q=80',
                'is_active' => true,
            ],
            [
                'category_id' => $pastry->id,
                'name' => 'French Butter Croissant',
                'slug' => 'french-butter-croissant',
                'description' => 'Pastry berlapis renyah keemasan dengan aroma butter Normandy yang harum semerbak.',
                'price' => 28000,
                'stock' => 25,
                'image' => 'https://images.unsplash.com/photo-1555507036-ab1f4038808a?auto=format&fit=crop&w=600&q=80',
                'is_active' => true,
            ],
            [
                'category_id' => $pastry->id,
                'name' => 'Basque Burnt Cheesecake Slice',
                'slug' => 'basque-burnt-cheesecake-slice',
                'description' => 'Kue keju lembut meleleh di tengah dengan karamelisasi gurih di permukaan atas.',
                'price' => 42000,
                'stock' => 20,
                'image' => 'https://images.unsplash.com/photo-1533134242443-d4fd215305ad?auto=format&fit=crop&w=600&q=80',
                'is_active' => true,
            ],
            [
                'category_id' => $mainCourse->id,
                'name' => 'Lakemba Artisan Truffle Pasta',
                'slug' => 'lakemba-artisan-truffle-pasta',
                'description' => 'Fettuccine al dente berbalur minyak truffle putih, saus jamur kental, dan taburan keju parmesan.',
                'price' => 65000,
                'stock' => 20,
                'image' => 'https://images.unsplash.com/photo-1621996346565-e3d5d6281691?auto=format&fit=crop&w=600&q=80',
                'is_active' => true,
            ],
        ];

        foreach ($products as $p) {
            \App\Models\Product::create($p);
        }

        // Gallery
        $gallery = [
            ['title' => 'Suasana Senja Lakemba', 'caption' => 'Pencahayaan hangat untuk momen santai bersama teman', 'image_url' => 'https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?auto=format&fit=crop&w=800&q=80', 'category' => 'interior'],
            ['title' => 'Espresso Bar Precision', 'caption' => 'Mesin kopi La Marzocco dirawat cermat oleh barista tersertifikasi', 'image_url' => 'https://images.unsplash.com/photo-1442512595331-e89e73853f31?auto=format&fit=crop&w=800&q=80', 'category' => 'barista'],
            ['title' => 'Outdoor Garden Sanctuary', 'caption' => 'Area terbuka asri nan sejuk dengan vegetasi tropis', 'image_url' => 'https://images.unsplash.com/photo-1554118811-1e0d58224f24?auto=format&fit=crop&w=800&q=80', 'category' => 'outdoor'],
            ['title' => 'Handcrafted Latte Art', 'caption' => 'Sentuhan seni di setiap cangkir kopi yang disajikan', 'image_url' => 'https://images.unsplash.com/photo-1534778101976-62847782c213?auto=format&fit=crop&w=800&q=80', 'category' => 'coffee'],
            ['title' => 'Freshly Baked Pastries', 'caption' => 'Aroma butter harum dari oven bakery kami setiap pagi', 'image_url' => 'https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=800&q=80', 'category' => 'pastry'],
            ['title' => 'Work & Chill Space', 'caption' => 'Colokan listrik memadai dan Wi-Fi ultra cepat untuk WFC', 'image_url' => 'https://images.unsplash.com/photo-1521017432531-fbd92d768814?auto=format&fit=crop&w=800&q=80', 'category' => 'interior'],
        ];

        foreach ($gallery as $item) {
            \App\Models\GalleryImage::create($item);
        }
    }
}
