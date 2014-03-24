<?php
	$cone = new mysqli("localhost", "root" ,"","projecte");

			
		$usu = $_POST['nom'];
		$pass = $_POST['pw'];
		$lasql = "select * from usuari where Usuari = '$usu'";
		$cons = $cone->query($lasql);
		$reg = $cons->fetch_array();
		if (isset($cons)&&($reg['Password']==$pass)) {
			
			//$_SESSION['usu'] = $usu;
            /*$_SESSION['comodins'] = $reg['Comodins'];
			$_SESSION['vides'] = $reg['Vides'];
			$_SESSION['admin'] = $reg['Admin'];*/
			
			echo "1";
		
		}else{
		
			echo "0";
		}
?>