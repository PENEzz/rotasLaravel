<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('/js/app.js')}}" rel="script">

    <title>Document</title>
    <style>
header {
  background-color: lightblue; 
  color: #fff; 
  padding: 20px;
}


p {
  font-size: 16px; 
  line-height: 1.5; 
}


h1 {
  font-size: 24px; 
  color: #333; 
}


body {
  font-family: Arial, sans-serif;
  margin: 0; 
  padding: 0;
  background-color: cyan;
}
</style>
</head>
<body>
    <header>Página Principal <br>
    <a href="/">Principal</a>  <a href="/sobrenos">Sobre nós</a>  <a href="/contato">Contato</a>
    </header>
    <h1>Site sobre coisas aleatorias</h1>
    <p>O fundo tem uma tela branca, as letras com grafia simples</p>
    <p>Feito em laravel com routes, Controllers e views</p>
</body>
</html>

