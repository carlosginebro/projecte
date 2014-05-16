<?php
session_start();

    $cone = new mysqli("localhost", "root" ,"","projecte");

			
    $usu = $_POST['nom'];

    
    $lasql = "select * from usuari where Usuari = '$usu'";
    $cons = $cone->query($lasql);
    $reg = $cons->fetch_array();
    
    if($reg['Recordar']==1){
    	$passwrd=$reg['Password'];
    	
    	echo $passwrd;
    }
         
     
            
?>