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
      h2{
        font-family: 'Papyrus', sans-serif; 
        font-weight: 600
      }
      label{
        font-family: 'Papyrus', sans-serif; 
      }
      button.tex{
        font-family: 'Papyrus', sans-serif;
        font-weight: 600
      }
      form.tex{
        margin: 100px auto;
        padding: 20px;
        width: 300px;
        display: flex;
        flex-direction: column;
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

<form id="mainForm" class="tex">
        <h2 class="mb-3">Complete o formulário</h2>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="emailInp" placeholder="nome@exemplo.com">
            <label for="floatingInput">Endereço de email</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="passwordInp" placeholder="Senha">
            <label for="floatingPassword">Senha</label>
          </div>
          <div class="form-floating mb-3">
            <input type="formControll" class="form-control" id="comentInp" placeholder="Comentario">
            <label for="floatingPassword">Comentário</label>
          </div>


          <button type="submit" class="btn btn-outline-danger" style="float: right">Enviar Formulário</button>
        </form>




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