<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class Service extends Controller
{
    public function service(){
    $card = Post::published()->whereIn('post_type', ['card'])->distinct()->orderBy('menu_order')->paginate(6);
    return view('site.pages.service.index', compact('card'));

}
}
