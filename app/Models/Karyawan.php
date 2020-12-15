<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    public $table = "karyawan";
    protected $fillable = ['nama_kar', 'email_kar', 'no_hp_kar'];
}
