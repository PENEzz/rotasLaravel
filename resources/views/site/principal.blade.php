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


<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/imgs/eteccima.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/imgs/eteciso.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/imgs/auditorio.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/imgs/biblioteca.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/imgs/quadra.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<figure class="figure">
  <img src="/imgs/entrada.png" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption">Entrada da Etec</figcaption>
</figure>
<div>
<h1>Etec Zona Leste no seu futuro</h1>
<p>Bem-vindo à nossa escola, onde a excelência acadêmica se une ao cuidado e apoio individualizado. Nossa missão é proporcionar um ambiente de aprendizado estimulante, <br>
onde cada aluno pode alcançar seu máximo potencial. Com uma equipe dedicada de educadores apaixonados e uma abordagem centrada no aluno, buscamos não apenas transmitir <br>
conhecimento, mas também cultivar habilidades para a vida, criatividade e uma sede contínua de aprendizado. Junte-se a nós nesta jornada educacional, onde cada aluno é <br>
valorizado e encorajado a brilhar.</p>
<a href="sobre-nos.blade.php"><button type="button" class="btn btn-outline-danger">Sobre Nós</button></a>
</div>

<figure class="figure">
  <img src="/imgs/lab.png" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption">Laboratório</figcaption>
</figure>
<div>
<h1>Novidades</h1>
<p>Mantenha-se atualizado com as últimas notícias e acontecimentos. Nossa página de notícias é o seu destino para informações frescas e relevantes sobre os temas que <br>
mais importam para você. Explore os artigos mais recentes, análises aprofundadas e cobertura em tempo real. Não perca nenhum detalhe do que está acontecendo no mundo - <br>
mergulhe em nossas notícias agora!
</p>
<a href="noticias.blade.php"><button type="button" class="btn btn-outline-danger">Novidades</button></a>
</div>

<figure class="figure">
  <img src="/imgs/outrafoto.png" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption">Foto isométrica</figcaption>
</figure>
<div>
<h1>Tire suas dúvidas</h1>
<p>Tem alguma pergunta, sugestão ou apenas quer dizer "oi"? Ficaremos felizes em ouvir de você! Utilize o formulário abaixo para nos contatar diretamente ou encontre <br>
nossas informações de contato detalhadas. Estamos ansiosos para conversar!</p>
<a href="contato.blade.php"><button type="button" class="btn btn-outline-danger">Contato</button></a>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
