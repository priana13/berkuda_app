<?php

namespace App\Http\Controllers\Front;

use App\Models\Post;
use App\Models\Product;
use CRUDBooster;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){

        $data['products'] = Product::paginate(3);
        $data['stories'] = Post::post()->paginate(5);

        return view('front.home',$data);

    }
}
