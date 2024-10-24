@extends('layouts.app')
@section('title', 'Home')
@section('content')
    @include('layouts.header')
    <h1>Bem-vindo(a)!</h1>

    <x-alerta tipo="success">
        Operação realizada com sucesso!
    </x-alerta>

    <x-alerta tipo="error">
        Ocorreu um erro durante a operação.
    </x-alerta>

    <div class="card-container">
        <x-card 
            imagem="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimages.wallpapersden.com%2Fimage%2Fdownload%2Flos-angeles_a2xpZWeUmZqaraWkpJRoZWWtaGVl.jpg&f=1&nofb=1&ipt=1743aed43434000d11bdf61ff8df5c61bdf96af6bd5840278ade665e49b297cc&ipo=images" 
            titulo="Cidade" 
            descricao="Cidade sob pôr do sol." 
        />

        <x-card 
            imagem="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcurrentpixel.com%2Fwp-content%2Fuploads%2F2015%2F05%2FPhoto-300x300.png&f=1&nofb=1&ipt=6eb6eeeb44834a4e39c814265f95b1fd0b051726fad1dc5118fde3e08f5d3aa5&ipo=images" 
            titulo="Ártico" 
            descricao="Montanhas com neve." 
        />

        <x-card 
            imagem="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.pinimg.com%2Foriginals%2Fb0%2F2b%2Fe6%2Fb02be617e153fdd852c8e2f839d99eca.jpg&f=1&nofb=1&ipt=e4162d7fbcb022b444666b4c428ad281051f68fd30e351a75d8d35d6cbd1e661&ipo=images" 
            titulo="Disco de música" 
            descricao="Alguém vai curtir uma música hoje." 
        />
    </div>

     <x-alerta-com-slot>
        Mensagem de sucesso: O produto foi adicionado ao carrinho com sucesso!
    </x-alerta-com-slot>

    <x-alerta-com-slot>
        Mensagem de erro: Não foi possível completar a operação.
    </x-alerta-com-slot>

    <x-botao text="Adicionar ao Carrinho">
        <i class="fas fa-plus"></i> 
    </x-botao>

    <x-botao text="Remover do Carrinho">
        <i class="fas fa-trash"></i> 
    </x-botao>

    <x-botao href="{{url('/login')}}" text="Fazer Login"></x-botao> 
@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endpush