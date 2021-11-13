<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kuda extends Model
{
    protected $table = 'kuda';

    public function scopeDijual($query){
        
        return $query->where('is_sale','Ya');
    }
}
