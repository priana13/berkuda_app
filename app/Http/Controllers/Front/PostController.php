<?php

namespace App\Http\Controllers\Front;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(Request $request){

        $posts = Post::paginate(5);

        return view('front.post',compact('posts'));
    }

    public function show($slug){

        $post = Post::where('slug',$slug)->first();

        return view('front.post',compact('post'));
    }
}
