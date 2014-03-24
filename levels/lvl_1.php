<html>
<head>
    
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
        <table cellspacing="0" id="marcadores" >
            <tr>
                <td id="bt1" name="si">
                    <div class="respuesta" >
                        VENGAA!!     
                    </div>
                </td>
                <td id="bt2" name="pasar_nivel">
                    <div class="respuesta">
                       
                    </div>
                </td>
            </tr>
            <tr>
                <td id="bt3" name="no">
                    <div class="respuesta">
                       

                    </div>
                </td>
                <td id="bt4" name="no">
                    <div class="respuesta">
                        


                    </div>
                </td>
            </tr>
        </table>
        <div id="vidas">
            <div id="vidas_icons" class="icono_vidas0">


            </div>
        </div>

    </div>
</div>



</body>

</html>