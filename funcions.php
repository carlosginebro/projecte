<?php
    session_start();
    
   
    
    function getPregunta($nivell){
		$conec = new mysqli("localhost", "root", "", "projecte");
		
        $sql = "select * from preguntes where nivell_pregunta =".$nivell;
        $consulta = $conec->query($sql);
        $random = rand(0,3);
        //var_dump($random);
		$consulta->data_seek($random);
        $reg = $consulta->fetch_array();
		$pregunta_final = $reg['pregunta'];
		
		
        return $pregunta_final;
    }














?>