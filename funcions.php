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
        $pregunta_final = $reg['pregunta_ca'];
	$id_pregunta = $reg['id_pregunta'];	
	
        $sql = "select * from respostes where fk_pregunta = $id_pregunta";
        
        $consulta = $conec->query($sql);
        $respostes = array();
        $cont = 0;
        
        while($reg = $consulta->fetch_array()){
            $respostes[$cont]="#".$reg['correcte']."#".$reg['resposta_ca'];
            $cont++;
//            $pregunta_final.="#".$reg['correcte']."#".$reg['resposta'];
        }
        
        $keys = array_keys($respostes);

        shuffle($keys);
        
        foreach($keys as $key) {
            $new[$key] = $respostes[$key];
        }
        
        $respostes = $new;
        
        $respostesMezcladas = shuffle($respostes);
     
        for($i = 0, $size = count($respostes); $i < $size; $i++){
              $pregunta_final.=$respostes[$i];
        }

        return $pregunta_final;
    }

//    function getRespostes(){
//        
//    }













?>