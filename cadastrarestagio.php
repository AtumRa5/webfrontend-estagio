<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CadastrarEstagio</title>
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



<?php # Verifica se foi enviado algum ID
	if (!isset($_GET["idestagio"])) { // Novo registro
		$idestagio = 0;
        $nome = "Cadastro de uma nova pessoa";
    $nome = $area = $empresa = "";
	} else { // Alteração de registro
		$idestagio = $_GET["idEs"]; 
		include_once("funEstagio.php");
		$idestagio = retornaEstagioPorId($idestagio);
		if ($idestagio != null) { // Verifica se retornou um registro
           
            $nome = $idestagio["nome"];
            $area = $idestagio["telefone"];
              $empresa = $idestagio["email"];
          }
      }
    
  ?>

    <form class="box" method="POST" action="salvarEstagio.php"> 
        <h1>Cadastro de Estagio</h1>
        
			<input type="hidden" name="idEs" 
									value="<?php echo($idUs); ?>"/>
        <input type="text" name="area" id="area" class="text-input"placeholder="Área" 	value="<?php echo($area); ?>" >
        <input type="text" name="nome" placeholder="Nome" class="text-input" id="nome" value="<?php echo($nome); ?>">
        <input type="text" name="empresa" placeholder="Empresa" class="text-input" id="empresa" value="<?php echo($empresa); ?>">
        <div><input type="submit" value="Cadastrar" onclick="alert('Dados salvos com sucesso!');">
        <input type="button" name="voltar" value="Voltar" id="voltar"></div>

        
        
        <?php /*
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $area = $_POST['area'];
            $nome = $_POST['nome'];
            $empresa = $_POST['empresa'];

            $verifuser = 0; // Verifica se o usuário já existe no json
            
            $arquivo = file_get_contents('arqJson/estagios.json');
            $dados = json_decode($arquivo, true);

           /* foreach($dados['cadastros'] as $cadastros){ // Verifica se o usuário já existe no json
                if($cadastros['cnpj'] == $cnpj)
                    $verifuser = 1;
            }

            if($verifuser == 1){
                echo '<script>alert("O CNPJ digitado já está cadastrado!")</script>';
            }else */ //não é necessario
         /*   if($area == '' || $nome == '' || $empresa == ''){
                echo '<script>alert("Todos os campos devem estar preenchidos!")</script>';
            }else{
                
                $count=0;

                foreach($dados['cadastros'] as $cadastros){
                    $count++;
                }

                // adiciona dados
                $dados['cadastros'][$count] = array('area'=>$area, 'nome'=>$nome, 'empresa'=>$empresa);

                // encoda o json e salva no arquivo
                file_put_contents('arqJson/estagios.json', json_encode($dados));

                echo '<script>alert("Cadastro realizado com sucesso!")</script>';
                echo '<script>window.location.href = "index.html";</script>';
            }
        }
  */  ?>
     
    </form>


    
</body>

</html>