<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="scripts/cadastro.js" defer></script>
    <script src="scripts/excluir.js"></script>
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
        <h1>Cadastro</h1>
        <input type="text" name="ra" id="ra" class="text-input"placeholder="RA (Aluno)" >
        <input type="password" name="senha" placeholder="Senha" class="text-input" id="criarsenha">
        <input type="password" name="confirmarsenha" placeholder="Confirmar Senha" class="text-input" id="confirmarsenha">
        <div><input type="submit" value="Cadastrar">
        <input type="button" name="excluirUs" value="Excluir" id="excluirUs" onclick="hhh()">
        <input type="button" name="voltar" value="Voltar" id="voltar"></div>
    </form>
    
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $login = $_POST['ra'];
            $senha = $_POST['senha'];
            $confirmarsenha = $_POST['confirmarsenha'];
            $verif = 0;
            $verifuser = 0;

            if($senha == $confirmarsenha)
                $verif = 1;
            
            $arquivo = file_get_contents('arqJson/user.json');
            $dados = json_decode($arquivo, true);

            foreach($dados['cadastros'] as $cadastros){
                if($cadastros['RA'] == $login)
                    $verifuser = 1;
            }

            if($verifuser == 1){
                echo '<script>alert("O RA digitado já está cadastrado!")</script>';
            }else if($verif == 0){
                echo '<script>alert("As senhas não são equivalentes!")</script>';
            }else if($login == '' || $senha == ''){
                echo '<script>alert("Todos os campos devem estar preenchidos!")</script>';
            }else{
                
                $count=0;

                foreach($dados['cadastros'] as $cadastros){
                    $count++;
                }

                // adiciona dados
                $dados['cadastros'][$count] = array('RA'=>$login, 'senha'=>$senha);

                // encoda o json e salva no arquivo
                file_put_contents('arqJson/user.json', json_encode($dados));

                echo '<script>alert("Cadastro realizado com sucesso!")</script>';
                echo '<script>window.location.href = "login.php";</script>';
            }
        }
    ?>
    
</body>

</html>