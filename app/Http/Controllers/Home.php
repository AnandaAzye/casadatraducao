<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class Home extends Controller
{
    public function Home(){
        $posts = Post::published()->whereIn('post_type', ['home'])->distinct()->orderBy('menu_order')->paginate(3);
        return view('site.pages.home.home', compact('posts'));
    }

}
