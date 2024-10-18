<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Título Padrão')</title>
</head>
<body>
    <nav>
        <a href="{{ url('/') }}">Voltar para a Página Principal</a>
    </nav>
    
    <div class="container">
        @yield('content') <!-- Aqui será inserido o conteúdo específico de cada página -->
    </div>
</body>
</html>