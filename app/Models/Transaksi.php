<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Transaksi extends Model
{
    // use HasFactory;

    protected $table = "transaksi";

    protected $guarded = [];

    public function scopeGroupBulan($query)
    {
      return $query->select([DB::raw('MONTH(created_at) as bulan'),DB::raw('sum(total) as nominal'),DB::raw('count(*) as qty')])->groupBy('bulan');
    }
}
