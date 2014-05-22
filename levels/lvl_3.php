
<html>
<head>
        <meta charset="utf-8" />
        <?php
            require_once 'headlvls.php';
            require_once '../funcions.php';
            require_once '../animacio_perdre_vida_'.$_SESSION['idioma'].'.php';
            require_once '../animacio_correcte_'.$_SESSION['idioma'].'.php';
            require_once '../animacio_comodin.php';
            require_once '../llibreria_'.$_SESSION["idioma"].'.php';
        ?>
        <script src="../js/nivel3.js"></script>
</head>


<body id="container" class="<?php echo $_SESSION['estil']; ?>" >
       <div id="plantilla">
            <div id="tiempo1" style="float:right;"></div>
            <div id="portada" class="no_portada">
                <span class="nivel_pantalla">3</span>
                <span ><?php  echo $l3_tit; ?></span>
            </div>
     
            <div id="marcadores" style="width:100%; height: 47%; margin-left: 5%;">
                <ul style="list-style: none outside none;">
                    <li class="bt1" name="no" style="float: left;display: block; width: 44%;height: 50%;">
                        <div class="respuesta" >
                            <span class="size"><?php echo $l31; ?></span>     
                        </div>
                    </li>
                    <li class="bt2" name="no" style="float: left;display: block; width: 50%;height: 50%;">
                        <div class="respuesta" style="width: 86%;">
                            <span class="size"><?php echo $l32; ?></span>
                        </div>
                    </li>
                </ul>
                <ul style="list-style: none outside none;">
                    <li class="bt3" name="no" style="float: left;display: block; width: 44%;height: 50%;">
                        <div class="respuesta" >
                            <span class="size" style="font-size:40pt;"><?php echo $l33; ?></span>
         

                        </div>
                    </li>
                    
                    <li class="bt4" name="no" style="float: left;display: block; width: 50%;height: 50%;">
                        <div class="respuesta">
                            <span class="size"><?php echo $l34; ?></span>
                         
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
<input type="text" value="3" id="getLvl" />
<input type="text" value="<?php echo $_SESSION['vides'];?>" class="cHiden" id="videsbd" />
<input type="text" value="<?php echo $_SESSION['comodins']; ?>" class="cHiden" id="getComodins" />
<input type="text" value="<?php echo $_SESSION['sound']; ?>" class="cHiden" id="getSound" />
<?php $_SESSION['puntuacio'] = 200; ?>
</body>

</html>