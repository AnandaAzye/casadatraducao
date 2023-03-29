<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Taxonomy;
class Vagas extends Controller
{
    public function vagas(request $request){

        $category = Taxonomy::where('taxonomy', 'categoriasVAGAS')->with('posts')->get();

        if ($request->search) {
            $search = $request->search;
            $vagas = Post::where([
                ['post_title', 'like', '%' . $search . '%']
            ])->where('post_type', '=', 'vagas')->distinct()->paginate(6)->withQueryString();
        } else if ($request->category) {
            $categoryUrl = $request->category;

            $vagas = Post::taxonomy('categoriasVAGAS', $categoryUrl)->paginate(6)->withQueryString();
            if ($categoryUrl == 'Escolha uma categoria') {
                return redirect('/vagas');
            }
        } else {
            $vagas = Post::published()->whereIn('post_type', ['vagas'])->distinct()->orderBy('menu_order')->paginate(6);
        }


        //
        return view('site.pages.vagas.index', compact('vagas', 'category'));
    }
}
