<?php
session_start();

$vides = $_POST['vidas'];

$_SESSION['vides'] = $vides;

echo $_SESSION['vides'];


?>