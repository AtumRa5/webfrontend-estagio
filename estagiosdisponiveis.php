<?php
session_start();


if($_SESSION['login'] == true){
    
}else{
    
    header("Location:login.php?mensagem=nl");
}
?>
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
                <table class="styled-table" border="2">
                    <thead>
                        <tr>        
                            <th>Estagios</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php include_once("funEstagio.php");
                        $vetestagio = retornaEstagio();
                        if( $vetestagio != null){
                            foreach($vetestagio as $estagio){
                                $nome = $estagio['nome'];
                                $area = $estagio['area'];
                                $empresa = $estagio['empresa'];
                                $idestagio = $estagio['idestagio'];
                                echo('<tr> <td>'. $nome .'</td>
                                <td>'. $area .'</td>
                                <td>'.  $empresa .'</td>
                                <td><a href="cadastrarestagio.php?id='. $idestagio .'>Alterar</a><a href="excluirEstagio.php?id=' .$idestagio. ' onclick="return confirm(\'Deseja excluir?\');">Excluir</a></td> </tr>');
                            }
                        }else{
                            echo "<tr><td>Nenhum registro encontrado!</td></tr>";
                        }
                    ?>
                   
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



