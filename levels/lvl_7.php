<html>
<head>
       <meta charset="utf-8" />
        <?php
            require_once 'headlvls.php';
            require_once '../funcions.php';
        ?>
       <script src="../js/nivel7.js"></script>
</head>
<?php
    if (isset($_POST['interface'])) {
        $estilo = $_POST['interface'];
    } else {
        $estilo = 'normal';
}
?>

<body id="container" class="<?php echo $estilo ?>" >

       <div id="plantilla">
           <div id="tiempo2" style="float:right;"></div>
           <div id="portada" class="no_portada">

            <span>bla bla bla bla bla bla bla bla bla bla bla bla bla </span>
            <br />
            <input type="button" value="START!" id="bt7" onclick="inicio7()"/>

           </div>
           <div id="marcadores" style="width:100%; height: 47%; margin-left: 5%; display:none;">
                   
               <div style="float:left; background-image: url('../css/galery/casalvl7.png'); width:300px; height:300px; background-size: contain; background-repeat: no-repeat;">
                   <div id='img_fuegolvl7' style="background-image: url('../css/galery/fuegolvl7.png'); width:300px; height:300px; background-size: contain; background-repeat: no-repeat;"></div>          
               </div>  
               <div id='extintor' style="float: left; background-image: url('../css/galery/extintorlvl7.png'); width:100px; height:100px; background-size: contain; background-repeat: no-repeat;"></div>
               <div id='petrol' style="float: left; background-image: url('../css/galery/gasolinalvl7.png'); width:100px; height:100px; background-size: contain; background-repeat: no-repeat;"></div>

        </div>
<input type="text" value="4" id="getLvl" />


</body>

</html>