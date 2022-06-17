<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Cadastro</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="scripts/wtf.js"></script>
    <script src="scripts/sair.js"></script>
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
        <h1>Excluir Empresa</h1>
        <input type="text" name="cnpj" id="cnpj" class="text-input"placeholder="CNPJ" >
        <div><input type="submit" value="Excluir">
        <input type="button" name="voltar" value="Voltar" id="voltar"></div>
    </form>
    
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $login = $_POST['cnpj'];
            $verifuser = 0;
            $user = -1;
            
            $arquivo = file_get_contents('arqJson/empresas.json');
            $dados = json_decode($arquivo, true);

            if($login == ''){
                echo '<script>alert("Todos os campos devem estar preenchidos!")</script>';
            }else{
                
                $count=0;

                foreach($dados['cadastros'] as $cadastros){
                    if($cadastros['cnpj'] == $login){
                        break;
                    }
                    $count++;
                }
                
				
				$nome = '';
				$cnpj = '';

                $dados['cadastros'][$count] = array( 'nome'=>$nome, 'cnpj' => $cnpj);

                // encoda o json e salva no arquivo
                file_put_contents('arqJson/empresas.json', json_encode($dados));

                echo '<script>alert("Exclusao realizado com sucesso!")</script>';
                echo '<script>window.location.href = empresas.php";</script>';
            }
        }
    ?>
    
</body>

</html>