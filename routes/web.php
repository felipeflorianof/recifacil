<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/cadastro/reciclador', function () {
    return view('cadastro-reciclador');
});
Route::get('/cadastro/coletor', function () {
    return view('cadastro-coletor');
});
Route::get('/sobre', function () {
    return view('sobre');
});
Route::get('/suporte', function () {
    return view('suporte');
});


