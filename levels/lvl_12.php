<?php
session_start();
if($_SESSION['lvlactual']!=12){
?>
<script>
    document.location = "lvl_11.php";
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
        ?>
       
       <script src="../js/nivel12.js"></script>
	   <style>
		.img{
			cursor : none !important ;
		}
		
		.img2{
			cursor : pointer ;
		}
		
		#lab{
			display: none;
		}
		
		
	</style>
</head>

<body id="container" class="<?php echo $_SESSION['estil']; ?>">


<div id="plantilla">
            <div id="portadalaberinto" class="no_portada">
                <span class="nivel_pantalla">12</span>
                <span style="font-size: 22pt;"><?php echo $l12_tit; ?></span>
            </div>
	<!-- -->
            <div id="marcadores" style="width:100%; height: 64%; margin-left: 35%;">
				<div id="ratoli">
					<img src ="../css/galery/raton.jpg" alt="raton"   onmouseover="ratoli()" />
			</div>
			<div id="test4">

</div>			
			<div id="lab">
					<img src ="../css/galery/labfacil.jpg" alt="labFacil"   usemap="#laberinto" />		
			</div>
				<map name="laberinto">
					<area shape="rect" coords="52,31,8,3" onmouseover="comensalvl()" />
					
					<div id="porv">
					
					</div>
					
					<area shape="rect" coords="260,231,299,230" onmouseover="linia()"  />
					<area shape="rect" coords="299,231,297,286" onmouseover="linia()"  />
					<area shape="rect" coords="298,284,259,287" onmouseover="linia()"  />
					<area shape="rect" coords="260,235,299,287" onmouseover="conseguit()"  />					
				</map>
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
<input type="text" value="<?php echo $_SESSION['lvlactual']; ?>" class="cHiden" id="getLvlAct" />
<?php $_SESSION['puntuacio'] = 1500; ?>
</body>
</html>
<?php
}
?>