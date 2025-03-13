<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('t_penjualan')->insert([
            ['user_id' => 3, 'pembeli' => 'Andi', 'penjualan_kode' => 'TRX001', 'penjualan_tanggal' => now(), 'created_at' => NOW()],
            ['user_id' => 3, 'pembeli' => 'Budi', 'penjualan_kode' => 'TRX002', 'penjualan_tanggal' => now(), 'created_at' => NOW()],
            ['user_id' => 3, 'pembeli' => 'Citra', 'penjualan_kode' => 'TRX003', 'penjualan_tanggal' => now(), 'created_at' => NOW()],
            ['user_id' => 3, 'pembeli' => 'Dandi', 'penjualan_kode' => 'TRX004', 'penjualan_tanggal' => now(), 'created_at' => NOW()],
            ['user_id' => 3, 'pembeli' => 'Eca', 'penjualan_kode' => 'TRX005', 'penjualan_tanggal' => now(), 'created_at' => NOW()],

            ['user_id' => 3, 'pembeli' => 'Fani', 'penjualan_kode' => 'TRX006', 'penjualan_tanggal' => now(), 'created_at' => NOW()],
            ['user_id' => 3, 'pembeli' => 'Galih', 'penjualan_kode' => 'TRX007', 'penjualan_tanggal' => now(), 'created_at' => NOW()],
            ['user_id' => 3, 'pembeli' => 'Hilmi', 'penjualan_kode' => 'TRX008', 'penjualan_tanggal' => now(), 'created_at' => NOW()],
            ['user_id' => 3, 'pembeli' => 'Ijat', 'penjualan_kode' => 'TRX009', 'penjualan_tanggal' => now(), 'created_at' => NOW()],
            ['user_id' => 3, 'pembeli' => 'jaki', 'penjualan_kode' => 'TRX010', 'penjualan_tanggal' => now(), 'created_at' => NOW()],

            ['user_id' => 3, 'pembeli' => 'Kaka', 'penjualan_kode' => 'TRX011', 'penjualan_tanggal' => now(), 'created_at' => NOW()],
            ['user_id' => 3, 'pembeli' => 'Lusi', 'penjualan_kode' => 'TRX012', 'penjualan_tanggal' => now(), 'created_at' => NOW()],
            ['user_id' => 3, 'pembeli' => 'Maman', 'penjualan_kode' => 'TRX013', 'penjualan_tanggal' => now(), 'created_at' => NOW()],
            ['user_id' => 3, 'pembeli' => 'Nando', 'penjualan_kode' => 'TRX014', 'penjualan_tanggal' => now(), 'created_at' => NOW()],
            ['user_id' => 3, 'pembeli' => 'oca', 'penjualan_kode' => 'TRX015', 'penjualan_tanggal' => now(), 'created_at' => NOW()],
        ]);
    }
}
