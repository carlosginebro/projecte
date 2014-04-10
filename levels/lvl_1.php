<html>
<head>
       <meta charset="ISO-8859-15" />
        <?php
            require_once 'headlvls.php';
            require_once '../funcions.php';
            
            
            
            
            
            
            $pregunta = getPregunta(1);
            
            $arrayPregunta = explode("#", $pregunta);
        ?>
</head>
<?php
if (isset($_POST['interface'])) {
    $estilo = $_POST['interface'];
} else {
    $estilo = 'normal';
}
?>

<body id="container" class="<?php echo $estilo ?>" >
       <div id="plantilla">
            <div id="portada">
                <span style="font-family:'Arial';"><?php echo $arrayPregunta[0]; ?></span>
            </div>
     
            <div id="marcadores" style="width:100%; height: 47%; margin-left: 5%;">
                <ul style="list-style: none outside none;">
                    <li class="bt1" name="<?php echo $arrayPregunta[1]; ?>" style="float: left;display: block; width: 44%;height: 50%;">
                        <div class="respuesta" >
                            <span class="size"><?php echo $arrayPregunta[2]; ?></span>     
                        </div>
                    </li>
                    <li class="bt2" name="<?php echo $arrayPregunta[3]; ?>" style="float: left;display: block; width: 50%;height: 50%;">
                        <div class="respuesta" style="width: 86%;">
                            <span class="size"><?php echo $arrayPregunta[4]; ?></span>
                        </div>
                    </li>
                </ul>
                <ul style="list-style: none outside none;">
                    <li class="bt3" name="<?php echo $arrayPregunta[5]; ?>" style="float: left;display: block; width: 44%;height: 50%;">
                        <div class="respuesta" >
                            <span class="size"><?php echo $arrayPregunta[6]; ?></span>
         

                        </div>
                    </li>
                    
                    <li class="bt4" name="<?php echo $arrayPregunta[7]; ?>" style="float: left;display: block; width: 50%;height: 50%;">
                        <div class="respuesta">
                            <span class="size"><?php echo $arrayPregunta[8]; ?></span>
                         
                        </div>
                    </li>
                 
                </ul>
           
            </div>
            <div id="vidas">
                <div id="vidas_icons" class="icono_vidas0">
                  
                   
                </div>
            </div>
                
            </div>
<input type="text" value="1" id="getLvl" />


</body>

</html>