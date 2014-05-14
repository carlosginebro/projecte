<?php
session_start();

    $host = 'localhost';
    $usu = 'root';
    $contra = '';
    $bd = 'projecte';
    $cone = new mysqli($host, $usu, $contra, $bd);

if(isset($_POST['vidas'])){
    $vides = $_POST['vidas'];
    
    
// update puntiacio MAX
    
    
    $_SESSION['vides'] = $vides;

    echo $_SESSION['vides'];
}

if(isset($_POST['comodins'])){
    $comodins = $_POST['comodins'];
    
    $_SESSION['comodins'] = $comodins;
    
    $id = $_SESSION['id'];
    $sql = "update usuari set Comodins = $comodins where Id = $id";
    $cone->query($sql);
    
}

?>