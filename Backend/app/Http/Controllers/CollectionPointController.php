<?php

namespace App\Http\Controllers;

use App\Models\SignupCollectionPoint;
use Illuminate\Http\Request;

class CollectionPointController extends Controller
{
  public function store(Request $request)
{
    $data = $request->json()->all();

    $collectionPoint = new SignupCollectionPoint;
    $collectionPoint->nomeCooperativa = $data['nomeCooperativa'];
    $collectionPoint->cnpj = $data['cnpj'];
    $collectionPoint->email = $data['email'];
    $collectionPoint->senha = $data['senha'];
    $collectionPoint->telefone = $data['telefone'];
    $collectionPoint->cep = $data['cep'];
    $collectionPoint->rua = $data['rua'];
    $collectionPoint->cidade = $data['cidade'];
    $collectionPoint->estado = $data['estado'];
    $collectionPoint->complemento = $data['complemento'];
    $collectionPoint->materiaisReciclaveis = $data['materiaisReciclaveis'];

    $collectionPoint->save();

    return response()->json([
        'status' => 'Cadastrado com Sucesso'
    ], 200);
}
}