<?php
		
        include_once("estagiosdisponiveis.php");
        
		$idestagio = $_POST["idEs"];
		$nome = $_POST["nome"];
        $area = $_POST["area"];
        $empresa = $_POST["empresa"];
		if ($idestagio == 0) { 
			insereEstagio($nome, $area, $empresa);
		} else { 	
			alteraEstagio($nome, $area, $empresa, $idEs);
		}
		header("location:estagiosdisponiveis.php");
 ?>