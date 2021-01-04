<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartHistory extends Model
{
    use HasFactory;
    public $table = "transaksi_berisi_produk";
    protected $fillable = ['id_tran', 'id_prod', 'jumlah'];
}
