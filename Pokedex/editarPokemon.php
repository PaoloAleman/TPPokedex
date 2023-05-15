<form action="editarPokemon.php" method="post">
    <label for="codigo">Código</label>
    <input type="number" name="codigo">
    <br><br>
    <input type="submit" name="editar" value="Editar">
</form>

<?php
include_once ("conecDB.php");
$conn=conecDB();

if(isset($_POST["editar"])){
    $codigoEditar=$_POST["codigo"];
    $sql="SELECT * FROM pokemon WHERE codigo='$codigoEditar'";
    $resultado=mysqli_query($conn, $sql);

    foreach ($resultado as $fila){
        ?>
<form method='post' action='editarPokemon.php' enctype='multipart/form-data'>
    <label for='nuevoCodigo'>Nuevo código</label>
    <input type='number' name='nuevoCodigo'>
    <br><br>
        <input type='submit' name='enviar' value='Enviar'>
    </form>
<?php

    }
    if(isset($_POST["enviar"])){
        $nuevoCodigo=$_POST["nuevoCodigo"];
        $sql2="UPDATE pokemon SET codigo=12 WHERE codigo=4";
        mysqli_query($conn,$sql2);
    }
}

