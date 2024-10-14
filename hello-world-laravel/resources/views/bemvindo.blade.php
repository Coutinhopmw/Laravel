<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem vindo</title>
</head>
<body style="margin:0;">


    <div class="" style="display:flex; flex-direction: row; width:100%; height:100vh; background-color:rgb(247, 247, 247); margin:0;">
        @foreach($pessoas as $ing)
            <div class="" style="width: 25vh; height:40vh; background-color:rgb(235, 235, 235); border-radius:2%; margin:10vh;">
                <div class="">
                    <img style="width:90% !important; margin:5%;" src=" {{$ing['image']}}" alt="">
                </div>
                <div class="">
                    <p style="text-align: center; font-size:x-large; font-weight:bold;">{{$ing['nome']}}</p>
                    <p style="text-align: center; font-size:large;">Idade:{{$ing['idade']}} anos</p>
                    <p style="text-align: center; font-size:large;"> Data nascimento:{{$ing['birth']}}</p>
                </div>
            </div>
        @endforeach
    </div>

</body>

</html>