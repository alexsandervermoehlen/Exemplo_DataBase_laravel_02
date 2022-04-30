<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos', 
    'App\Http\Controllers\ProdutoController@listagem');
Route::get('/produto/{id}',
    'App\Http\Controllers\ProdutoController@detalhe')
    ->where('id','[0-9]+');
Route::get('/produto_delete/{id}',
    'App\Http\Controllers\ProdutoController@delete')
    ->where('id','[0-9]+');