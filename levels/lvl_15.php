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
        <div id="margenizk" style="width:409px; height:666px; position: absolute; z-index: -1;  top:0; left: 0;"></div>
        <div id="margender" style="width:408px; height:663px; position: absolute; z-index: -1;  top:0; left: 70%;"></div>
        <div id="d151" class="cHiden" style="margin-top: 200px; text-align: center;"><span class="span15"><?php echo $l15_1; ?></span></div>
        <div id="d152" class="cHiden" style="margin-top: 80px; text-align: center;"><span class="span15"><?php echo $l15_2; ?></span></div>
        <div id="d153" class="cHiden" style="margin-top: 360px; text-align: center;"><span class="span15"><?php echo $l15_3; ?></span></div>
        <div id="d154" class="cHiden" style="margin-top: 240px; text-align: center;"><span class="span15"><?php echo $l15_4; ?></span></div>
        <input type="button" id="bt15" class="cHiden bt_jocs_nivells" value="SI!" style="cursor: url('../css/cursor/BGLink.cur'), pointer; margin-top: 25%; margin-left: 30%;"/>
        <div id="d15temps" class="cHiden"></div>
        <div id="punts15" class="cHiden"><span id='asteroide2'>0</span></div>
         
    </div>
    <input type="text" value="15" id="getLvl" />
</body >
</html>