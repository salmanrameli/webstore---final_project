<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    
    protected $fillable = [
        'barang_nama', 'barang_harga', 'barang_deskripsi', 'barang_supplier', 'barang_stok', 'barang_jenis'
    ];
}
