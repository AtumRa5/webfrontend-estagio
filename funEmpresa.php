<?php 

include_once("conecta.php"); // Inclui a classe conecta
function retornaestagio() {
	$sql = "SELECT * FROM tbestagios ORDER BY nome";
	$conexao = abreConexao(); # Abre a conexão com o BD
	$resultado = $conexao->query($sql);
	$conexao->close(); // Fecha a conexão com o BD
	if (mysqli_num_rows($resultado) > 0) {
		 while ($row = mysqli_fetch_array($resultado)) {
			  $estagio[] = $row;
		 }
		 return $estagio;
	} else {
		 return null;
	} }

    function retornaEstagioPorId($idEs) {
        $sql = "SELECT * FROM tbestagios WHERE idestagios = ".$idUs;
        $conexao = abreConexao(); // Abre a conexão com o BD
        $resultado = $conexao->query($sql);
        $conexao->close(); // Fecha a conexão com o BD
        if (mysqli_num_rows($resultado) > 0) {
            $estagio = mysqli_fetch_array($resultado);
             return $estagio;
        } else {
             return null;
        } 
    }

    function insereEstagio($nome,$area) {
        echo "Aqui insere";
        // Define o comando SQL  (insert)
        $sql = "INSERT INTO tbestagios(nome, area) 
            VALUES('$nome', '$area')";
        $conexao = abreConexao(); // Abre a conexão com o BD
        $conexao->query($sql); // Executa o comando SQL
        $conexao->close(); 	// Fecha a conexão com o BD
    }

    function alteraEstagio($ra,$senha,$idUs) {
        // Define o comando SQL  (update)
        $sql = "UPDATE tbestagios SET nome = '$nome', 
            area = '$area' WHERE idestagio = $idEs"; 
        $conexao = abreConexao(); // Abre a conexão com o BD
        $conexao->query($sql);	 // Executa o comando SQL
        $conexao->close(); // Fecha a conexão com o BD
    }

    function excluiEstagio($idEs) {
        // Define o comando SQL  (delete)
        $sql = "DELETE FROM tbestagios WHERE idestagio = $idEs"; 
        $conexao = abreConexao(); // Abre a conexão com o BD
        $conexao->query($sql); // Executa o comando SQL
        $conexao->close(); // Fecha a conexão com o BD 
    }
    function exitirEstagio($nome){
        $sql = "SELECT nome FROM tbestagios WHERE nome=$nome";
        $conexao = abreConexao(); // Abre a conexão com o BD
        $conexao->query($sql); // Executa o comando SQL
        $conexao->close(); // Fecha a conexão com o BD 
        if($nome!=null)
        return 1;
    }
    ?>
    