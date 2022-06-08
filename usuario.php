<?php 

include_once("conecta.php"); // Inclui a classe conecta
function retornausuario() {
	$sql = "SELECT * FROM tbusuario ORDER BY RA";
	$conexao = abreConexao(); # Abre a conexão com o BD
	$resultado = $conexao->query($sql);
	$conexao->close(); // Fecha a conexão com o BD
	if (mysqli_num_rows($resultado) > 0) {
		 while ($row = mysqli_fetch_array($resultado)) {
			  $usuarios[] = $row;
		 }
		 return $usuarios;
	} else {
		 return null;
	} }

    function retornaUsuarioPorId($idUs) {
        $sql = "SELECT * FROM tbusuario WHERE idusuario = ".$idUs;
        $conexao = abreConexao(); // Abre a conexão com o BD
        $resultado = $conexao->query($sql);
        $conexao->close(); // Fecha a conexão com o BD
        if (mysqli_num_rows($resultado) > 0) {
             $usuario = mysqli_fetch_array($resultado);
             return $usuario;
        } else {
             return null;
        } 
    }

    function insereUsuario($ra,$senha) {
        echo "Aqui insere";
        // Define o comando SQL  (insert)
        $sql = "INSERT INTO tbusuario(ra, senha) 
            VALUES('$ra', '$senha')";
        $conexao = abreConexao(); // Abre a conexão com o BD
        $conexao->query($sql); // Executa o comando SQL
        $conexao->close(); 	// Fecha a conexão com o BD
    }

    function alteraUsuario($ra,$senha,$idUs) {
        // Define o comando SQL  (update)
        $sql = "UPDATE tbusuario SET RA = '$ra', 
            senha = '$senha' WHERE idusuario = $idUs"; 
        $conexao = abreConexao(); // Abre a conexão com o BD
        $conexao->query($sql);	 // Executa o comando SQL
        $conexao->close(); // Fecha a conexão com o BD
    }

    function excluiPessoa($idUs) {
        // Define o comando SQL  (delete)
        $sql = "DELETE FROM tbusuario WHERE idusuario = $idUs"; 
        $conexao = abreConexao(); // Abre a conexão com o BD
        $conexao->query($sql); // Executa o comando SQL
        $conexao->close(); // Fecha a conexão com o BD 
    }
    ?>
    