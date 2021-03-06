<?php

    session_start();
    

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
  

  <form class="box" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
      <h1>LogIn</h1>
      <input type="text" name="ra" id="ra" class="text-input"placeholder="RA (Aluno)" >
      <span class="error"></span>
      <input type="password" name="senha" placeholder="Senha" class="text-input" id="senha">
      <span class="error"></span>
      <input type="submit" value="Entrar">
      <input type="button" name="cad" value="Cadastrar-se" id="cad">

    
        
</form>

    <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $login = $_POST['ra'];
  $senha = $_POST['senha'];
  $verif = 0;
  $_SESSION['login'] = true;
  if($login == '' || $senha == ''){
    $_SESSION['login'] = false;
    echo '<script>alert("Todos os campos devem estar preenchidos!")</script>';
  }else{
    $_SESSION['login'] = true;
    $arquivo = file_get_contents('arqJson/user.json');
    $dados = json_decode($arquivo, true);

    foreach($dados['cadastros'] as $cadastros){
        if($cadastros['RA'] == $login && $cadastros['senha'] == $senha){
            $verif = 1;
    }
    }

    if($verif == 1)
      header("Location: index.php");
    else{
      $_SESSION['login'] = false;
      echo '<script>alert("Usuario ou senha incorretos!")</script>';
    }
  }
}
      exit(1);
    ?>

  </body>
  
</html>