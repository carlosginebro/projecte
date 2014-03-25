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
        <?php
            require_once 'head.php';
        ?>


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