<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;
use Illuminate\Http\Request;

Route::get('/cadastro', function () {
    return view('cadastro');
})->name('cadastro.form');

Route::post('/cadastro', function (Request $request) {
    $validar = $request->validate([
        'nome' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'senha' => 'required|string|min:6|confirmed',
    ]);
    return redirect()->route('cadastro.form')->with('success', 'Cadastro realizado com sucesso!');
})->name('cadastro.submit');

Route::get('/', function () {
    return view('home');
});

Route::get('/nome', function(){
    $nome = 'João';
    return view('nome', compact('nome'));
});
Route::get('/idade', function(){
    $idade = '-2';
    return view('idade', compact('idade'));
});

Route::get('/arraynomes', function(){
    $nomes = ['João', 'Maria', 'Pedro', 'José', 'Amanda'];
    return view ('arraynomes', compact('nomes'));
});

Route::get('/home', function() {
    return view('home');
});

Route::get('/login', function() {
    return view('login');
});

Route::post('/login', function() {
    $email = request('email');
    $password = request('password');
    return "Email: $email, Password: $password"; 
});


Route::get('/produtos', function () {
    $produtos = []; 

    // $produtos = [
    //     ['nome' => 'Café', 'preco' => 10.00],
    //     ['nome' => 'Leite', 'preco' => 9.77],
    // ];

    return view('produtos', compact('produtos'));
});