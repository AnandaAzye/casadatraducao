<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Models\ContactForm;

// use App\Mail\SendMail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.pages.contact.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'email' => 'required | email ',
            'mensagem' => 'required'
        ]);

        $data = array(
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'mensagem' => $request->mensagem
        );

        // @dd($data);

        $ContactForm = new ContactForm();
        $ContactForm->nome = $request->nome;
        $ContactForm->email = $request->email;
        $ContactForm->numero = $request->telefone;
        $ContactForm->assunto = $request->mensagem;
        $ContactForm->save();

        Mail::to(config('mail.from.address'))
        ->send(new SendMail($data));
        return back()->with('success', 'Obrigado por nos contactar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
