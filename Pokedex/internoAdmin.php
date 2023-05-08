<?php
session_start();
if(!isset($_SESSION["validado"])){
    header("Location: index.php");
    exit();
}
?>

<a href="agregarPokemon.php">Agregar pokemón</a>
