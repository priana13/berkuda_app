<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProdukPaket extends Model
{
    protected $table = "produk_paket";

    public function paket(){
        
        return $this->belongsTo(Paket::class,'paket_id');
    }
}
