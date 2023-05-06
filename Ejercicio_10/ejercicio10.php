<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>

<body>
<main>
    <?php
    renombrarYMoverArchivo();
    imprimirLinks();
    crearArchivos();
    ?>
    <form action="ejercicio10.php" method="post" enctype="multipart/form-data">
        <label for="foto">Cargar imagen</label>
        <input type="file" name="archivo" id="archivo">
        <br><br>
        <label for="nombre">Ingrese el nombre</label>
        <input type="text" name="nombre" id="nombre">
        <br><br>
        <input type="submit" name="enviar" id="enviar" value="Enviar">
    </form>
</main>
</body>
</html>

<?php

function renombrarYMoverArchivo(){
    if(isset($_FILES['archivo'])){
        $nombre_original = $_FILES['archivo']['name'];
        $nombre_nuevo = $_POST["nombre"].".jpg";
        $ruta_temporal = $_FILES['archivo']['tmp_name'];
        $ruta_destino = '../imagenes/'.$nombre_nuevo;

        if(move_uploaded_file($ruta_temporal, $ruta_destino)){
            rename($ruta_destino, '../imagenes/'.$nombre_nuevo);
        }
    }
}



function obtenerDirectorio(){
    $directorio= "../imagenes";
    return $directorio;
}

function llenarArrayDeImagenes(){
    $imagenes= array();
    foreach (scandir(obtenerDirectorio()) as $imagen) {
        if ($imagen !== '.' && $imagen !== '..') {
            $imagenes[] = $imagen;
        }
    }
    return $imagenes;
}

function crearArchivos(){
    foreach (llenarArrayDeImagenes() as $archivo){
        $nuevoArchivo=fopen("$archivo.php", "w") or die ("No se pudo crear el archivo");
        $linkCss="<link rel='stylesheet' href='styleImg.css'>"."\n";
        $nombreArchivo= "<h1>$archivo</h1>"."\n";
        $imagenArchivo= "<section><img src='../imagenes/$archivo' alt='imagen'> </section>"."\n";
        fwrite($nuevoArchivo,$linkCss);
        fwrite($nuevoArchivo,$nombreArchivo);
        fwrite($nuevoArchivo,$imagenArchivo);
        fclose($nuevoArchivo);
    }
}

function imprimirLinks(){
    echo "<section>";
    foreach (llenarArrayDeImagenes() as $archivo){
       echo "<a href='$archivo.php' >$archivo</a>";

    }
    echo "</section>";
}


