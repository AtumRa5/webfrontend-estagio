<?php
		
        include_once("usuario.php");
        
		$idusuario = $_POST["idUs"];
		$RA = $_POST["txtRA"];
		$senha = $_POST["txtSenha"];
		if ($idusuario == 0) { // Novo cadastro
			insereUsuario($ra,$senha);
		} else { 	// Atualiza cadastro existente
			alteraUsuario($ra,$senha,$idUs);
		}
		header("location:cadastro.php");//onde ficara localizada a tabela
 ?>