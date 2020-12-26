<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public $table = "cart_pelanggan";
    protected $fillable = ['idUser', 'id_prod', 'jumlah'];
}
