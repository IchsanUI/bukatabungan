<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryMerchant extends Model
{
    protected $fillable = ['id', 'category']; // Kolom yang dapat diisi

    // Tabel yang akan diakses oleh model
    protected $table = 'category_merchants';
}
