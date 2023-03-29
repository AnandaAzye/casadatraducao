<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VagaForm extends Model
{
    use HasFactory;
    protected $fillable = [
        'tempo_integral',
        'tempo_parcial',
        'nome',
        'email',
        'telefone',
        'link_linkedin',
        'pais',
        'sobre',
        'termo_comunicacao',
        'curriculo',
        'vaga_escolhida'
    ];

    public $timestamps = false;
    protected $table = 'vagas';
}
