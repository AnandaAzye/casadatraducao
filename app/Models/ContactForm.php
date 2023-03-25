<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'email',
        'numero',
        'assunto'
    ];

    public $timestamps = false;
    protected $table = 'contato';
}
