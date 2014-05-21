
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
       
        <script src="../js/nivel15.js"></script>
</head>
<body id="container">
    <div id="plantilla" class="win">
        <span id="feli16">FELICIDADES!!</span>

        <div id="msg16"><span>Has conseguido acabar Crazy Univers!!</span><br /><br /><span> Muchas felicidades <?php echo $_SESSION['usu']; ?></span></div>
        <input type='button' id="return16" class='bt_final' value='Inicio'/>
    </div>
    
</body>