<?php
    include_once ("header.php");
?>
<main>
    <form action="" method="post" id="formularioBuscar">
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
    <form action="index.php" method="post" id="formularioRedireccionar">
        <input type="submit" name="agregarPokemon"  value="Agregar Pokemon" class="link">
        <input type="submit" name="eliminarPokemon"  value="Eliminar Pokemon" class="link">
        <input type="submit" name="editarPokemon"  value="Editar Pokemon" class="link">
    </form>

    <?php
    if(isset($_POST["agregarPokemon"])){
        header("Location: ./agregarPokemon.php");
    }elseif (isset($_POST["eliminarPokemon"])){
        header("Location: ./eliminarPokemon.php");
    }elseif (isset($_POST["editarPokemon"])){
        header("Location: ./editarPokemon.php");
    }
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
    echo "<td id='nombrePokemon'>
            <form action='index.php' method='post'>
                <input type='submit' name='pokemonElegido' value='".$fila["nombre"]."'>
            </form>
        </td>";
    echo "</tr>";

    if(isset($_POST["pokemonElegido"])){
        header("Location: ./archivosPokemones/".$fila["nombre"].".html");

    }
}



