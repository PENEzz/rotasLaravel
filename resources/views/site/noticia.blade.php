<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('/js/app.js')}}" rel="script">
    <style>
       body{
        background-color: #F8F8FF;
      }
      p{
        font-family: 'Papyrus', sans-serif; 
      }
      h5{
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
div.tex{
        margin: 100px auto;
        padding: 20px;
        width: 300px;
        display: flex;
        flex-direction: column;
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



<div class="card tex" style="width: 18rem;">
  <img src="https://bkpsitecpsnew.blob.core.windows.net/uploadsitecps/sites/1/2023/11/2023-11-10-at-09.42.14.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Feira Tecnológica</h5>
    <p class="card-text">Descubra o incrível mundo da inovação e tecnologia na nossa Feira Tecnológica! Venha conhecer projetos emocionantes e participar de demos interativas. Junte-se a nós e inspire-se no futuro!</p>
    <a href="https://www.cps.sp.gov.br/etec-zona-leste-realiza-feira-tecnologica-nesta-sexta-e-sabado/" class="btn btn-primary"><button type="button" class="btn btn-outline-light">Veja Mais</button></a>
  </div>
</div>

<br><br><br>


<div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Brasil com menos técnicos</h5>
        <p class="card-text">Brasil tem uma das piores taxas de ensino técnico</p>
        <a href="https://www.estadao.com.br/educacao/brasil-tem-uma-das-piores-taxas-de-ensino-tecnico-e-de-jovens-nem-nem-diz-ranking/" class="btn btn-primary"><button type="button" class="btn btn-outline-light">Veja Mais</button></a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Vestiblinho!!!</h5>
        <p class="card-text">Veja os horário e locais de prova.</p>
        <a href="https://vestibular.brasilescola.uol.com.br/noticias/local-de-prova-vestibulinho-2024-1/355695.html" class="btn btn-primary"><button type="button" class="btn btn-outline-light">Veja Mais</button></a>
      </div>
    </div>
  </div>
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