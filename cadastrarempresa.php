<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CadastrarEmpresa</title>
    <link rel="stylesheet" href="css/stylecadastrarempresa.css">
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
        <h1>Cadastro de Empresa</h1>
        <input type="text" name="cnpj" id="cnpj" class="text-input"placeholder="CNPJ" >
        <input type="text" name="nome" placeholder="Nome" class="text-input" id="nome">
        
        <div><input type="submit" value="Cadastrar">
        <input type="button" name="voltar" value="Voltar" id="voltar"></div>

     
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $cnpj = $_POST['cnpj'];
            $nome = $_POST['nome'];

            $verifuser = 0; // Verifica se o usuário já existe no json
            
            $arquivo = file_get_contents('arqJson/empresas.json');
            $dados = json_decode($arquivo, true);

            foreach($dados['cadastros'] as $cadastros){ // Verifica se o usuário já existe no json
                if($cadastros['cnpj'] == $cnpj)
                    $verifuser = 1;
            }

            if($verifuser == 1){
                echo '<script>alert("O CNPJ digitado já está cadastrado!")</script>';
            }else if($cnpj == '' || $nome == ''){
                echo '<script>alert("Todos os campos devem estar preenchidos!")</script>';
            }else{
                
                $count=0;

                foreach($dados['cadastros'] as $cadastros){
                    $count++;
                }

                // adiciona dados
                $dados['cadastros'][$count] = array('cnpj'=>$cnpj, 'nome'=>$nome);

                // encoda o json e salva no arquivo
                file_put_contents('arqJson/empresas.json', json_encode($dados));

                echo '<script>alert("Cadastro realizado com sucesso!")</script>';
                echo '<script>window.location.href = "cadastrarempresa.php";</script>';
            }
        }
    ?>
    
</body>

</html>