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
        
        $sql = "select Id from usuari where Usuari = '$u'";
    
        $consulta = $cone->query($sql);
    
        if($reg = $consulta->fetch_array()){
             $sql = "select * from usuari where Usuari = '$u'";
        
             $consulta = $cone->query($sql);
             $reg = $consulta->fetch_array();
            
            if($reg['Password'] == $p){
                
                $id = $reg['Id'];
                $mp = $reg['PuntuacioMax'];
                $vides = $reg['Vides'];
                $comodins = $reg['Comodins'];
                echo "id/$id/$mp/$vides/$comodins";
                
            }else{
                
                echo "1";//no es la password correcta
                
            }       
        
        }else{

            echo "0";//usuari no existe

        }
}