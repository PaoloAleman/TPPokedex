    <?php
        // Obtener el contenido del archivo ejemplo.html
        $contenido = file_get_contents('ejercicio8.php');

        // Buscar y reemplazar el código del iframe con una cadena vacía
        $contenido = preg_replace('/<iframe.*?>.*?<\/iframe>/si', '', $contenido);

        // Mostrar el contenido modificado
        echo $contenido;
    ?>

    <iframe src="../Ejercicio_7/ejercicio7.php" width="100%" height="500px" style="margin-top: 100px; margin-bottom: 100px; border: 2px solid black"></iframe>
