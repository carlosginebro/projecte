<html>
<head>
       <meta charset="utf-8" />
        <?php
            require_once 'headlvls.php';
            require_once '../funcions.php';
        ?>
       <script src="../js/nivel7.js"></script>
</head>

<body id="container" class="<?php echo $_SESSION['estil']; ?>" >

       <div id="plantilla">
           <div id="tiempo2" style="float:right;"></div>
           <div id="portada" class="no_portada">
            
            <span>Aconsegueix apagar el foc de la casa abans que sigui massa tard, fes servir l'extintor per apagar el foc, o en cas contrari, si vols avivar el foc, fes servir la gasolina...</span>
            <br /><br />
            <input type="button" value="Començar!" id="bt7" class='bt_jocs_nivells' onclick="inicio7()"/>

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

</body>

</html>