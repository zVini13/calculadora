<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<style>
      body{
       font-family: 'Oswald', sans-serif;}
</style>
<body>
   <div class="container"> 
      <div class="row mt-2">
            Cabeçalho
      </div>
       <div class="row mt-2">
            <h1>Calculadora</h1> <br>
       </div>
       <div class="row">

                    <form>
                <div class="mb-3 mt-2">
                    <label for="primeiroValor" class="form-label">Primeiro Valor</label>
                    <input type="number" class="form-control" id="primeiroValor">
                
                <div class="mb-3 mt-2">
                    <label for="segundoValor" class="form-label">Segundo valor</label>
                    <input type="number" class="form-control" id="segundoValor">
                </div>
                
                <button type="submit" class="btn btn-primary">Somar</button>
                </form>
       
       
       </div>
       <div class="row mt-se">
            Rodapé
       </div>
    </div>
</body>
</html>