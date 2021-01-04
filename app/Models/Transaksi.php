<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    public $table = "transaksi";
    protected $fillable = ['idUser', 'harga_tran','tanggal_tran', 'bukti_bayar', 'status_transaksi','status_bayar' ];
}
