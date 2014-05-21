
<?php

    $host = 'localhost';
    $usu = 'root';
    $contra = '';
    $bd = 'projecte';
    $cone = new mysqli($host, $usu, $contra, $bd);

    $usu = $_GET['usu'];

    $sql = "update usuari set Activat = 1 where Usuari = '$usu'";
    $cone->query($sql);

?>

<html>
    <head>
        <?php
            require_once 'head.php';
        ?>
        <meta charset="utf-8">
    </head>
    <body>
        <div id="plantilla">
            <div id="act_usu">
            <span>L'usuari <?php echo $usu;?> ha sigut activat.</span>
            <br/>
            <span>Fes click en <a target="_blank" href='../projecte/'>Crazy Univers</a> per començar a jugar!!</span>
            </div>
        </div>
    </body>
</html>