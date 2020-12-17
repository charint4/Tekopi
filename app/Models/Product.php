<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $table = "produk";
    protected $fillable = ['nama_prod', 'harga_prod', 'stok_prod', 'deskripsi_prod', 'gambar_prod'];
}
