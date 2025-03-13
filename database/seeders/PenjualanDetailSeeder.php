<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('t_penjualan_detail')->insert([
            // Transaksi 1
        ['penjualan_id' => 1, 'barang_id' => 1, 'harga' => 7000000, 'jumlah' => 1, 'created_at' => NOW()],
        ['penjualan_id' => 1, 'barang_id' => 2, 'harga' => 4500000, 'jumlah' => 1, 'created_at' => NOW()],
        ['penjualan_id' => 1, 'barang_id' => 3, 'harga' => 150000, 'jumlah' => 1, 'created_at' => NOW()],
        
        // Transaksi 2
        ['penjualan_id' => 2, 'barang_id' => 4, 'harga' => 300000, 'jumlah' => 1, 'created_at' => NOW()],
        ['penjualan_id' => 2, 'barang_id' => 5, 'harga' => 5000, 'jumlah' => 2, 'created_at' => NOW()],
        ['penjualan_id' => 2, 'barang_id' => 6, 'harga' => 10000, 'jumlah' => 2, 'created_at' => NOW()],
        
        // Transaksi 3
        ['penjualan_id' => 3, 'barang_id' => 7, 'harga' => 7000000, 'jumlah' => 1, 'created_at' => NOW()],
        ['penjualan_id' => 3, 'barang_id' => 8, 'harga' => 4500000, 'jumlah' => 1, 'created_at' => NOW()],
        ['penjualan_id' => 3, 'barang_id' => 9, 'harga' => 300000, 'jumlah' => 1, 'created_at' => NOW()],
        
        // Transaksi 4
        ['penjualan_id' => 14, 'barang_id' => 10, 'harga' => 2800000, 'jumlah' => 1, 'created_at' => NOW()],
        ['penjualan_id' => 14, 'barang_id' => 11, 'harga' => 3800000, 'jumlah' => 1, 'created_at' => NOW()],
        ['penjualan_id' => 14, 'barang_id' => 12, 'harga' => 250000, 'jumlah' => 1, 'created_at' => NOW()],
        
        // Transaksi 5
        ['penjualan_id' => 15, 'barang_id' => 13, 'harga' => 850000, 'jumlah' => 1, 'created_at' => NOW()],
        ['penjualan_id' => 15, 'barang_id' => 14, 'harga' => 400000, 'jumlah' => 2, 'created_at' => NOW()],
        ['penjualan_id' => 15, 'barang_id' => 15, 'harga' => 900000, 'jumlah' => 1, 'created_at' => NOW()],
        
        // Transaksi 6
        ['penjualan_id' => 16, 'barang_id' => 1, 'harga' => 7000000, 'jumlah' => 1, 'created_at' => NOW()],
        ['penjualan_id' => 16, 'barang_id' => 5, 'harga' => 5000, 'jumlah' => 2, 'created_at' => NOW()],
        ['penjualan_id' => 16, 'barang_id' => 10, 'harga' => 2800000, 'jumlah' => 1, 'created_at' => NOW()],
        
        // Transaksi 7
        ['penjualan_id' => 17, 'barang_id' => 2, 'harga' => 2000000, 'jumlah' => 1, 'created_at' => NOW()],
        ['penjualan_id' => 17, 'barang_id' => 6, 'harga' => 10000, 'jumlah' => 2, 'created_at' => NOW()],
        ['penjualan_id' => 17, 'barang_id' => 8, 'harga' => 3000000, 'jumlah' => 1, 'created_at' => NOW()],
        
        // Transaksi 8
        ['penjualan_id' => 18, 'barang_id' => 3, 'harga' => 150000, 'jumlah' => 1, 'created_at' => NOW()],
        ['penjualan_id' => 18, 'barang_id' => 7, 'harga' => 7000000, 'jumlah' => 1, 'created_at' => NOW()],
        ['penjualan_id' => 18, 'barang_id' => 11, 'harga' => 3800000, 'jumlah' => 1, 'created_at' => NOW()],
        
        // Transaksi 9
        ['penjualan_id' => 19, 'barang_id' => 9, 'harga' => 300000, 'jumlah' => 1, 'created_at' => NOW()],
        ['penjualan_id' => 19, 'barang_id' => 12, 'harga' => 150000, 'jumlah' => 1, 'created_at' => NOW()],
        ['penjualan_id' => 19, 'barang_id' => 14, 'harga' => 200000, 'jumlah' => 2, 'created_at' => NOW()],
        
        // Transaksi 10
        ['penjualan_id' => 20, 'barang_id' => 4, 'harga' => 300000, 'jumlah' => 1, 'created_at' => NOW()],
        ['penjualan_id' => 20, 'barang_id' => 13, 'harga' => 300000, 'jumlah' => 1, 'created_at' => NOW()],
        ['penjualan_id' => 20, 'barang_id' => 15, 'harga' => 300000, 'jumlah' => 1, 'created_at' => NOW()],
        ]);
    }
}
