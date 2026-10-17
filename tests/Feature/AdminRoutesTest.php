<?php

namespace Tests\Feature;

use App\Models\JadwalMakeup;
use App\Models\PaketMakeup;
use App\Models\Pelanggan;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminRoutesTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_page_returns_ok(): void
    {
        $paket = PaketMakeup::create([
            'nama_paket' => 'Makeup Wisuda Premium',
            'harga' => 350000,
            'deskripsi' => 'Paket wisuda lengkap',
        ]);

        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('Maison Coquette');
        $response->assertSee('Makeup Wisuda Premium');
        $response->assertSee('350.000');
    }

    public function test_online_booking_creates_pelanggan_and_jadwal(): void
    {
        $paket = PaketMakeup::create([
            'nama_paket' => 'Bridal Soft Glam',
            'harga' => 1500000,
            'deskripsi' => 'Rias pengantin',
        ]);

        $bookingData = [
            'nama' => 'Adelia Maharani',
            'no_hp' => '081298765432',
            'email' => 'adelia@gmail.com',
            'paket_id' => $paket->id,
            'tanggal' => '2026-11-15',
            'waktu' => '07:30',
            'alamat' => 'Hotel Indonesia Kempinski, Jakarta',
        ];

        $response = $this->post('/booking', $bookingData);
        $response->assertRedirect('/#booking');

        $this->assertDatabaseHas('pelanggan', [
            'nama' => 'Adelia Maharani',
            'no_hp' => '081298765432',
        ]);

        $this->assertDatabaseHas('jadwal_makeups', [
            'tanggal' => '2026-11-15',
            'waktu' => '07:30',
            'status' => 'Menunggu',
        ]);
    }

    public function test_admin_dashboard_returns_ok(): void
    {
        $response = $this->get('/admin');
        $response->assertStatus(200);
        $response->assertSee('Maison Coquette');
        $response->assertSee('Total Pelanggan');
    }

    public function test_pelanggan_index_returns_ok(): void
    {
        $response = $this->get('/pelanggan');
        $response->assertStatus(200);
        $response->assertSee('Daftar');
    }

    public function test_pelanggan_create_returns_ok(): void
    {
        $response = $this->get('/pelanggan/create');
        $response->assertStatus(200);
        $response->assertSee('Nama Lengkap');
    }

    public function test_pelanggan_edit_returns_ok(): void
    {
        $pelanggan = Pelanggan::create([
            'nama' => 'Test Customer',
            'email' => 'customer@test.com',
            'no_hp' => '08123456789',
            'alamat' => 'Jl. Test No. 1',
        ]);

        $response = $this->get("/pelanggan/{$pelanggan->id}/edit");
        $response->assertStatus(200);
        $response->assertSee('Test Customer');
    }

    public function test_jadwal_index_returns_ok(): void
    {
        $response = $this->get('/jadwal');
        $response->assertStatus(200);
        $response->assertSee('Daftar');
    }

    public function test_jadwal_create_returns_ok(): void
    {
        $response = $this->get('/jadwal/create');
        $response->assertStatus(200);
        $response->assertSee('Tanggal Makeup');
    }

    public function test_jadwal_edit_returns_ok(): void
    {
        $jadwal = JadwalMakeup::create([
            'nama_pelanggan' => 'Test Jadwal Client',
            'tanggal' => '2026-10-20',
            'waktu' => '08:00',
            'status' => 'Menunggu',
        ]);

        $response = $this->get("/jadwal/{$jadwal->id}/edit");
        $response->assertStatus(200);
        $response->assertSee('Test Jadwal Client');
    }

    public function test_paket_index_returns_ok(): void
    {
        $response = $this->get('/paket');
        $response->assertStatus(200);
        $response->assertSee('Daftar');
    }

    public function test_paket_create_returns_ok(): void
    {
        $response = $this->get('/paket/create');
        $response->assertStatus(200);
        $response->assertSee('Harga Paket');
    }

    public function test_paket_edit_returns_ok(): void
    {
        $paket = PaketMakeup::create([
            'nama_paket' => 'Test Paket Wisuda',
            'harga' => 350000,
            'deskripsi' => 'Deskripsi test',
        ]);

        $response = $this->get("/paket/{$paket->id}/edit");
        $response->assertStatus(200);
        $response->assertSee('Test Paket Wisuda');
    }
}
