<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem vindo</title>
</head>
<body>

    {{-- @if ($nome = 'Cássio')
        <h1>Sim</h1>
    @else 
        <h2>Não</h2>
    @endif

    @for ($i = 0; $i <= 10; $i++)
        <p> Valor de i é: {{$i}} </p>
    @endfor --}}

    @foreach ($ingredientes as $ing)

        <p> 
            {{$ing}}
        
            @component('components.botao')
                @slot('cor')
                    blue
                @endslot
            Editar
            @endcomponent

            @component('components.botao')
                @slot('cor')
                    red
                @endslot
            Deletar
            @endcomponent

        </p>
        
    @endforeach



</body>

</html>