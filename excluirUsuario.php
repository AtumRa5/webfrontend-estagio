<?php
		include_once("usuario.php");
		$idusuario = $_GET["idUs"];
		// Exclui pessoa do banco de dados
		excluiPessoa($idpessoa);	
		// Redireciona para a página de lista de pessoas
		header("location:cadastra.php");//onde ficara localizada a tabela
 ?>