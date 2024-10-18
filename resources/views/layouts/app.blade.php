<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Título Padrão')</title>
</head>
<body>
    <div class="container">
        @yield('content') 
    </div>
    <nav>
        <a href="{{ url('/') }}">Voltar para a Página Principal</a>
    </nav>
</body>
</html>