<?php

namespace App\Http\Controllers\Front;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function show($slug){

        $post = Post::where('slug',$slug)->first();
         
        return view('front.page',with(['page' => $post]));
    }
}
