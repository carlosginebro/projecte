<html>
<head>
       <meta charset="utf-8" />
        <?php
            require_once 'headlvls.php';
            require_once '../funcions.php';
        ?>
       <script src="../js/nivel4.js"></script>
</head>
<?php
    if (isset($_POST['interface'])) {
        $estilo = $_POST['interface'];
    } else {
        $estilo = 'normal';
}
?>

<body id="container" style="overflow:hidden;" class="<?php echo $estilo ?>" >
    <span id='jugador'>0</span> 
    <span id='asteroide'>0</span>
       <div id="plantilla">
		   <div id="portada" class="no_portada">
					<span class="nivel_pantalla">4</span>
					<span> Has de salvar els planetes abans que l'asteroide els faci explota! <br />Fes click sobre ell per salvar-lo!!!</span>
			</div>
			<div id="marcadores" style="text-align:center;">
				<input type="button" value="Començar!" style="width:350px; height:100px; font-size:30pt;" onclick="ComencaLvl4()"/> 
            </div>
       </div>
	   
	   
<input type="text" value="4" id="getLvl" />

</body>

</html>