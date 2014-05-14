<?php
session_start();

if(isset($_POST['vidas'])){
    $vides = $_POST['vidas'];
    
    
// update puntiacio MAX
    
    
    $_SESSION['vides'] = $vides;

    echo $_SESSION['vides'];
}

if(isset($_POST['comodins'])){
    $comodins = $_POST['comodins'];
    
    $_SESSION['comodins'] = $comodins;
    
}

?>