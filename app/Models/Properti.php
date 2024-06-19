<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properti extends Model
{
    use HasFactory;
    protected $table = 'properti';
    protected $guarded=[];
    protected $fillable = ['id','admin_id','nama', 'tipe', 'harga','alamat','wifi', 'jumlah_kamar', 'tipe_kamarmandi', 'dapur', 'lain', 'gambar'];
}
