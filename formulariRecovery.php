<?php

    $cone = new mysqli("localhost", "root" ,"","projecte");
    
    $email = $_POST['mail'];
    $recovery = $_POST['recovery'];
    
    $sql ="select RecoveryName from usuari u inner join mail m on u.id = m.id_usu where mail ='$email'";
    $cons = $cone->query($sql);
    $reg = $cons->fetch_array();
    if (isset($cons)&&($reg['RecoveryName']==$recovery)) {
        
       $sql ="select Usuari, Password from usuari where RecoveryName = '$recovery'";
       $cons = $cone->query($sql);
       $reg = $cons->fetch_array();
       
       $u = $reg['Usuari'];
	   $p= $reg['Password'];
 
	include("mail.php");
	
	
        echo "Nom Usuari: $reg[Usuari] </br>Password: $reg[Password]";
    }else{
        echo '0';
    }
    






?>