@if ($idade>=18)
    <h1>Maior de idade</h1>
@elseif ($idade < 18 && $idade > 0)
    <h1>Menor de idade</h1>
@else
    <h1>Idade inválida</h1>
@endif
<a href="{{('/')}}">Voltar à Página Inicial</a>