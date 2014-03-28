<?php

    $cone = new mysqli("localhost", "root" ,"","projecte");
    
    $mail = $_POST['mail'];
    $recovery = $_POST['recovery'];
    
    $sql ="select RecoveryName from usuari u inner join mail m on u.id = m.id_usu where mail ='$mail'";
    $cons = $cone->query($sql);
    $reg = $cons->fetch_array();
    if (isset($cons)&&($reg['RecoveryName']==$recovery)) {
        
       $sql ="select Usuari, Password from usuari where RecoveryName = '$recovery'";
       $cons = $cone->query($sql);
       $reg = $cons->fetch_array();
       
       
 
        echo "$reg[Usuari], $reg[Password]";
    }else{
        echo '0';
    }
    






?>