
    <?php
        session_start();  
        include_once ("usuario.php");
        
            $login = $_POST['ra'];
            $senha = $_POST['senha'];
            $confirmarsenha = $_POST['confirmarsenha'];
            $igual = existirPessoa($login);
            $valida = validaUsuario($login,$senha);
            $verif = 0;

            if($igual != null)
            ?>
             <meta http-equiv="refresh" content="0; URL=cadastro.php?mensagem=ig'"/>
            <?php
            if($senha != $confirmarsenha)
            ?>
             <meta http-equiv="refresh" content="0; URL=cadastro.php?mensagem=dif'"/>
            <?php
            if($login == '' || $senha == ''){
            ?>
             <meta http-equiv="refresh" content="0; URL=cadastro.php?mensagem=td'"/>
            <?php
            }
            if($valida == null){
                $_SESSION['login'] = false;
                ?>
             <meta http-equiv="refresh" content="0; URL=login.php?mensagem=ui'"/>
                
            <?php }else{  
                $_SESSION['login'] = true;
            ?>
                <meta http-equiv="refresh" content="0; URL='index.php'"/>
            <?php    }
            exit(1);  
            
        
      
    ?>
