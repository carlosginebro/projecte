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
        <meta charset="utf-8" />
        <?php
            require_once 'head.php';
        ?>


    </head>
    <body>
        <div id ="logo_index"></div>
        
        <img src="css/galery/luna.png" id="luna"/>
        <img src="css/galery/tierra.png" id="tierra"/>
        <img src="css/galery/urano.png" id="urano"/>
        <img src="css/galery/marte.png" id="marte"/>
        <img src="css/galery/jupiter.png" id="jupiter"/>
        <img src="css/galery/saturno.png" id="saturno"/>
        
<div id="test">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="form_entrada">
    
    <fieldset>
	
	<ul>
		<li>
			<label>Nom d'usuari</label>
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
            <span  id="recovery">Recuperar Contrasenya</span>
            <br/>
            <br/>

            <span><input type="checkbox" id="recordar" /> Recorda </span>
            <br/>
            <br/>
            
		<input type="button" class="btn" value="Acceptar" id="BtForm" />
	</p>
	</fieldset>
</form>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="form_recovery">
    
    <fieldset>
	
	<ul>
		<li>
			<label>Correu Electrònic</label>
                </li>
                <li>
			<input type="text"  id="MailForm" name="nom"  />
		</li>
		<li>
			<label>Recovery Key</label>
                </li>
                <li>
                        
			<input type="text" id="RecoveryForm" name="pw"  />
		</li>
	</ul>
	<p>
                 <span  id="back_recovery">Formulari d'entrada</span>
                <br/>
		<input type="button" class="btn" value="Acceptar" id="BtRecoveryAjax" />
	</p>
	</fieldset>
</form>
</div>
<audio id="mysoundclip" preload="auto">
    <source src="http://www.wav-sounds.com/cartoon/bugsbunny1.wav"></source>
</audio>

</body>
</html>