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
    }
</style>
<body>
    <div class="container"> 
        <div class="row mt-2">
            <a href="{{route('inicio')}}" class="btn btn-primary btn-lg" >Página Inicial</a>
        </div>
         <div class="row mt-2">
              <h1>Operações:</h1> <br>
              <div class="row mt-3">
                <h2>
                 <a href="{{route('soma')}}" class="btn btn-primary btn-lg" >Somar</a></h2>
                <h2><a href="{{route('menos')}}" class="btn btn-primary btn-lg" >Subtrair</a></h2>
                <h2><a href="{{route('vezes')}}" class="btn btn-primary btn-lg" >Multiplicar</a></h2>
                <h2><a href="{{route('div')}}" class="btn btn-primary btn-lg" >Dividir</a></h2>

              </div>
         </div>
                     
         <div class="row mt-3">
            <p class="text-center">Todos os direitos reservados - Vinicius Santos Goes - 2021</p>
         </div>
      </div>
</body>
</html>