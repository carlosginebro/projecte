<html>
<head>
        <meta charset="utf-8" />
        <?php
            require_once 'headlvls.php';
            require_once '../funcions.php';
            require_once '../animacio_correcte_'.$_SESSION['idioma'].'.php';
            require_once '../llibreria_'.$_SESSION["idioma"].'.php';

        ?>
       <script src="../js/nivel7.js"></script>
</head>

<body id="container" class="<?php echo $_SESSION['estil']; ?>" >

       <div id="plantilla">
           <div id="tiempo2" style="float:right;"></div>
           <div id="portada" class="no_portada">
            
            <span><?php echo $l7_tit; ?></span>
            <br /><br />
            <input type="button" value="<?php echo $boton; ?>" id="bt7" class='bt_jocs_nivells' onclick="inicio7()"/>

           </div>
           <div id="marcadores" style="width:100%; height: 47%; margin-left: 5%; display:none;">
               <span id ="piro">PIROMAN</span>    
               <div id='casalvl7' style="float:left; background-image: url('../css/galery/casalvl7.png'); width:300px; height:300px; background-size: contain; background-repeat: no-repeat;">
                   <div id='img_fuegolvl7' style="background-image: url('../css/galery/fuegolvl7.png'); width:300px; height:300px; background-size: contain; background-repeat: no-repeat;"></div>          
               </div>  
               <div id='extintor' style="float: left; background-image: url('../css/galery/extintorlvl7.png'); width:100px; height:100px; background-size: contain; background-repeat: no-repeat; margin-top: 356px;"></div>
               <div id='petrol' style="float: left; background-image: url('../css/galery/gasolinalvl7.png'); width:100px; height:100px; background-size: contain; background-repeat: no-repeat; margin-top: 356px;"></div>

        </div>
<input type="text" value="7" id="getLvl" />
<input type="text" value="<?php echo $_SESSION['vides'];?>" class="cHiden" id="videsbd" />
<input type="text" value="<?php echo $_SESSION['sound']; ?>" class="cHiden" id="getSound" />

</body>

</html>