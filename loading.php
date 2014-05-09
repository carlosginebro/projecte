<?php
    session_start();
?>
<html>
    <head>
        <meta charset="ISO-8859-15" />
        <?php
            require_once 'head.php';
        ?>


    </head>
    <?php
        require_once 'llibreria_'.$_SESSION["idioma"].'.php';
    ?>
    <body>
       
        <div id="plantilla" style="background-image: url('css/galery/fondo-loading.png'); display: none;">
            <div class="load"></div>
            <div class="load1"></div>
            <span id="cargando"><?php echo $load; ?></span>
            <div id="loading" style="display:none;"></div>
        </div>
    </body>
</html>