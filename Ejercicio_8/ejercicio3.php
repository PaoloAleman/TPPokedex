<?php
    include "../Ejercicio_3/ejercicio3.php";
    // Obtener el contenido del archivo ejemplo.html
    $contenido = file_get_contents('ejercicio8.php');

    // Buscar y reemplazar el código del iframe con una cadena vacía
    $contenido = preg_replace('/<iframe.*?>.*?<\/iframe>/si', '', $contenido);

    // Mostrar el contenido modificado
    echo $contenido;
?>

    <div>
        <form action="ejercicio3.php" method="post">
            <label for="texto1">Texto 1</label>
            <input type="text" name="texto1" id="texto1">
            <br> <br>
            <label for="texto2">Texto 2</label>
            <input type="text" name="texto2" id="texto2">
            <br> <br>
            <input type="submit" name="enviar" class="enviar" value="Enviar">
        </form>
    </div>

<?php
    if(isset($_POST["texto1"]) && isset($_POST["texto2"])) {
        $texto1 = $_POST["texto1"];
        $texto2 = $_POST["texto2"];
        $resultado = concatenar($texto1, $texto2);
        echo "<p class='resultado'>Resultado: $resultado</p>";
    }
?>