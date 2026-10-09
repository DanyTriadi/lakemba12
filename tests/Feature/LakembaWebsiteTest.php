<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LakembaWebsiteTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }

    public function test_homepage_is_accessible_and_shows_brand(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('LAKEMBA 12');
        $response->assertSee('Kemasan Plastik');
    }

    public function test_menu_catalog_is_accessible(): void
    {
        $response = $this->get('/menu');
        $response->assertStatus(200);
        $response->assertSee('Daftar Produk Plastik');
    }

    public function test_product_detail_page_is_accessible(): void
    {
        $product = Product::first();
        $this->assertNotNull($product);

        $response = $this->get('/menu/' . $product->slug);
        $response->assertStatus(200);
        $response->assertSee($product->name);
    }

    public function test_about_and_gallery_pages_are_accessible(): void
    {
        $resAbout = $this->get('/about');
        $resAbout->assertStatus(200);
        $resAbout->assertSee('Tentang Lakemba 12');

        $resGallery = $this->get('/gallery');
        $resGallery->assertStatus(200);
        $resGallery->assertSee('Galeri Lakemba 12');
    }

    public function test_contact_submission_stores_message(): void
    {
        $response = $this->post('/contact', [
            'name' => 'Dapur Rina Bakery',
            'email' => 'rina@bakery.com',
            'phone' => '081299998888',
            'subject' => 'Pemesanan Grosir Partai Besar (Dus/Bal)',
            'message' => 'Halo Admin Lakemba 12, saya ingin menanyakan harga grosir thinwall 650ml jika pesan 10 dus sekaligus.',
        ]);

        $response->assertSessionHas('success');
        $this->assertDatabaseHas('contacts', [
            'email' => 'rina@bakery.com',
            'name' => 'Dapur Rina Bakery',
        ]);
    }

    public function test_customer_can_place_order(): void
    {
        $product = Product::first();
        $this->assertNotNull($product, 'Product should exist in database');

        $response = $this->post('/orders', [
            'customer_name' => 'Siti Aminah Catering',
            'customer_email' => 'siti@catering.com',
            'customer_phone' => '081234567890',
            'shipping_address' => 'Jl. Kenanga No. 45, Dapur Katering Siti',
            'payment_method' => 'transfer_bank',
            'notes' => 'Tolong di-packing aman dengan bubble wrap ya',
            'items' => [
                [
                    'product_id' => $product->id,
                    'quantity' => 3,
                ],
            ],
        ]);

        $this->assertDatabaseHas('orders', [
            'customer_name' => 'Siti Aminah Catering',
            'customer_email' => 'siti@catering.com',
        ]);

        $order = Order::where('customer_email', 'siti@catering.com')->latest()->first();
        $response->assertRedirect(route('orders.show', $order->order_number));
    }

    public function test_admin_dashboard_requires_auth_and_works_when_logged_in(): void
    {
        // Unauthenticated access redirects to login
        $resGuest = $this->get('/admin');
        $resGuest->assertRedirect('/admin/login');

        // Authenticated access works
        $admin = User::first();
        $this->assertNotNull($admin);

        $resAuth = $this->actingAs($admin)->get('/admin');
        $resAuth->assertStatus(200);
        $resAuth->assertSee('Ringkasan Aktivitas Toko');
    }
}
