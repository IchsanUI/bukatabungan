<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataJaminan extends Model
{
    protected $fillable = ['kode_jaminan', 'nama_jaminan']; // Kolom yang dapat diisi

    // Tabel yang akan diakses oleh model
    protected $table = 'data_jaminan';
}
