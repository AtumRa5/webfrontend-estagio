<?php
session_start();


if($_SESSION['login'] == true){
    
}else{
    
    header("Location:login.php?mensagem=nl");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylenot.css">
    
    <title>Noticias</title>
</head>
<body>
    <div class="container">
      <nav class="navbar">
        <a class="navbar-brand" href="https://portal.ifsuldeminas.edu.br/index.php">
          <img src="assets/IFLOGO.png"  height="100px" width="100px">
        </a>
        <div class="navbar-nav">
          <a class="nav-link" href="index.php">INICIO</a>
        </div>
        <div class="navbar-nav">
          <a class="nav-link" href="noticias.html">NOTICIAS</a>
        </div>
        <div class="navbar-nav">
          <a class="nav-link" href="curriculos.php">CURRICULOS</a>
        </div>
        <div class="navbar-nav">
          <a class="nav-link" href="estagiosdisponiveis.php">ESTAGIOS</a>
        </div>
        <div class="navbar-nav">
          <a class="nav-link" href="datas.php">DATAS</a>
        </div>
        <div class="navbar-nav">
          <a class="nav-link" href="empresas.php">EMPRESAS</a>
        </div>      
        <div class="navbar-nav">
          <a class="nav-link" href="vagas.php">VAGAS</a>
        </div>
        <div class="navbar-nav">
          <a class="nav-link" href="ajuda.php">AJUDA</a>
        </div>
          <button class="button1">Sair</button>
      </nav>
      <div class="slideshow-container">
        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
            <img src="assets/facul4.png" style="width:100%">
            <div class="text"></div>
            <h2>Nos dias 28 e 29 de setembro, ocorre a 9ª Feira de Estágios e Empregos do IFSULDEMINAS. Nesta edição, o evento contará com o apoio do Instituto Federal de Educação, Ciência e Tecnologia de São Paulo - IFSP, sob a coordenação da Pró-reitoria de Extensão (Proex) do IFSULDEMINAS e será, pela segunda vez, executado em formato virtual,
                   em virtude da pandemia do novo Coronavírus, sendo hospedado no portal institucional.</h2>
          </div>
        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="assets/facul1.png" style="width:100%">
          <div class="text"></div>
          <h2>Serão ofertados, nos dois dias de evento, um total de 14 minicursos on-line gratuitos, oferecidos por meio da Plataforma Zoom,  com diversas temáticas e especialistas (confira nas imagens abaixo). Cada um terá duração de 1 hora e 100 vagas disponíveis. Desta forma, as vagas serão preenchidas por ordem de inscrição e devem ser realizadas antecipadamente, no período de 02 a 24/09</h2>
        </div>
        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="assets/facul3.jpg" style="width:100%">
          <div class="text"></div>
          <h2>A programação contará com uma palestra, que traz tema de vanguarda, como empreendedorismo e carreira. Às 9h30, do dia 28/09, o palestrante Dalmir Sant'ana explicará, de maneira inspiradora, dinâmica e mágica, aos estudantes e professores sobre a importância de atitudes empreendedoras em suas decisões, além de apresentar os desafios dos profissionais de hoje, sendo empregados ou donos de suas próprias empresas.</h2>
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br> 
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>
      <script src="scripts/noticias.js"></script>
      <div class="footer">
        <p>Instituto Federal de Educação, Ciência e Tecnologia do Sul de Minas Gerais.

         DTIC - Diretoria de Tecnologia da Informação e Comunicações - Reitoria - 2015 - 2022.</p>

         <img src="assets/instagram.png" alt="" height="50px" width="50px">
         <img src="assets/twitter.png" alt="" height="50px" width="50px">
         <img src="assets/whatsapp.png" alt="" height="50px" width="50px">
         <img src="assets/facebook.png"  height="50px" width="50px">
      </div>
</body>
</html>



