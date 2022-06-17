<?php

    session_start();
    session_destroy();

?>
<html lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="scripts/login.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  </head>

  <header> 
    <a href="https://portal.pas.ifsuldeminas.edu.br"><img  src="assets/Logotipo_IFET.svg.png" alt="" height="100px" width="100px"></a>
    <div class="logo2"><img src="assets/facebook.png"  height="50px" width="50px">
      <img src="assets/instagram.png" alt="" height="50px" width="50px">
      <img src="assets/twitter.png" alt="" height="50px" width="50px">
      <img src="assets/whatsapp.png" alt="" height="50px" width="50px">
    </div>
  </header>

  <body>
  

    <form class="box" action="valida.php" method="POST">
      <h1>LogIn</h1>
      <input type="text" name="ra" id="ra" class="text-input"placeholder="RA (Aluno)" >
      <input type="password" name="senha" placeholder="Senha" class="text-input" id="senha">
      <input type="submit" value="Entrar">
      <input type="button" name="cad" value="Cadastrar-se" id="cad">

    
        <p>

            <?php
            
                if ($_GET["mensagem"] == 'nl'){
                echo '<script>alert("Login é obrigatorio!!")</script>';
                }else if($_GET["mensagem"] == 'ui')
                echo '<script>alert("Usuário ou senha incorretos!")</script>';
            ?>

        </p>
</form>
    <?php

        
      
    ?>

  </body>
  
</html>