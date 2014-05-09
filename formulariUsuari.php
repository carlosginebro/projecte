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
            $id = $_SESSION['id'];
            $sql = "select idioma from idioma where fk_usuari = ".$id;
            $cons = $cone->query($sql);
            $reg = $cons->fetch_array();
            $_SESSION['idioma'] = $reg['idioma'];
// $_SESSION['idioma'] mirar kina te aket usuari            

            echo "1";

    }else{

            echo "0";
    }
?>