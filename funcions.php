<?php
    session_start();
    
	function cone(){
		$conec = new mysqli("localhost", "root", "", "projecte");
		return $conec;
	
	}
 


    function getPregunta($nivell){
		$conec= cone();
		
        $sql = "select * from preguntes where nivell_pregunta =".$nivell;
        $consulta = $conec->query($sql);
        $random = rand(0,3);

        $consulta->data_seek($random);
        $reg = $consulta->fetch_array();
        $pregunta_final = $reg['pregunta'];
	$id_pregutna = $reg['id_pregunta'];	
	
        $sql = "select * from respostes where fk_pregunta = 1";//.$id_pregutna;
        
        $consulta = $conec->query($sql);
        
        while($reg = $consulta->fetch_array()){
            $pregunta_final.="#".$reg['correcte']."#".$reg['resposta'];
        }
        
        return $pregunta_final;
    }

    function getRespostes(){
        
    }













?>