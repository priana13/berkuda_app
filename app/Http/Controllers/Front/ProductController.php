<?php

namespace App\Http\Controllers\Front;

use App\Models\Product;
use App\Models\Kuda;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\ProdukPaket;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->page=="all"){

            $data['products'] = Product::all();
        }else{

            $data['products'] = Product::paginate(8);
        }     


        return view('front.paket',$data);
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list_kuda()
    {
        $data['kuda'] = Kuda::dijual()->paginate(3);

        return view('front.list_kuda',$data);
    }

    public function kuda($id)
    {
        $product = Kuda::find($id);

        return view('front.kuda',compact('product'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        $produk_paket = ProdukPaket::where('produk_id',$id)->get();

        if($produk_paket != null){

            foreach($produk_paket as $row){
               
                $paket[] = [
                    "id" => $row->paket_id,
                    "paket" => $row->paket->nama,
                    "harga" => $row->harga,
                    "qty" => $row->qty_pertemuan
                ];
            }
      
        }

        return view('front.product',compact('product', 'paket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
