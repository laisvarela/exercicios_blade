@extends('layouts.app')

@section('title', 'Exercício 9')

@section('content')
    @include('layouts.header') 

    <h1>Lista de Produtos</h1>
    <ul>
        @forelse ($produtos as $produto)
            <li>{{ $produto['nome'] }} - R$ {{ number_format($produto['preco'], 2, ',', '.') }}</li>
        @empty
            <li>Nenhum produto disponível</li>
        @endforelse
    </ul>
    
@endsection