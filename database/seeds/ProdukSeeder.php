<?php

use Illuminate\Database\Seeder;
use App\Produk;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produk::create([
            'Kode_produk' => 'P0001',
            'nama_produk' => 'Aqua Gelas',
            'harga' => 2500,
        ]);
        Produk::create([
            'Kode_produk' => 'P0002',
            'nama_produk' => 'Susu Coklat',
            'harga' => 6000,
        ]);
        Produk::create([
            'Kode_produk' => 'P0003',
            'nama_produk' => 'Yakult',
            'harga' => 7000,
        ]);
        Produk::create([
            'Kode_produk' => 'P0004',
            'nama_produk' => 'Air Mineral',
            'harga' => 5000,
        ]);
        Produk::create([
            'Kode_produk' => 'P0005',
            'nama_produk' => 'Pocari Sweat',
            'harga' => 6700,
        ]);
        Produk::create([
            'Kode_produk' => 'P0006',
            'nama_produk' => 'Teh Pucuk',
            'harga' => 5700,
        ]);
    }
}
