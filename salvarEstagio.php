<?php
		
        include_once("estagiosdisponiveis.php");
        
		$idestagio = $_POST["idEs"];
		$nome = $_POST["txtNome"];
        $area = $_POST["txtArea"];
        $empresa = $_POST["txtEmpresa"];
		if ($idestagio == 0) { 
			insereEstagio($nome, $area, $empresa);
		} else { 	
			alteraEstagio($nome, $area, $empresa, $idEs);
		}
		header("location:estagiosdisponiveis.php");
 ?>