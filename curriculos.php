<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylecurriculos.css">
    <title>Curriculos</title>
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
      <form class="box">
        <div class="curriculo" id ="curriculoDiv">
          <span id="erroDescricao"></span>
          <h1>Preencher curriculo</h1>
            <input type="text" class="text-input"placeholder="Nome">
            <input type="text" class="text-input"placeholder="Sobrenome">
            <input type="datetime-local" class="text-input"placeholder="Data de Nascimento">
            <select class="text-input" name="sexo" id="sexo">
              <option value="m">Masculino</option>
              <option value="f">Feminino</option>
            </select>
              <input type="email" class="text-input"placeholder="Email">
              <div class="box"> <input type="submit" value="Finalizar"></div>
            </div>
          </form>
        </div>
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



