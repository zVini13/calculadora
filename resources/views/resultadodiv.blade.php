<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<style>
    body{
        font-family: 'Oswald', sans-serif;
        font-size: 50px;
    }
    h2{
        font-size: 18px;
    }
</style>
<body>
    <div class= "container">
        <div class="row mt-2">
            <a href="{{route('soma')}}" class="btn btn-primary btn-lg" > Voltar</a></div>
            <div class="row mt-4">
                <p class="text-center">{{$valor1}} : {{$valor2}} = {{$resultado}}</p></div>
            <div class="row mt-2">
                <h2 class="text-center">Todos os direitos reservados - Vinicius Santos Goes - 2021<h2>
             </div>
</body>
</html>