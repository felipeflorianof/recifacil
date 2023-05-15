<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Collectionpoint extends Controller
{
    public function store(Request $request)
    {

        $data = $request->only([
            'nomeCooperativa' => 'Cooperativatest',
            'cnpj' => 'Cooperativatest',
            'email' => 'Cooperativatest',
            'senha' => 'Cooperativatest',
            'repetirsenha' => 'Cooperativatest',
            'telefone' => 'Cooperativatest',
            'cep' => 'Cooperativatest',
            'rua' => 'Cooperativatest',
            'cidade' => 'Cooperativatest',
            'estado' => 'Cooperativatest',
            'complemento' => 'Cooperativatest',
            'materiaisReciclaveis' => 'Cooperativatest'
        ]);


        $save = new Collectionpoint();

        $save->nome_cooperativa = $data['nomeCooperativa'];
        $save->save();
        
        return response()->json([
            'message' => 'it works';
        ]);
    }
}
