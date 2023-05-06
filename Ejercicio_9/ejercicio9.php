<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">

    <title>Document</title>
</head>

<body>
    <main>
        <?php
        renombrarYMoverArchivo();
        imprimirImagenes();
        ?>
            <form action="ejercicio9.php" method="post" enctype="multipart/form-data">
                <label for="foto">Cargar imagen</label>
                <input type="file" name="archivo" id="archivo">
                <br><br>
                <label for="nombre">Ingrese el nombre</label>
                <input type="text" name="nombre" id="nombre">
                <br><br>
                <input type="submit" name="enviar" id="enviar" value="Enviar imagen">
            </form>
    </main>
</body>
</html>

<?php

    function renombrarYMoverArchivo(){
        if(isset($_FILES['archivo'])){
            $nombre_original = $_FILES['archivo']['name'];
            $nombre_nuevo = $_POST["nombre"].".jpg"; //aquí pones el nuevo nombre que quieras darle
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

    function imprimirImagenes(){
        foreach (llenarArrayDeImagenes() as $archivo){
            echo "<section>";
            echo "<img src='../imagenes/$archivo' alt='imagen'>";
            echo "<p>$archivo</p>";
            echo "</section>";

        }
    }




