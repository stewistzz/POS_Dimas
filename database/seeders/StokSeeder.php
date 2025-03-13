<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('t_stok')->insert([
            ['supplier_id' => 1, 'barang_id' => 1, 'user_id' => 1, 'stok_tanggal' => now(), 'stok_jumlah' => 50, 'created_at' => NOW()],
            ['supplier_id' => 1, 'barang_id' => 2, 'user_id' => 1, 'stok_tanggal' => now(), 'stok_jumlah' => 40, 'created_at' => NOW()],
            ['supplier_id' => 2, 'barang_id' => 6, 'user_id' => 2, 'stok_tanggal' => now(), 'stok_jumlah' => 80, 'created_at' => NOW()],

            ['supplier_id' => 1, 'barang_id' => 3, 'user_id' => 2, 'stok_tanggal' => now(), 'stok_jumlah' => 60, 'created_at' => now()],
            ['supplier_id' => 2, 'barang_id' => 4, 'user_id' => 3, 'stok_tanggal' => now(), 'stok_jumlah' => 45, 'created_at' => now()],
            ['supplier_id' => 3, 'barang_id' => 5, 'user_id' => 1, 'stok_tanggal' => now(), 'stok_jumlah' => 70, 'created_at' => now()],
            ['supplier_id' => 3, 'barang_id' => 6, 'user_id' => 2, 'stok_tanggal' => now(), 'stok_jumlah' => 30, 'created_at' => now()],
            ['supplier_id' => 1, 'barang_id' => 7, 'user_id' => 3, 'stok_tanggal' => now(), 'stok_jumlah' => 20, 'created_at' => now()],
            ['supplier_id' => 2, 'barang_id' => 8, 'user_id' => 1, 'stok_tanggal' => now(), 'stok_jumlah' => 90, 'created_at' => now()],
            ['supplier_id' => 3, 'barang_id' => 9, 'user_id' => 2, 'stok_tanggal' => now(), 'stok_jumlah' => 55, 'created_at' => now()],
            ['supplier_id' => 1, 'barang_id' => 10, 'user_id' => 3, 'stok_tanggal' => now(), 'stok_jumlah' => 35, 'created_at' => now()],
            ['supplier_id' => 2, 'barang_id' => 11, 'user_id' => 1, 'stok_tanggal' => now(), 'stok_jumlah' => 65, 'created_at' => now()],
            ['supplier_id' => 3, 'barang_id' => 12, 'user_id' => 2, 'stok_tanggal' => now(), 'stok_jumlah' => 85, 'created_at' => now()],
            ['supplier_id' => 1, 'barang_id' => 13, 'user_id' => 3, 'stok_tanggal' => now(), 'stok_jumlah' => 25, 'created_at' => now()],
            ['supplier_id' => 2, 'barang_id' => 14, 'user_id' => 1, 'stok_tanggal' => now(), 'stok_jumlah' => 75, 'created_at' => now()],
        ]);
    }
}
