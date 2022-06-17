<?php 

include_once("conecta.php"); // Inclui a classe conecta
function retornaEstagio() {
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
        $sql = "SELECT * FROM tbestagios WHERE idestagios = ".$idEs;
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