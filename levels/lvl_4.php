<html>
<head>
       <meta charset="utf-8" />
        <?php
            require_once 'headlvls.php';
            require_once '../funcions.php';
            require_once '../animacio_correcte.php';
        ?>
       <script src="../js/nivel4.js"></script>
	   <style>
		   #jugador{
				color:white;
				font-size: 20pt;
		   }
		   
		   #asteroide{
				color:white;
				font-size: 20pt;
		   }
		   
		   table{
			color: white;
			font-size: 20pt;
		   }
		   
		   td{
		   
		   }
	   </style>
</head>

<body id="container" style="overflow:hidden;" class="<?php echo $_SESSION['estil']; ?>" >
	<table class='cHiden'>
		<tr>
			<td>Tu</td>
			<td colspan="2" width="20"> -</td>
			<td>Asteroide </td>
		</tr>
		<tr>
			<td><span id='jugador'>0</span></td>
			<td colspan="2"> - </td>
			<td><span id='asteroide'>0</span></td>
		</tr>
		
	</table>
   
   
       <div id="plantilla">
		   <div id="portada" class="no_portada">
					<span class="nivel_pantalla">4</span>
					<span> Has de salvar 20 planetes abans que l'asteroide els faci explotar! <br />Fes click sobre ell per salvar-lo!!!</span>
			</div>
			<div id="marcadores" style="text-align:center;">
				<input type="button" value="Començar!" class='bt_jocs_nivells' onclick="ComencaLvl4()"/> 
            </div>
       </div>
	   
	   
<input type="text" value="4" id="getLvl" />
<input type="text" value="<?php echo $_SESSION['vides'];?>" class="cHiden" id="videsbd" />

</body>

</html>