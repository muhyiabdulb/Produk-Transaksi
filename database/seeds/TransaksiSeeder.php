<?php

use Illuminate\Database\Seeder;
use App\Transaksi;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transaksi::create([
            'Kode_transaksi' => 'T0001',
            'kode_produk' => 'P0001',
            'quantity' => 5,
        ]);
        Transaksi::create([
            'Kode_transaksi' => 'T0001',
            'kode_produk' => 'P0004',
            'quantity' => 1,
        ]);
        Transaksi::create([
            'Kode_transaksi' => 'T0001',
            'kode_produk' => 'P0006',
            'quantity' => 3,
        ]);
        Transaksi::create([
            'Kode_transaksi' => 'T0002',
            'kode_produk' => 'P0002',
            'quantity' => 3,
        ]);
        Transaksi::create([
            'Kode_transaksi' => 'T0002',
            'kode_produk' => 'P0003',
            'quantity' => 2,
        ]);
        Transaksi::create([
            'Kode_transaksi' => 'T0002',
            'kode_produk' => 'P0005',
            'quantity' => 1,
        ]);
    }
}
