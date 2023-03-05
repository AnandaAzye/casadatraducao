<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contact extends Controller
{
  public function contact(){
    return view('site.pages.contact.index');
  }
}
