<html>
<head>
       <meta charset="utf-8" />
        <?php
            require_once 'headlvls.php';
            require_once '../funcions.php';
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
            <div id="portada" class="no_portada">
                <span class="nivel_pantalla">3</span>
                <span >Fes clic sobre <span name="si">el més gran</span>.</span>
            </div>
     
            <div id="marcadores" style="width:100%; height: 47%; margin-left: 5%;">
                <ul style="list-style: none outside none;">
                    <li class="bt1" name="no" style="float: left;display: block; width: 44%;height: 50%;">
                        <div class="respuesta" >
                            <span class="size">Elefant</span>     
                        </div>
                    </li>
                    <li class="bt2" name="no" style="float: left;display: block; width: 50%;height: 50%;">
                        <div class="respuesta" style="width: 86%;">
                            <span class="size">Gegant</span>
                        </div>
                    </li>
                </ul>
                <ul style="list-style: none outside none;">
                    <li class="bt3" name="no" style="float: left;display: block; width: 44%;height: 50%;">
                        <div class="respuesta" >
                            <span class="size" style="font-size:40pt;">Formiga</span>
         

                        </div>
                    </li>
                    
                    <li class="bt4" name="no" style="float: left;display: block; width: 50%;height: 50%;">
                        <div class="respuesta">
                            <span class="size">Leo Messi</span>
                         
                        </div>
                    </li>
                 
                </ul>
           
            </div>
            <div id="vidas">
                <div id="vidas_icons" class="icono_vidas0">
                  
                   
                </div>
            </div>
                
            </div>
<input type="text" value="3" id="getLvl" />


</body>

</html>