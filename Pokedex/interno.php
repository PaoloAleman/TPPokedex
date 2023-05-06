<?php
session_start();
if(!isset($_SESSION["validado"])){
    header("Location: index.php");
    exit();
}

echo "Hola mundo";