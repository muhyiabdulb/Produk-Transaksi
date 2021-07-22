<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $guarded = [];

    public function produk(){
        return $this->belongsTo(Produk::class, 'kode_produk');
    }

}
