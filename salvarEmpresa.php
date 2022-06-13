<?php
		
        include_once("empresas.php");
        
		$idempresa = $_POST["idEm"];
		$cnpj = $_POST["txtCnpj"];
		$nome = $_POST["txtNome"];
		if ($idempresa == 0) { 
			insereEmpresa($cnpj,$nome);
		} else { 	
			alteraEmpresa($cnpj,$nome,$idEm);
		}
		header("location:empresas.php");
 ?>