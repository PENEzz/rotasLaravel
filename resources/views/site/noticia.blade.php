<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('/js/app.js')}}" rel="script">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <a class="navbar-brand" href="principal.blade.php">
      <img src="/imgs/logo.png" alt="Etec" width="30" height="24">
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="principal.blade.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sobre-nos.blade.php">Sobre nós</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contato.blade.php">Contato</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="noticia.blade.php">Notícias</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
      </form>
    </div>
  </div>
</nav>


<div class="card" style="width: 18rem;">
  <img src="/imgs/quadra" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Feira Tecnológica</h5>
    <p class="card-text">Descubra o incrível mundo da inovação e tecnologia na nossa Feira Tecnológica! Venha conhecer projetos emocionantes e participar de demos interativas. Junte-se a nós e inspire-se no futuro!</p>
    <a href="https://www.cps.sp.gov.br/etec-zona-leste-realiza-feira-tecnologica-nesta-sexta-e-sabado/" class="btn btn-primary">Veja mais</a>
  </div>
</div>


<div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Brasil com menos técnicos</h5>
        <p class="card-text">Brasil tem uma das piores taxas de ensino técnico</p>
        <a href="https://www.estadao.com.br/educacao/brasil-tem-uma-das-piores-taxas-de-ensino-tecnico-e-de-jovens-nem-nem-diz-ranking/" class="btn btn-primary">Veja mais</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Vestiblinho!!!</h5>
        <p class="card-text">Veja os horário e locais de prova.</p>
        <a href="https://vestibular.brasilescola.uol.com.br/noticias/local-de-prova-vestibulinho-2024-1/355695.html" class="btn btn-primary">Veja mais</a>
      </div>
    </div>
  </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
  </body>
  <footer>
    <div class="footer-content">
        <p>© 2024 Nome da Sua Empresa. Todos os direitos reservados.</p>
        <ul>
            <li><a href="#">Política de Privacidade</a></li>
            <li><a href="#">Termos de Serviço</a></li>
            <li><a href="#">Contato</a></li>
        </ul>
    </div>
</footer>
</html>