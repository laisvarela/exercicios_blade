@extends('layouts.app')
@section('title', 'Exercício 3')
@section('content')
@include('layouts.header')
    <h1>Lista de Nomes</h1>
    <ul>
        @foreach ($nomes as $nome)
            <li>{{$nome}}</li>
        @endforeach
    </ul>
@endsection