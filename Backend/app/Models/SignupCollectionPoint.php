<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SignupCollectionPoint extends Model

{

    use HasFactory;

    protected $fillable = [
        'nomeCooperativa',
        'telefone',
        'cnpj',
        'email',
        'senha',
        'telefone',
        'cep',
        'rua',
        'cidade',
        'estado',
        'complemento',
        'materiaisReciclaveis',
    ];
}
