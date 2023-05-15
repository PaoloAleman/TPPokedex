<link rel="stylesheet" href="css/styleAgregarPokemon.css">
<h1>¡Agregar Pokemón!</h1>
<form method="post" action="agregarPokemon.php" enctype="multipart/form-data">
    <label for="codigo">Código</label>
    <input type="number" name="codigo">
    <br><br>
    <label for="imagen">Imagen</label>
    <input type="file" name="imagen" accept="image/*">
    <br><br>
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre">
    <br><br>
    <label for="tipo">Tipo</label>
    <select name="tipo">
        <option value="Fuego">Fuego</option>
        <option value="Agua">Agua</option>
        <option value="Natural">Natural</option>
        <option value="Rayo">Rayo</option>
    </select>
    <br><br>
    <label for="descripcion">Descripción</label>
    <input type="text" name="descripcion">
    <br><br>
    <input type="submit" name="enviar">
</form>

<?php

$servername="localhost";
$username="root";
$password="";
$database="pokedex";

$conn= new mysqli($servername,$username,$password,$database) or die();

if(isset($_POST["enviar"])) {
    $codigo = $_POST["codigo"];
    $nombre = $_POST["nombre"];
    $imagen = moverArchivo();
    $nombreImagen=$_FILES["imagen"]["name"];
    $tipo = transformarTipoAImagen($_POST["tipo"]);
    $nombreTipo= $_POST["tipo"];
    $descripcion = $_POST["descripcion"];

    $stmt = $conn->prepare("INSERT INTO pokemon (codigo, imagen, nombre, tipo, descripcion, nombreTipo, nombreImagen) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("issssss", $codigo, $imagen, $nombre, $tipo, $descripcion,$nombreTipo, $nombreImagen);
    $stmt->execute();
    $stmt->close();

    crearArchivo();

    // Cerrar la conexión
    $conn->close();
}

    function crearArchivo(){
        $nombre = $_POST["nombre"];
        $nuevoArchivo=fopen("./archivosPokemones/".$nombre.".html","w") or die ("No se pudo crear el archivo");
        fclose($nuevoArchivo);
    }

    /*El siguiente método lo utilizo para mover el archivo
     a la carpeta imágenesPokemon dentro de la carpeta Pokedex. Debe retornarme una
    la dirección donde quedó guardada la imagen*/

    function moverArchivo(){
        if (isset($_FILES['imagen'])) {
            $nombre = $_FILES['imagen']["name"];
            $ruta_temporal = $_FILES['imagen']['tmp_name'];
            $ruta_destino = './imagenesPokemon/' . $nombre;

            move_uploaded_file($ruta_temporal, $ruta_destino);
        }
        return $ruta_destino;
    }


    function transformarTipoAImagen($texto)
    {
        switch ($texto) {
            case "Fuego":
                return "./Tipo/fuego.png";
            case "Agua":
                return "./Tipo/agua.png";
            case "Natural":
                return "./Tipo/hoja.png";
            case "Rayo":
                return "./Tipo/rayo.png";
        }
    }



