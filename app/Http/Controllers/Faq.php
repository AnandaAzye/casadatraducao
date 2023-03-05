<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class Faq extends Controller
{
    public function faq(){
        $faq = Post::published()->whereIn('post_type', ['faq'])->distinct()->orderBy('menu_order')->paginate(6);
        return view('site.pages.faq.index', compact('faq'));

    }
}
