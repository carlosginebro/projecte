<?php
    sesion_start();
    
    $conec = new mysqli("localhost", "root", "", "projecte");
    
    function getPregunta($nivell){
        $sql = "select pregunta from preguntes where nivell_pregunta =".$nivell;
        $consulta = $conec->query($sql);
        $random = rand(0,4);
        var_dump($random);
        $pregunta_final = mysqli_data_seek($consulta, $random);
        
        return $pregunta_final;
    }














?>