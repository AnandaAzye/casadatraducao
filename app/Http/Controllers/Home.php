<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class Home extends Controller
{
    public function Home(){
        $posts = Post::published()->whereIn('post_type', ['home'])->distinct()->orderBy('menu_order')->paginate(6);
        $card = Post::published()->whereIn('post_type', ['card'])->distinct()->orderBy('menu_order')->paginate(6);
        $parceiros = Post::published()->whereIn('post_type', ['parceiros'])->distinct()->orderBy('menu_order')->paginate(10);
        return view('site.pages.home.home', compact('posts', 'card', 'parceiros'));
    }

}
