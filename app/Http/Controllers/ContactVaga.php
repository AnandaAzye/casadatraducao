<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendVagasMail;
use App\Models\VagaForm;
use App\Models\Post;
class ContactVaga extends Controller
{
    public function index($id){
        $paises = json_decode(Storage::get('public/paises.json'));
        $posts = Post::published()->whereIn('post_type', ['vagas'])->distinct()->orderBy('menu_order')->paginate(40);
        $vagas = [];
        $vagaSelecionada;
        foreach ($posts as $key => $post) {
            if($post->post_name != $id){
            array_push($vagas, $post->post_title);
            }else if($post->post_name === $id){
                $vagaSelecionada = $post->post_title;
            }
        };
        return view('site.pages.vagas.form.index', compact('id', 'paises', 'vagas', 'vagaSelecionada'));
    }

    public function store(Request $request){

        if($request->file('curriculo')->isValid()){
            $request->file('curriculo')->store('curriculos');
        }

          // "João da Silva Santos" -> "joao-da-silva-santos-{random}.pdf"
        $fileName = \Str::slug($request->nome) . '-' . round(microtime(true)*1000) . '.' . $request->file('curriculo')->extension();
        // Retorna o caminho onde foi guardado
        $file = $request->file('curriculo')->storeAs('curriculos', $fileName);

        $data = [
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone'=> $request->telefone,
            'tempo_integral' => $request->tempo_integral,
            'tempo_parcial' => $request->tempo_parcial,
            'link_linkedin' => $request->link_linkedin,
            'pais' =>  $request->pais,
            'sobre' => $request->sobre,
            'termo_comunicacao' => $request->termo_comunicacao,
            'curriculo' => $file,
            'vaga_escolhida' => $request->vaga
        ];
        // dd($data);
        $VagaForm = new VagaForm();
        $VagaForm->nome = $request->nome;
        $VagaForm->email = $request->email;
        $VagaForm->telefone = $request->telefone;
        $VagaForm->tempo_integral = $request->tempo_integral;
        $VagaForm->tempo_parcial = $request->tempo_parcial;
        $VagaForm->link_linkedin = $request->link_linkedin;
        $VagaForm->pais = $request->pais;
        $VagaForm->sobre = $request->sobre;
        $VagaForm->termo_comunicacao = $request->termo_comunicacao;
        $VagaForm->curriculo = $file;
        $VagaForm->vaga_escolhida = $request->vaga;
        $VagaForm->save();
        // Mail::to('joaohenrique17k@outlook.com')->send(new SendVagasMail($data));
        return back()->with('success', 'Obrigado por nos contactar');


    }
}



