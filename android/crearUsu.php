<?php  
    header('Content-Type: text/html; charset=utf-8');

    $obj = json_decode(utf8_encode($_POST["json"]));

    $host = 'localhost';
        $usu = 'root';
        $contra = '';
        $bd = 'projecte';
        $cone = new mysqli($host, $usu, $contra, $bd);

    if($obj != null){
        
        $u = $obj->{'usuari'};
        $p = $obj->{'password'};
        $m = $obj->{'mail'};
        
        $sql = "select Id from usuari where Usuari = '$u'";
        $consulta = $cone->query($sql);
        
        if ($reg = $consulta->fetch_array()){
            echo "0"; //Usuari amb el mateix nom ja creat
        }else{
            
            
            
            
            $recovery = "";
            
            $recovery .= strlen($u);
            $recovery .= strlen($p);
            $recovery .= strlen($m);
            $recovery .= substr($u, 0, 1);
            $recovery .= substr($m, 0, 2);
            
            $sql = "insert into usuari(Usuari, Password, RecoveryName, Vides, Comodins, PuntuacioMax, Admin) values ('$u', '$p', '$recovery', 3, 0, 0, 0)";
        
            $cone->query($sql);
            
            $sql = "select Id from usuari where Usuari = '$u'";
            $consulta = $cone->query($sql);
            $reg = $consulta->fetch_array();
            $id = $reg['Id'];
            
            $sql = "insert into mail (id_usu, mail) values ($id, '$m')";
            $cone->query($sql);
            
            $sql = "insert into idioma (idioma, fk_usuari) values ('ca', $id)";
            $cone->query($sql);
            
            $sql = "insert into estils (estil, fk_usuari) values ('normal', $id)";
            $cone->query($sql);
            
            mysqli_close($cone);
            
            include("mail.php");
            
            echo "1";
        }
        
    }
        


       
 
	

   
?>