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
        @for($i = 0; $i < count($urls); $i++)
            <img src="{{$urls[$i]}}" alt="" srcset="">
        @endfor 
    </div>


</body>

</html>