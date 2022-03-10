<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table = 'paket';

    public function product(){
        
        return $this->belongsToMany(Product::class,'produk_paket','paket_id','produk_id');
    }

    public function produk_paket(){
        
        return $this->hasMany(ProdukPaket::class,'paket_id');
    }
}
