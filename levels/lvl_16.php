
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
        <span id="feli16"><?php echo $l16_1; ?></span>
        <span id="puntuacio16">2500p</span>
        <div id="msg16"><?php echo $l16_2; echo $_SESSION['usu']; ?></div>
        <input type='button' id="return16" class='bt_final' value='<?php echo $l16_3; ?>'/>
    </div>
    <?php 
        $_SESSION['puntuacio'] = 2500;
        $conec = new mysqli("localhost", "root", "", "projecte");
        $puntuacio = $_SESSION['puntuacio'];
        $id = $_SESSION['id'];

        $sql = "update usuari Set PuntuacioMax = $puntuacio where Id = $id";
        $conec->query($sql);
    ?>
</body>