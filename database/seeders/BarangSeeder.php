<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
               $data = [
            // Supplier 1
            ['kategori_id' => 1, 'barang_kode' => 'BRG001', 'barang_nama' => 'Laptop', 'harga_beli' => 5000000, 'harga_jual' => 7000000, 'created_at' => NOW()],
            ['kategori_id' => 1, 'barang_kode' => 'BRG002', 'barang_nama' => 'Smartphone', 'harga_beli' => 3000000, 'harga_jual' => 4500000, 'created_at' => NOW()],
            ['kategori_id' => 1, 'barang_kode' => 'BRG003','barang_nama' => 'Printer', 'harga_beli' => 2000000, 'harga_jual' => 3000000, 'created_at' => NOW()],
            ['kategori_id' => 1, 'barang_kode' => 'BRG004','barang_nama' => 'Mouse Gaming', 'harga_beli' => 2500000, 'harga_jual' => 2800000, 'created_at' => NOW()],
            ['kategori_id' => 1, 'barang_kode' => 'BRG005','barang_nama' => 'Keyboard Gaming', 'harga_beli' => 3500000, 'harga_jual' => 3800000, 'created_at' => NOW()],

            // Supplier 2
            ['kategori_id' => 2, 'barang_kode' => 'BRG006', 'barang_nama' => 'Kemeja', 'harga_beli' => 100000, 'harga_jual' => 150000, 'created_at' => NOW()],
            ['kategori_id' => 2, 'barang_kode' => 'BRG007', 'barang_nama' => 'Celana Jeans', 'harga_beli' => 200000, 'harga_jual' => 300000, 'created_at' => NOW()],
            ['kategori_id' => 2, 'barang_kode' => 'BRG008', 'barang_nama' => 'Celana Chinos', 'harga_beli' => 180000, 'harga_jual' => 200000, 'created_at' => NOW()],
            ['kategori_id' => 2, 'barang_kode' => 'BRG009', 'barang_nama' => 'Celana Bahan', 'harga_beli' => 280000, 'harga_jual' => 300000, 'created_at' => NOW()],
            ['kategori_id' => 2, 'barang_kode' => 'BRG0010', 'barang_nama' => 'Kaos Polo', 'harga_beli' => 80000, 'harga_jual' => 100000, 'created_at' => NOW()],
            
            // Supplier 4
            ['kategori_id' => 4, 'barang_kode' => 'BRG011', 'barang_nama' => 'Pensil', 'harga_beli' => 2000, 'harga_jual' => 5000, 'created_at' => NOW()],
            ['kategori_id' => 4, 'barang_kode' => 'BRG012', 'barang_nama' => 'Buku Tulis', 'harga_beli' => 5000, 'harga_jual' => 10000, 'created_at' => NOW()],
            ['kategori_id' => 4, 'barang_kode' => 'BRG013', 'barang_nama' => 'Buku Binder', 'harga_beli' => 7000, 'harga_jual' => 10000, 'created_at' => NOW()],
            ['kategori_id' => 4, 'barang_kode' => 'BRG014', 'barang_nama' => 'Buku Nota', 'harga_beli' => 3000, 'harga_jual' => 5000, 'created_at' => NOW()],
            ['kategori_id' => 4, 'barang_kode' => 'BRG015', 'barang_nama' => 'Bolpoin', 'harga_beli' => 5500, 'harga_jual' => 7500, 'created_at' => NOW()],
        ];

        DB::table('m_barang')->insert($data);
    }
}
