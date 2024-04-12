<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('/css/app.css')}}" rel="stylesheet">
    <link href="{{ asset('/js/app.js')}}" rel="script">
    <style>
      body{
        background-color: #F8F8FF;
      }
      figcaption{
        font-family: 'Papyrus', sans-serif;
        font-weight: 600
      }
      p{
        font-family: 'Papyrus', sans-serif;
      }
      h1{
        font-family: 'Papyrus', sans-serif;
        font-weight: 600
      }
      button.tex{
        font-family: 'Papyrus', sans-serif;
        font-weight: 600
      }
      footer {
  background-color: #f44336; 
  padding: 20px 0;
}
.footer-content {
  max-width: 1200px;
  margin: 0 auto;
  text-align: center;
  color: #fff; 
}
.footer-content p {
  margin-bottom: 10px;
}
.footer-content ul {
  list-style: none;
  padding: 0;
  margin: 0;
}
.footer-content ul li {
  display: inline-block;
  margin-right: 10px;
}
.footer-content ul li:last-child {
  margin-right: 0;
}
.footer-content ul li a {
  color: #fff; 
  text-decoration: none;
}
.footer-content ul li a:hover {
  text-decoration: underline;
}
footer {
  background: linear-gradient(to right, #f44336, #ff5252); 
}
    </style>
    </head>
  <body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <a class="navbar-brand" href="/">
      <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2023/11/logo-etec.png" alt="Etec" width="30" height="24">
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/"><button type="button" class="btn btn-outline-success tex">Início</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/sobrenos"><button type="button" class="btn btn-outline-primary tex">Sobre nós</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contato"><button type="button" class="btn btn-outline-primary tex">Contato</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/noticia"><button type="button" class="btn btn-outline-primary tex">Notícias</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/register"><button type="button" class="btn btn-outline-danger tex">Registro</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/login"><button type="button" class="btn btn-outline-danger tex">Login</button></a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/1/2020/10/GGFD5926TRAw-Planta-da-ETEC-Zona-Leste-foto-da-caixa-da%CC%81gua-1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2024/03/6aa4a7b4-0afa-4cf9-aba9-268decc1c8bc.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/1/2023/11/2023-11-10-at-09.42.14.jpg" class="d-block w-100" alt="...">
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
<br><br><br>

<figure class="figure">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQmPGY70KpZWQkbNNRtL9SdPXU-jVmw6ktzw&s" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption">Entrada da Etec</figcaption>
</figure>
<div>
<h1>Etec Zona Leste no seu futuro</h1>
<p>Bem-vindo à nossa escola, onde a excelência acadêmica se une ao cuidado e apoio individualizado. Nossa missão é proporcionar um ambiente de aprendizado estimulante, <br>
onde cada aluno pode alcançar seu máximo potencial. Com uma equipe dedicada de educadores apaixonados e uma abordagem centrada no aluno, buscamos não apenas transmitir <br>
conhecimento, mas também cultivar habilidades para a vida, criatividade e uma sede contínua de aprendizado. Junte-se a nós nesta jornada educacional, onde cada aluno é <br>
valorizado e encorajado a brilhar.</p>
<a href="/sobrenos"><button type="button" class="btn btn-outline-danger tex">Sobre Nós</button></a>
</div>
<br><br><br>



<figure class="figure">
  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/af/BIBLI-ZL.jpg/250px-BIBLI-ZL.jpg" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption">Laboratório</figcaption>
</figure>
<div>
<h1>Novidades</h1>
<p>Mantenha-se atualizado com as últimas notícias e acontecimentos. Nossa página de notícias é o seu destino para informações frescas e relevantes sobre os temas que <br>
mais importam para você. Explore os artigos mais recentes, análises aprofundadas e cobertura em tempo real. Não perca nenhum detalhe do que está acontecendo no mundo - <br>
mergulhe em nossas notícias agora!
</p>
<a href="/noticia"><button type="button" class="btn btn-outline-danger tex">Novidades</button></a>
</div>
<br><br><br>



<figure class="figure">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwxiDZNrC6Yq-aLefAh3pAhkEV58Ym1XUe_dc9yqqjFg&s" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption">Foto isométrica</figcaption>
</figure>
<br><br><br>
<div>
<h1>Tire suas dúvidas</h1>
<p>Tem alguma pergunta, sugestão ou apenas quer dizer "oi"? Ficaremos felizes em ouvir de você! Utilize o formulário abaixo para nos contatar diretamente ou encontre <br>
nossas informações de contato detalhadas. Estamos ansiosos para conversar!</p>
<a href="/contato"><button type="button" class="btn btn-outline-danger tex">Contato</button></a>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  <footer class="footer"> <!-- Adicionando a classe "footer" ao footer -->
  <div class="footer-content">
    <p>© 2024 Etec Zona Leste. Todos os direitos reservados.</p>
    <ul>
      <li><a href="#">Política de Privacidade</a></li>
      <li><a href="#">Termos de Serviço</a></li>
      <li><a href="#">Contato</a></li>
    </ul>
  </div>
</footer>
</html>
