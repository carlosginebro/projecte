<html>
<head>
        <meta charset="ISO-8859-15" />
        <?php
            require_once 'headlvls.php';
            require_once '../funcions.php';
            require_once '../animacio_perdre_vida.php';
            require_once '../animacio_correcte.php';
            require_once '../animacio_comodin.php';
            $pregunta = getPregunta(3);
            
            $arrayPregunta = explode("#", $pregunta);
        ?>
</head>

<body id="container" class="<?php echo $_SESSION['estil']; ?>" >
       <div id="plantilla">
            <div id="portada" class="no_portada">
                <span class="nivel_pantalla">5</span>
                <span ><?php echo $arrayPregunta[0]; ?></span>
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
                <div id="logo_icons"></div>
                <div id="vidas_icons" class="icono_vidas<?php echo $_SESSION['comodins']; ?>"></div>
                <div id="logo_vides"></div>
                <div id="vidas_rest" class="cVidas_rest<?php echo $_SESSION['vides']; ?>"></div>
            </div>
                
            </div>
<input type="text" value="5" id="getLvl" />
<input type="text" value="<?php echo $_SESSION['vides'];?>" class="cHiden" id="videsbd" />
<input type="text" value="<?php echo $_SESSION['comodins']; ?>" class="cHiden" id="getComodins" />
</body>

</html>