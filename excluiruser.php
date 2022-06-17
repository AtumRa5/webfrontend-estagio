<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Usuario</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="scripts/cadastro.js" defer></script>
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
        <h1>Excluir Usuario</h1>
        <input type="text" name="ra" id="ra" class="text-input"placeholder="RA (Aluno)">
        <div><input type="submit" value="Excluir">
        <input type="button" onclick="window.location.href = 'cadastro.php'" value="Voltar"></div>
    </form>
    
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $login = $_POST['ra'];
            $verifuser = 0;
            
            $arquivo = file_get_contents('arqJson/user.json');
            $dados = json_decode($arquivo, true);

            if($login == ''){
                echo '<script>alert("Todos os campos devem estar preenchidos!")</script>';
            }else{
                
                $count=0;

                foreach($dados['cadastros'] as $cadastros){
                    if($cadastros['RA'] == $login){
                        $verifuser = 1;
                        break;
                    }
                    $count++;
                }
                
                if($verifuser == 1){
                    $login = '';
                    $senha = '';

                    $dados['cadastros'][$count] = array('RA'=>$login, 'senha'=>$senha);

                    // encoda o json e salva no arquivo
                    file_put_contents('arqJson/user.json', json_encode($dados));

                    echo '<script>alert("Exclusao realizada com sucesso!")</script>';
                    echo '<script>window.location.href = "cadastro.php";</script>';
                }else{
                    echo '<script>alert("RA nao cadastrado!")</script>';
                }
            }
        }
    ?>
    
</body>

</html>