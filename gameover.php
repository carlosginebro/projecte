<?php
    session_start();
?>
<html>
    <head>
         <?php
            require_once 'head.php';
            
        ?>
    </head>
    <?php
        require_once 'llibreria_'.$_SESSION["idioma"].'.php';
    ?>
    <body id="container" >
        <div id='plantilla' style="background-image: url('css/galery/gameover.jpg'); display:block; width:100%; height:100%; margin:0 0; background-repeat: no-repeat; background-size: 100% 100%;">
            <span id="try_again" class="css_gameover"><?php echo $gameover1; ?></span>
            <span id="sortir_game" class="css_gameover"><?php echo $gameover2; ?></span>  
        </div>
    </body>
</html>