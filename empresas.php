<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleempresas.css">
    <title>Empresas</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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

      <div class="tabela">
        <?php/*
          $arquivo = file_get_contents('arqJson/empresas.json');
          $dados = json_decode($arquivo);
           //montagem do html da tabela
          $table  = '<table class="styled-table" border="2">';
          $table .= '<thead>';
          $table .= '<tr>';
          $table .= '<th>CNPJ</th>';
          $table .= '<th>Nome</th>';
          $table .= '</tr>';
          $table .= '</thead>';
          $table .= '<tbody>';

          foreach($dados->cadastros as $cadastros){
            $table .= '<tr class="active-row">';
            $table .= "<td>{$cadastros->cnpj}</td>";
            $table .= "<td>{$cadastros->nome}</td>";
            $table .= '</tr>';
          }

          // fecahamento do html
          $table .= '</tbody>';
          $table .= '</table>';

          // exibição na tela
          echo $table;*/
        ?>
        
        <?php 
          include_once("pessoa.php");
          $vetpessoas = retornaPessoas();

          if($vetpessoas != null){
            foreach ($vetpessoas as $pessoa){
              $nome = $pessoa['nome'];
              $telefone = $pessoa['telefone'];
              $email = $pessoa['email'];
              $idpessoa = $pessoa['idpessoa'];
              echo('<tr> <td>'.$nome.'</td> <td>'.$telefone.'</td>
              <td>'.$email.'</td> <td><a href="formulario.php?id='.$idpessoa.
              '" class="btn btn-primary">Alterar</a><a href="excluir.php?id='. $idpessoa.'" class="btn btn-danger" onclick="return confirm(\'Deseja excluir?\');">Excluir</a></td> </tr>');
            }
          }else{
            echo("<tr><td>Nenhum registro encontrado!</td></tr>");
          }
        ?>
                          
        </div>
          <div class="myChart" id="myChart" style="width:100%; max-width:600px; height:500px;">
          </div>
          <script src="scripts/empresas.js"></script>
        </div>
        
        <div class="footer">
          <p>Instituto Federal de Educação, Ciência e Tecnologia do Sul de Minas Gerais.

          DTIC - Diretoria de Tecnologia da Informação e Comunicações - Reitoria - 2015 - 2022.</p>

          <img src="assets/instagram.png" alt="" height="50px" width="50px">
          <img src="assets/twitter.png" alt="" height="50px" width="50px">
          <img src="assets/whatsapp.png" alt="" height="50px" width="50px">
          <img src="assets/facebook.png"  height="50px" width="50px">
        </div>
      </div>
    </div>
  </body>
</html>



