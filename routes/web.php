<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/nome', function(){
    $nome = 'João';
    return view('nome', compact('nome'));
});
Route::get('/idade', function(){
    $idade = '-2';
    return view('idade', compact('idade'));
});
