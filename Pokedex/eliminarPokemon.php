<p>Ingrese el código del pokemón que desee eliminar de la pokedex</p>
<div>
    <form action="eliminarPokemon.php" method="post">
        <label for="codigo">Código</label>
        <input type="number" name="codigo">
        <br><br>
        <input type="submit" name="eliminar" value="Eliminar">
    </form>
</div>
<?php

include_once ("conecDB.php");
$conn=conecDB();
if(isset($_POST["eliminar"])){
    $pokemonEliminado=$_POST["codigo"];
    $sql="DELETE FROM pokemon WHERE codigo=$pokemonEliminado";
    mysqli_query($conn,$sql);
}