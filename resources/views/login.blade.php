@extends('layouts.app')

@section('title', 'Exercício 6')

@section('content')
@include('layouts.header')
    <h1>Login</h1>
    <form action="{{ url('/login') }}" method="POST">
        @csrf <!-- Diretiva CSRF -->
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="password">Senha:</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div>
            <button type="submit">Entrar</button>
        </div>
    </form>
@endsection
