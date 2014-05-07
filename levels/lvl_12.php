<html>
<head>
        <meta charset="ISO-8859-15" />
        <?php
            require_once 'headlvls.php';
            require_once '../funcions.php';
            require_once '../animacio_correcte.php';
        ?>
       <script src="../js/nivel12.js"></script>
	   <style>
		img{
			cursor : none;
		}
		
		
	</style>
</head>

<body id="container" class="<?php echo $_SESSION['estil']; ?>">


<div id="plantilla">
            <div id="portadalaberinto" class="no_portada">
                <span class="nivel_pantalla">12</span>
                <span >Recull el Formatge sense tocar les parets!</span>
            </div>
	<!-- -->
            <div id="marcadores" style="width:100%; height: 64%; margin-left: 35%;">
                <img src ="../css/galery/labfacil.jpg" alt="labFacil" id="ima"usemap="#laberinto" />
				<map name="laberinto">
					<area shape="rect" coords="5,33,6,286" onmouseover="linia()" />
					<area shape="rect" coords="5,286,259,287" onmouseover="linia()" />
					<area shape="rect" coords="5,234,56,236" onmouseover="linia()" />
					<area shape="rect" coords="57,83,54,31" onmouseover="linia()" />
					<area shape="rect" coords="55,31,259,35" onmouseover="linia()" />
					<area shape="rect" coords="54,134,57,236" onmouseover="linia()" />
					<area shape="rect" coords="104,32,109,134" onmouseover="linia()" />
					<area shape="rect" coords="104,183,108,286" onmouseover="linia()" />
					<area shape="rect" coords="104,183,209,187" onmouseover="linia()" />
					<area shape="rect" coords="156,234,260,238" onmouseover="linia()" />
					<area shape="rect" coords="156,81,209,86" onmouseover="linia()" />
					<area shape="rect" coords="155,134,159,186" onmouseover="linia()" />
					<area shape="rect" coords="206,82,210,187" onmouseover="linia()" />
					<area shape="rect" coords="256,31,260,238" onmouseover="linia()" />				
				</map>
            </div>
            <div id="vidas">
                <div id="logo_icons"></div>
                <div id="vidas_icons" class="icono_vidas<?php echo $_SESSION['comodins']; ?>"></div>
                <div id="logo_vides"></div>
                <div id="vidas_rest" class="cVidas_rest<?php echo $_SESSION['vides']; ?>"></div>
            </div>
                
            </div>
<input type="text" value="3" id="getLvl" />
<input type="text" value="<?php echo $_SESSION['vides'];?>" class="cHiden" id="videsbd" />
<input type="text" value="<?php echo $_SESSION['comodins']; ?>" class="cHiden" id="getComodins" />

</body>
</html>