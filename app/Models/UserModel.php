<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Monolog\Level;

class UserModel extends Model
{
    use HasFactory;

    // modifikasi

    protected $table = 'm_user'; // Mendefinisikan nama tabel yang digunakan oleh model ini
    protected $primaryKey = 'user_id'; // Mendefinisikan primary key dari tabel yang digunakan


    // praktikum 4 eloquent ORM
    protected $fillable = [
        'level_id',
        'username',
        'nama',
        'password'
    ];

    // relationship 
    public function level(): BelongsTo
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }

}
