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
    <link rel="stylesheet" href="css/stylevagas.css">
    <script src="scripts/sair.js"></script>
    <title>Vagas</title>
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
      <div class="tabela">
        <table class="styled-table" border="2">
            <thead>
              <tr>        
                <th>Estagio</th>
                <th>Vagas</th>
              </tr>
            </thead>
          <tbody>
              <tr>
                <td>Udemy</td>
                <td>2.802</td>
              </tr>
            <tr class="active-row">
              <td>H4D1</td>
              <td>10.345</td>
            </tr>
            <tr class="active-row">
              <td>Perigo.INC</td>
              <td>7.905</td>
            </tr>
          </tbody>
        </table>
        
      </div>
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



