<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Pokedex</title>
</head>
<body>
<header>
    <div id="logo">
        <img src="./logo/strawhat.png" alt="logo" width="100px">
    </div>
    <div>
        <h1>Pokedex</h1>
    </div>
    <div>
       <a href="login.php">Ingresar como administrador</a>
    </div>
</header>
<main>
    <form action="" method="post">
        <input type="search" name="buscador" id="buscador" placeholder="Ingrese el nombre, tipo o número de pokemón">
        <input type="submit" name="buscar">
    </form>
    <table>
        <tr>
            <td>Imagen</td>
            <td>Tipo</td>
            <td>Código</td>
            <td>Pokemón</td>
        </tr>

    <?php
    include_once ("conecDB.php");
    $conn=conecDB();
    if(isset($_POST["nombre"])) {
        $pokemonBuscado = $_POST["nombre"];
    }
        $sql="SELECT * FROM pokemon ORDER BY codigo";
        $resultado=mysqli_query($conn,$sql);
        foreach($resultado as $fila){
                mostrarLista($fila);
        }
    ?>
    </table>
    <?php
     include_once ("eliminarPokemon.php");
     include_once ("agregarPokemon.php");
    ?>

</main>
</body>
</html>

<?php

function mostrarLista($fila){
    echo "<tr>";
    echo "<td><img src='".$fila["imagen"]."' width='50px'></img>"." </td>";
    echo "<td><img src='".$fila["tipo"]."' width='50px'></img>"." </td>";
    echo "<td>".$fila["codigo"]." </td>";
    echo "<td>".$fila["nombre"]." </td>";
    echo "</tr>";
}



