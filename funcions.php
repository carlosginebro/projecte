<?php
    session_start();
    
    $conec = new mysqli("localhost", "root", "", "projecte");
    global $conec;
    function getPregunta($nivell){
		
		
        $sql = "select * from preguntes where nivell_pregunta =".$nivell;
        $consulta = $conec->query($sql);
        $random = rand(0,3);

        $consulta->data_seek($random);
        $reg = $consulta->fetch_array();
        $pregunta_final = $reg['pregunta'];
	$id_pregutna = $reg['id_pregunta'];	
	
        $sql = "select * from respostes where fk_pregunta = 1 order by correcte";//.$id_pregutna;
        
        $consulta = $conec->query($sql);
        
        while($reg = $cosulta->fetch_array()){
            $pregunta_final.="#".$reg['pregunta'];
        }
        
        return $pregunta_final;
    }

    function getRespostes(){
        
    }













?>