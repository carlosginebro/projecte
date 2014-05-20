<html>
<head>
       <meta charset="ISO-8859-15" />
        <?php
            require_once 'headlvls.php';
            require_once '../funcions.php';
            require_once '../animacio_perdre_vida_'.$_SESSION['idioma'].'.php';
            require_once '../animacio_correcte_'.$_SESSION['idioma'].'.php';
            require_once '../animacio_comodin.php';
        ?>
       <script src="../js/nivel6.js"></script>
</head>

<body id="container" class="<?php echo $_SESSION['estil']; ?>" >
       <div id="plantilla">
            <div id="portada" class="no_portada">
                <span class="nivel_pantalla" name="si6" style="cursor: url('../css/cursor/BGLink.cur'), pointer;">6</span>
                <div id="tiempo3" style="float:right;"></div>
                <span >9 * 5 - (4 * 10) + 1  =</span>
            </div>
     
            <div id="marcadores" style="width:100%; height: 47%; margin-left: 5%;">
                <ul style="list-style: none outside none;">
                    <li class="bt1" name="no" style="float: left;display: block; width: 44%;height: 50%;">
                        <div class="respuesta" >
                            <span class="size">7</span>     
                        </div>
                    </li>
                    <li class="bt2" name="no" style="float: left;display: block; width: 50%;height: 50%;">
                        <div class="respuesta" style="width: 86%;">
                            <span class="size">4</span>
                        </div>
                    </li>
                </ul>
                <ul style="list-style: none outside none;">
                    <li class="bt3" name="no" style="float: left;display: block; width: 44%;height: 50%;">
                        <div class="respuesta" >
                            <span class="size">5,9</span>
         

                        </div>
                    </li>
                    
                    <li class="bt4" name="no" style="float: left;display: block; width: 50%;height: 50%;">
                        <div class="respuesta">
                            <span class="size">8</span>
                         
                        </div>
                    </li>
                 
                </ul>
           
            </div>
            <div id="vidas">
                <div id="logo_icons_<?php echo $_SESSION['idioma'];?>"></div>
                <div id="vidas_icons" class="icono_vidas<?php echo $_SESSION['comodins']; ?>"></div>
                <div id="logo_vides_<?php echo $_SESSION['idioma'];?>"></div>
                <div id="vidas_rest" class="cVidas_rest<?php echo $_SESSION['vides']; ?>"></div>
            </div>
                
            </div>
<input type="text" value="6" id="getLvl" />
<input type="text" value="<?php echo $_SESSION['vides'];?>" class="cHiden" id="videsbd" />
<input type="text" value="<?php echo $_SESSION['comodins']; ?>" class="cHiden" id="getComodins" />
<input type="text" value="<?php echo $_SESSION['sound']; ?>" class="cHiden" id="getSound" />

</body>

</html>