<?php
		include_once("estagiosdisponiveis.php");
		$idestagio = $_GET["idEs"];
	
		excluiPessoa($idestagio);	
	
		header("location:estagiosdisponiveis.php");
 ?>