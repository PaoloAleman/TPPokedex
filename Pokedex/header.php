<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleHeader.css">
    <title>Pokedex</title>
</head>
<body>
<header>
    <div class="divHeader">
        <img src="./logo/strawhat.png" alt="logo" width="140px">
    </div>
    <div class="divHeader">
        <h1 id="titulo">Pokedex</h1>
    </div>
    <div class="divHeader">
        <form method="post">
            <!-- Agrega aquí los campos del formulario -->
            <input type="submit" name="enviar" id="ingresarComoAdmin" value="Ingresar como administrador">
        </form>    </div>
</header>

<?php
if(isset($_POST["enviar"])){
    header("Location: ./login.php");
    exit();
}