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
<body id="container" class="<?php echo $_SESSION['estil']; ?>">
    <div id="delay_meteorito2"></div>
    <div id="delay_meteorito3"></div>
    <div id="delay_meteorito4"></div>
        
        
    <div id="plantilla" style="color: black !important;">
        <div id="d151" class="cHiden"><span>Hola</span></div>
        <div id="d152" class="cHiden"><span>que </span></div>
        <div id="d153" class="cHiden"><span>ase</span></div>
        <div id="d154" class="cHiden"><span>noob</span></div>
        <input type="button" id="bt15" class="cHiden" value="SI!"/>
         <div id="d15temps" class="cHiden"><span>15</span></div>
         <div id="msgfinal" class="cHiden"><span>BIEEEEN</span></div>
         
    </div>
</body >
</html>