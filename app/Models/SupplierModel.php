<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierModel extends Model
{
    use HasFactory;

    protected $table = 'm_supplier'; // Sesuai dengan nama tabel di database
    protected $primaryKey = 'supplier_id'; // Primary key tabel
    public $timestamps = true; // Aktifkan timestamps (created_at & updated_at)

    protected $fillable = [
        'supplier_kode',
        'supplier_nama',
        'supplier_alamat',
    ];
}
