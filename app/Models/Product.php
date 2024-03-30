<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';

    protected $fillable = [
        'nama_produk',
        'gambar_produk_path',
        'deskripsi_produk',
        'harga_produk',
        'stok_produk'
    ];


}
