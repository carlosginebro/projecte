<?php  
    header('Content-Type: text/html; charset=utf-8');

    $obj = json_decode(utf8_encode($_POST["json"]));

    $host = 'localhost';
        $usu = 'root';
        $contra = '';
        $bd = 'projecte';
        $cone = new mysqli($host, $usu, $contra, $bd);

    if($obj != null){
        
        $vides = $obj->{'usuari'}; 
        $id = $obj->{'password'};
        
        
        $sql = "update usuari set Vides = $vides where Id = $id";
        
        $cone->query($sql);
        
        mysqli_close($cone);
  
        echo "1";
        
    }
    
    
    
    
?>