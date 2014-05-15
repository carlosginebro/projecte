<?php
    session_start();
?>
<html>
    <head>
        <meta charset="utf-8" />
         <?php
            require_once 'head.php';
            
        ?>
    </head>
    <?php
        require_once 'llibreria_'.$_SESSION["idioma"].'.php';
    ?>
    <body id="container" >
        <div id="telon" style=" display:block; position: absolute; z-index: 30;  background-color: white; border: solid 8px #ffd; border-radius:4px; width:100%; height:100%; margin:0 0; box-shadow: inset 0px 0px 40px #F7F8CE, 0px 0px 40px #ff0">
            
        </div>
        <div id='plantilla' style="background-image: url('css/galery/gameove3r.jpg'); display:block; width:100%; height:100%; margin:0 0; background-repeat: no-repeat; background-size: 100% 100%;">
            <span id="try_again" class="css_gameover"><?php echo $gameover1; ?></span>
            <span id="sortir_game" class="css_gameover"><?php echo $gameover2; ?></span>  
        </div>
    </body>
</html>