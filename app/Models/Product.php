<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // use HasFactory;

    protected $table = 'produk';

    public function paket(){
        
        return $this->belongsTo(Paket::class,'paket_id');
    }
}
