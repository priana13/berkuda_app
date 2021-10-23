<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;

class HomeController extends Controller
{
    public function index(){

        $data['products'] = Product::paginate(3);

        return view('front.home',$data);

    }
}
