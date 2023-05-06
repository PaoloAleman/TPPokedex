    <?php
        include "../Ejercicio_5/ejercicio5.php";
        // Obtener el contenido del archivo ejemplo.html
        $contenido = file_get_contents('ejercicio8.php');

        // Buscar y reemplazar el código del iframe con una cadena vacía
        $contenido = preg_replace('/<iframe.*?>.*?<\/iframe>/si', '', $contenido);

        // Mostrar el contenido modificado
        echo $contenido;
    ?>

    <div>
        <form action="ejercicio5.php" method="post" name="ejercicio5">
            <label for="numero">Numero </label>
            <input type="text" name="numero" id="numero">
            <br><br>
            <input type="submit" name="enviar" class="enviar"  value="Enviar">
        </form>
    </div>

    <?php
    session_start(); // Iniciamos la sesión

    if(isset($_POST['numero'])){ // Verificamos si se ha enviado el formulario
        $numero = $_POST['numero']; // Obtenemos el número ingresado en el input
        if(isset($_SESSION['numeros'])){ // Verificamos si ya existe el array en la sesión
            array_push($_SESSION['numeros'], $numero); // Agregamos el número al final del array existente
            $resultado=sumatoria_a($_SESSION['numeros']);
            echo "<p class='resultado'>Resultado: $resultado</p>";
        } else {
            $_SESSION['numeros'] = array($numero); // Creamos el array si no existe y agregamos el número
            $resultado=sumatoria_a($_SESSION['numeros']);
            echo "<p class='resultado'>Resultado: $resultado</p>";
        }
    }
    ?>