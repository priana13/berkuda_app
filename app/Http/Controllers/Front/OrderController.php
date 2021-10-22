<?php

namespace App\Http\Controllers\Front;

use App\Models\CmsUser;
use App\Models\Product;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{

    //menyamakan format no hp
    public function no_hp($nohp){

        // kadang ada penulisan no hp 0811 239 345
        $nohp = str_replace(" ","",$nohp);
        //replace juga klo ada - strip
        $nohp = str_replace("-","",$nohp);
        // kadang ada penulisan no hp (0274) 778787
        $nohp = str_replace("(","",$nohp);
        // kadang ada penulisan no hp (0274) 778787
        $nohp = str_replace(")","",$nohp);
        // kadang ada penulisan no hp 0811.239.345
        $nohp = str_replace(".","",$nohp);

        // cek apakah no hp mengandung karakter + dan 0-9
        if(!preg_match('/[^+0-9]/',trim($nohp))){
            // cek apakah no hp karakter 1-3 adalah +62
            if(substr(trim($nohp), 0, 3)=='+62'){
                $hp = ''.substr(trim($nohp), 1);
            }
            // cek apakah no hp karakter 1 adalah 0
            elseif(substr(trim($nohp), 0, 1)=='0'){
                $hp = '62'.substr(trim($nohp), 1);
            }elseif(substr(trim($nohp), 0, 1)=='8'){
                $hp = '628'.substr(trim($nohp), 1);
            }else{
                $hp = trim($nohp);
            }
        }
        return $hp;
    }


    public function store(Request $request){

        // $request->validate([
        //     'product_id' => 'required',
        //     'nama' => 'required',
        //     'hp' => 'required|numeric',
        //     'jumlah' => 'required'
        // ]);

        $product = Product::find($request->get('produk_id'));
        $total = $product->harga * $request->jumlah;
        $hp = $this->no_hp($request->hp);

        $getuser = CmsUser::where('hp',$hp)->first();
        // dd($getuser);
        if($getuser == null || $getuser==''){

            $user =  CmsUser::create([
                'name' => $request->nama,
                'hp' => $hp,
                'type' => 'Customer',
                'status_member' => 'Trial'
            ]);
        }else{
            $user = $getuser;
        }


        $response =  Transaksi::create([
                'user_id' => $user->id,
                'kode_transaksi' => uniqid(),
                'produk_id' => $request->produk_id,
                'qty' => $request->jumlah,
                'total'  => $total
            ]);

        $query =  http_build_query([
            'phone' => '6289504932111',
            'text' => 'Assalamualaikum, Saya mau pesan paket Berkuda : '.$product->nama_produk . ' untuk ' . $request->jumlah . ' Orang'
        ]);


        return redirect('https://api.whatsapp.com/send?' . $query);
    }
}
