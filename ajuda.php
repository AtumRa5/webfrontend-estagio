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
    <link rel="stylesheet" href="css/styleindex.css">
    <script src="scripts/sair.js"></script>
    <title>Ajuda</title>
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
                <a class="nav-link" href="noticias.php">NOTICIAS</a>
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
            <button class="button1" name="sair" id="sair" value="sair" onclick="sair()">Sair</button>
        </nav>
    </div>
    <div class="sobre">
        <h2>A Ouvidoria</h2>
            <div class="sobredois" style="height:100px;">
                <h3>Cabe a Ouvidoria atuar como representante imparcial da comunidade acad??mica e da sociedade. 
                    Seu compromisso ?? facilitar o acesso do cidad??o ao IFSULDEMINAS. Ela valoriza a democracia, age de forma ??tica,
                     com respeito por toda a comunidade e tamb??m possui a responsabilidade de analisar a qualidade do servi??o prestado
                      pelo IFSULDEMINAS</h3>        
    </div>
      <div class="footer">
        <p>Instituto Federal de Educa????o, Ci??ncia e Tecnologia do Sul de Minas Gerais.

         DTIC - Diretoria de Tecnologia da Informa????o e Comunica????es - Reitoria - 2015 - 2022.</p>

         <img src="assets/instagram.png" alt="" height="50px" width="50px">
         <img src="assets/twitter.png" alt="" height="50px" width="50px">
         <img src="assets/whatsapp.png" alt="" height="50px" width="50px">
         <img src="assets/facebook.png"  height="50px" width="50px">
      </div>  
</body>
</html>



