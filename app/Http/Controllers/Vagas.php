<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Taxonomy;
class Vagas extends Controller
{
    public function vagas(){

        $category = Taxonomy::where('taxonomy', 'categoriasVAGAS')->with('posts')->get();

        $vagas = Post::published()->whereIn('post_type', ['vagas'])->distinct()->orderBy('menu_order')->paginate(6);
        return view('site.pages.vagas.index', compact('vagas', 'category'));
    }
}
