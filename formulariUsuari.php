<?php
session_start();

    $cone = new mysqli("localhost", "root" ,"","projecte");

			
    $usu = $_POST['nom'];
    $pass = $_POST['pw'];
    $lasql = "select * from usuari where Usuari = '$usu'";
    $cons = $cone->query($lasql);
    $reg = $cons->fetch_array();
    if (isset($cons)&&($reg['Password']==$pass)) {
            $_SESSION['id'] = $reg['Id'];
            $_SESSION['usu'] = $usu;
            
            
// $_SESSION['idioma'] mirar kina te aket usuari            

            echo "1";

    }else{

            echo "0";
    }
?>