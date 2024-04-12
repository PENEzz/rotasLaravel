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
h1 {
  font-family: 'Papyrus', sans-serif;
  border-bottom: 2px solid black; 
  padding-bottom: 5px;
}


p.tex{
  font-family: 'Papyrus', sans-serif; 
  border: 1px solid #ccc; 
  padding: 10px; 
  background-color: #F8F8FF	;
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



<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/af/BIBLI-ZL.jpg/250px-BIBLI-ZL.jpg" class="img-fluid" alt="...">

<h1>Nossa História</h1>
<p class="tex">
  Localizada estrategicamente na Avenida Águia de Haia, na Zona Leste de São Paulo, a Etec Zona Leste se destaca como um importante polo educacional na região. <br>
Sua história remonta ao compromisso com a excelência educacional e o desenvolvimento profissional dos estudantes.

Fundada em [insira o ano de fundação], a Etec Zona Leste rapidamente se estabeleceu como uma instituição de referência no ensino técnico e tecnológico. Desde o <br>
início, sua missão foi proporcionar oportunidades de aprendizado que preparassem os alunos para os desafios do mercado de trabalho, além de incentivá-los a buscar <br>
a excelência acadêmica.

Ao longo dos anos, a escola tem evoluído e se adaptado às demandas da sociedade e do mercado, ampliando sua oferta de cursos e modernizando suas instalações. Com uma <br>
equipe dedicada de professores e funcionários, a Etec Zona Leste oferece uma variedade de cursos técnicos em áreas como informática, administração, eletrônica, entre <br>
outros, proporcionando aos alunos uma formação sólida e atualizada.

Além da excelência acadêmica, a Etec Zona Leste também se destaca por suas atividades extracurriculares, que incluem projetos de pesquisa, competições acadêmicas, <br>
eventos culturais e esportivos. Essas atividades complementam o currículo escolar, promovendo o desenvolvimento integral dos estudantes e estimulando o trabalho em <br>
equipe, a liderança e a criatividade.
</p>


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