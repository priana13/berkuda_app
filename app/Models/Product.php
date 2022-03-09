<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // use HasFactory;

    protected $table = 'produk';

    public function paket(){
        
        return $this->belongsToMany(Paket::class,'produk_paket','paket_id','produk_id');
    }
}
