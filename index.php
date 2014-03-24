<?php
	session_start();
	if (isset($_GET['tanca'])||isset($_GET['reinicia'])){
		unset($_SESSION);
		session_destroy();
	}
	//require('prova.php');
	
	
?>
<html>
    <head>
        <meta charset="ISO-8859-15" />
        <link rel="stylesheet" type="text/css" src="css/jquery-ui.css" />
        <script language="javascript" src="js/jquery-1.10.2.js"></script>
        <script language="javascript" src="js/jquery-ui.js"></script>
        <script language="javascript" src="js/jquery.circulate.js"></script>
        <!--<script language="javascript" src="js/jquery.easing.1.2.js"></script>-->       
        <script language="javascript" src="js/bootstrap.js"></script>
        <script src="js/imposiblequiz.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css" />  
        <link rel="stylesheet" type="text/css" href="css/clean.css" /> 
        <link rel="stylesheet" type="text/css" href="css/imposiblequiz.css" />


    </head>
    <body>

        
        <img src="css/galery/luna.png" id="luna"/>
        <img src="css/galery/tierra.png" id="tierra"/>
        <img src="css/galery/urano.png" id="urano"/>
        <img src="css/galery/marte.png" id="marte"/>
        <img src="css/galery/jupiter.png" id="jupiter"/>
        <img src="css/galery/saturno.png" id="saturno"/>
        
<div id="test">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    
    <fieldset>
	
	<ul>
		<li>
			<label for="nom">Nom d'usuari</label>
                </li>
                <li>
			<input type="text"  id="NomForm" name="nom"  />
		</li>
		<li>
			<label>Contrasenya</label>
                </li>
                <li>
			<input type="password" id="PwForm" name="pw"  />
		</li>
	</ul>
	<p>
		<input type="button" class="btn" value="Acceptar" id="BtForm" />
	</p>
	</fieldset>
</form>
</div>
<audio id="mysoundclip" preload="auto">
    <source src="http://www.wav-sounds.com/cartoon/bugsbunny1.wav"></source>
</audio>

</body>
</html>