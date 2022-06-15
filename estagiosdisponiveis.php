<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleempresas.css">
    <title>Estagios Disponiveis</title>
</head>
<body>
    <div class="container">

        <nav class="navbar">
            <a class="navbar-brand" href="https://portal.ifsuldeminas.edu.br/index.php">
            <img src="assets/IFLOGO.png"  height="100px" width="100px">
            </a>

            <div class="navbar-nav">
                
                <a class="nav-link" href="index.html">INICIO</a>
            
        </div>
        <div class="navbar-nav">
           
                <a class="nav-link" href="noticias.html">NOTICIAS</a>
            
        </div>
     
      
        <div class="navbar-nav">
           
                <a class="nav-link" href="curriculos.html">CURRICULOS</a>
            
             </div>
            
           
           
           
           
            <div class="navbar-nav">
            
                <a class="nav-link" href="estagiosdisponiveis.php">ESTAGIOS</a>
            </div>
            
              <div class="navbar-nav">
            
                <a class="nav-link" href="datas.html">DATAS</a>
            </div>
            
            
            
            <div class="navbar-nav">
            
                <a class="nav-link" href="empresas.php">EMPRESAS</a>
            </div>      
           
          
            <div class="navbar-nav">
            
                <a class="nav-link" href="vagas.html">VAGAS</a>
           
        </div>
           
           
           
            <div class="navbar-nav">
                    
                    <a class="nav-link" href="ajuda.html">AJUDA</a>
                    
            </div>
            <button class="button1">Sair</button>
            
         

                
            


        </nav>

      
   
     
        <div class="tabela">
 
                <table class="styled-table" border="2">
                        <thead>
                          <tr>        
                          <th>Estagios</th>
                         
                         </tr>
                 </thead>
                  <tbody>
                            <tr>
                              <td>Udemy</td>
                             
                          </tr>
                          <tr class="active-row">
                            <td>H4D1</td>
                            
                          </tr>
                          <tr>
                                <td>Th-Front</td>
                              
                            </tr>
                            <tr class="active-row">
                              <td>Perigo.INC</td>
                             
                            </tr>


                            <?php/* include_once("pessoa.php");
                              $vetpessoas = retornaPessoas();
                              if ($vetpessoas != null) {
                                      foreach ($vetpessoas as $pessoa) {
                                          $nome = $pessoa['nome'];
                                          $telefone = $pessoa['telefone'];
                                          $email = $pessoa['email'];
                                          $idpessoa = $pessoa['idpessoa'];
                              echo('<tr> <td>'.$nome.'</td> <td>'.$telefone.'</td>
                              <td>'.$email.'</td> <td><a href="formulario.php?id='.$idpessoa.
                              '" class="btn btn-primary">Alterar</a><a href="excluir.php?id='. $idpessoa.'" class="btn btn-danger" onclick="return confirm(\'Deseja excluir?\');">Excluir</a></td> </tr>');
                                      } // fecha foreach
                                  } // fecha if
                                  else {
                                      echo("<tr><td>Nenhum registro encontrado!</td></tr>");
                                  }
                               */?>
                   
                        </tbody>
                 </table>

                 <button class="button">Cadastrar Estagio</button>
                 
        </div>

    </div>

    


      <div class="footer">
        <p>Instituto Federal de Educação, Ciência e Tecnologia do Sul de Minas Gerais.

         DTIC - Diretoria de Tecnologia da Informação e Comunicações - Reitoria - 2015 - 2022.</p>

         <img src="assets/instagram.png" alt="" height="50px" width="50px">
         <img src="assets/twitter.png" alt="" height="50px" width="50px">
         <img src="assets/whatsapp.png" alt="" height="50px" width="50px">
         <img src="assets/facebook.png"  height="50px" width="50px">
      </div>
    
</body>
</html>



