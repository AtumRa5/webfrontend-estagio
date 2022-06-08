<?php

    function abreConexao() {//Serve para abrir uma conexão com o banco de dados wamp
        $servername = "localhost";
        $database = "bdestagio";// nome do banco
        $username = "root";
        $password = "";
        
        $conn = mysqli_connect($servername, $username, $password, $database);
        // Check connection
        if (!$conn) {
            die("Falha na conexão: " . mysqli_connect_error());
        } 
		return $conn;
	}
?>