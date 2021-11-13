<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table = 'paket';

    public function product(){
        
        return $this->hasMany(Product::class,'paket_id');
    }
}
