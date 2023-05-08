<h1>¡Agregar Pokemón!</h1>
<form method="post" action="index.php" enctype="multipart/form-data">
    <label for="codigo">Código</label>
    <input type="number" name="codigo">
    <br><br>
    <label for="imagen">Imagen</label>
    <input type="file" name="imagen">
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
    <label for="datosExtras">Datos extras</label>
    <input type="text" name="datosExtras">
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
    $tipo = transformarTipoAImagen($_POST["tipo"]);
    $descripcion = $_POST["descripcion"];
    $datosExtras = $_POST["datosExtras"];


    $stmt = $conn->prepare("INSERT INTO pokemon (codigo, imagen, nombre, tipo, descripcion, datosExtras) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssss", $codigo, $imagen, $nombre, $tipo, $descripcion, $datosExtras);
    $stmt->execute();
    $stmt->close();

    header("Refresh:0");
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



