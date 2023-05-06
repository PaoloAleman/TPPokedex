<?php
    include "../Ejercicio_2/ejercicio2.php";
    // Obtener el contenido del archivo ejemplo.html
    $contenido = file_get_contents('ejercicio8.php');

    // Buscar y reemplazar el código del iframe con una cadena vacía
    $contenido = preg_replace('/<iframe.*?>.*?<\/iframe>/si', '', $contenido);

    // Mostrar el contenido modificado
    echo $contenido;
?>

    <div>
        <form action="ejercicio2.php" method="post">
            <label for="numero1">Numero 1</label>
            <input type="text" name="numero1" id="numero2">
            <br><br>
            <label for="numero2">Numero 2</label>
            <input type="text" name="numero2" id="numero2">
            <br><br>
            <input type="submit" name="enviar" class="enviar"  value="Enviar">
        </form>
    </div>

<?php
    if(isset($_POST["numero1"]) && isset($_POST["numero2"])){
        $numero1= $_POST["numero1"];
        $numero2= $_POST["numero2"];
        $resultado=binomioCuadradoPerfecto_a($numero1,$numero2);
        echo "<p class='resultado'>Resultado: $resultado</p>";
    }
?>