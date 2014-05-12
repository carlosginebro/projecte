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
       
       <script src="../js/nivel12.js"></script>
	   <style>
		
		
		#lvl13{
		
			background-image: url('../css/galery/casalvl13.jpg');
			background-size: cover;
		}
		
		
		#papeleraredonda {
			background-image: url('../css/galery/paperredonda.png');
			background-size: contain;
			width: 70px;
			height: 90px;
			margin-top: 400px;
			margin-left: 180px;
			position: absolute;
		}
		
		#papeleracuadrada {
			background-image: url('../css/galery/papecuadrada.png');
			background-size: contain;
			background-repeat: no-repeat;
			width: 70px;
			height: 90px;
			margin-top: 415px;
			margin-left: 600px;
			position: absolute;
		}
		
		
		#objecte{
		
			margin-top:  150px;
			margin-left: 400px;
			position: absolute;
		}
		
	</style>
</head>

<body id="container" class="<?php echo $_SESSION['estil']; ?>">


<div id="plantilla">
	<div id="lvl13">
	<div id="marcadores" style="width:100%; height: 90%; ">

			<div id="objecte">
				ezfdsaafdssssssssssssssssssssssss
			</div>

			<div id="papeleraredonda">
				
			</div>	
			<div id="papeleracuadrada">
				
			</div>
	
			
	</div>
	</div>
			
			
			
	<div id="vidas">
		<div id="logo_icons_<?php echo $_SESSION['idioma'];?>"></div>
		<div id="vidas_icons" class="icono_vidas<?php echo $_SESSION['comodins']; ?>"></div>
		<div id="logo_vides_<?php echo $_SESSION['idioma'];?>"></div>
		<div id="vidas_rest" class="cVidas_rest<?php echo $_SESSION['vides']; ?>"></div>
	</div>
                
</div>

<input type="text" value="12" id="getLvl" />
<input type="text" value="<?php echo $_SESSION['vides'];?>" class="cHiden" id="videsbd" />
<input type="text" value="<?php echo $_SESSION['comodins']; ?>" class="cHiden" id="getComodins" />
<input type="text" value="<?php echo $_SESSION['sound']; ?>" class="cHiden" id="getSound" />

</body>
</html>