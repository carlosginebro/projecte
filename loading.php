<?php
    session_start();
?>
<html>
    <head>
        <meta charset="ISO-8859-15" />
         
        <?php
            
            require_once 'head.php';
            
        ?>
       <script language="javascript" src="js/loading.js"></script>

    </head>
    <?php
        require_once 'llibreria_'.$_SESSION["idioma"].'.php';
    ?>
    <body>
       
        <div id="plantilla" style="background-image: url('css/galery/fondo-loading.png'); display: none;">
            <div class="load"></div>
            <div class="load1"></div>
            <span id="cargando"></span>
            <div id="loading" style="display:none;"></div>
           
        </div>
         <div id="getLoad" class="cHiden"><?php echo $load; ?></div>
         <div id="ex" class="cHiden"></div>
    </body>
</html>