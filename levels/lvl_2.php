<html>
<head>
       <meta charset="ISO-8859-15" />
        <?php
            require_once 'headlvls.php';
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
                
            </div>
     
            <div id="marcadores" style="width:100%; height: 47%; margin-left: 5%;">
                <ul style="list-style: none outside none;">
                    <li class="bt1" name="no" style="float: left;display: block; width: 44%;height: 50%;">
                        <div class="respuesta" >
                            <span class="size">Mala</span>     
                        </div>
                    </li>
                    <li class="bt2" name="si" style="float: left;display: block; width: 50%;height: 50%;">
                        <div class="respuesta" style="width: 86%;">
                            <span class="size">Buena <span style='font-family:arial !important'>2</span></span>
                        </div>
                    </li>
                </ul>
                <ul style="list-style: none outside none;">
                    <li class="bt3" name="no" style="float: left;display: block; width: 44%;height: 50%;">
                        <div class="respuesta" >
                            <span class="size">Respuesta 3 de la 2</span>
         

                        </div>
                    </li>
                    
                    <li class="bt4" name="no" style="float: left;display: block; width: 50%;height: 50%;">
                        <div class="respuesta">
                            <span class="size">Rsdfsdf 4</span>
                         
                        </div>
                    </li>
                 
                </ul>
           
            </div>
            <div id="vidas">
                <div id="vidas_icons" class="icono_vidas0">
                  
                   
                </div>
            </div>
                
            </div>
<input type="text" value="2" id="getLvl" />


</body>

</html>