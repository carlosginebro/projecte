<html>
<head>
       <meta charset="utf-8" />
        <?php
            require_once 'headlvls.php';
            require_once '../funcions.php';
        ?>
       <script src="../js/nivel4.js"></script>
</head>
<?php
    if (isset($_POST['interface'])) {
        $estilo = $_POST['interface'];
    } else {
        $estilo = 'normal';
}
?>

<body id="container" class="<?php echo $estilo ?>" >
    <span id='you'>0</span> 
    <span id='angel'>0</span>
       <div id="plantilla">
           <input type="button" onclick="ComencaLvl4()"/>
            
            </div>
<input type="text" value="4" id="getLvl" />


</body>

</html>