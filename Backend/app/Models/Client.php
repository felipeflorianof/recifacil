<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
       protected $fillable = [
        'name',
        'email',
        'password',
        'cpf',
        'date_of_birth',
        'phone',
        'cep',
        'city',
        'state',
        'neighborhood',
        'street',
        'number',
        'complement'
    ];
}
