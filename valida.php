<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();  
        include_once ("usuario.php");
        
            $login = $_POST['ra'];
            $senha = $_POST['senha'];
            $igual = existirPessoa($login);
            $valida = validaUsuario($login,$senha);
            $verif = 0;

            if($login == '' || $senha == ''){
            echo '<script>alert("Todos os campos devem estar preenchidos!")</script>';
            ?>
            <meta http-equiv="refresh" content="0; URL='login.php?mensagem=td'"/>
            <?php
            }
            if($valida == null){
                ?>
    
                <meta http-equiv="refresh" content="0; URL='login.php?mensagem=ui'"/>
            <?php }else{  
                $_SESSION['login'] = true;
            ?>
                <meta http-equiv="refresh" content="0; URL='index.php'"/>
            <?php    }
            exit(1);  
            
        
      
    ?>
</body>
</html>