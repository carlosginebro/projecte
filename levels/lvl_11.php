<?php
session_start();
if($_SESSION['lvlactual']!=11){
?>
<script>
    document.location = "lvl_10.php";
</script>

<?php
}else{
    

?>
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
            $pregunta = getPregunta(5);
            
            $arrayPregunta = explode("#", $pregunta);
        ?>
</head>

<body id="container" class="<?php echo $_SESSION['estil']; ?>" >
       <div id="plantilla">
            <div id="portada" class="no_portadalogica">
                <span class="nivel_pantalla">11</span>
						
                <span ><?php echo $l8_tit; ?><img src="<?php echo $arrayPregunta[0]; ?>" alt="preg1" class="preguntalogica" /></span>
            </div>
     
            <div id="marcadores" style="width:100%; height: 47%; margin-left: 5%;">
                <ul style="list-style: none outside none;">
                    <li class="bt1" name="<?php echo $arrayPregunta[1]; ?>" style="float: left;display: block; width: 44%;height: 50%;">
                        <div class="respuestalogica" >
                            <span class="size"> <img src="<?php echo $arrayPregunta[2]; ?>" /></span>     
                        </div>
                    </li>
                    <li class="bt2" name="<?php echo $arrayPregunta[3]; ?>" style="float: left;display: block; width: 50%;height: 50%;">
                        <div class="respuestalogica" style="width: 86%;">
                            <span class="size"><img src="<?php echo $arrayPregunta[4]; ?>" /> </span>
                        </div>
                    </li>
                </ul>
                <ul style="list-style: none outside none;">
                    <li class="bt3" name="<?php echo $arrayPregunta[5]; ?>" style="float: left;display: block; width: 44%;height: 50%;">
                        <div class="respuestalogica" >
                            <span class="size"><img src="<?php echo $arrayPregunta[6]; ?>" /> </span>
         

                        </div>
                    </li>
                    
                    <li class="bt4" name="<?php echo $arrayPregunta[7]; ?>" style="float: left;display: block; width: 50%;height: 50%;">
                        <div class="respuestalogica">
                            <span class="size"><img src="<?php echo $arrayPregunta[8]; ?>" /></span>
                         
                        </div>
                    </li>
                 
                </ul>
           
            </div>
            <div id="vidaslogic">
                <div id="logo_icons_<?php echo $_SESSION['idioma'];?>"></div>
                <div id="vidas_icons" class="icono_vidas<?php echo $_SESSION['comodins']; ?>"></div>
                <div id="logo_vides_<?php echo $_SESSION['idioma'];?>"></div>
                <div id="vidas_rest" class="cVidas_rest<?php echo $_SESSION['vides']; ?>"></div>
            </div>
                
            </div>
<input type="text" value="11" id="getLvl" />
<input type="text" value="<?php echo $_SESSION['vides'];?>" class="cHiden" id="videsbd" />
<input type="text" value="<?php echo $_SESSION['comodins']; ?>" class="cHiden" id="getComodins" />
<input type="text" value="<?php echo $_SESSION['sound']; ?>" class="cHiden" id="getSound" />
<input type="text" value="<?php echo $_SESSION['lvlactual']; ?>" class="cHiden" id="getLvlAct" />
<?php $_SESSION['puntuacio'] = 1350; ?>
</body>

</html>
<?php
}
?>