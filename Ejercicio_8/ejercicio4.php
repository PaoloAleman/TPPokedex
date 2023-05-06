    <?php
        include "../Ejercicio_4/ejercicio4.php";
        // Obtener el contenido del archivo ejemplo.html
        $contenido = file_get_contents('ejercicio8.php');

        // Buscar y reemplazar el código del iframe con una cadena vacía
        $contenido = preg_replace('/<iframe.*?>.*?<\/iframe>/si', '', $contenido);

        // Mostrar el contenido modificado
        echo $contenido;
    ?>

        <div>
            <form action="ejercicio4.php" method="post">
                <label for="numero">Número</label>
                <input type="text" name="numeroInc" id="numero">
                <input type="submit" name="enviar" class="enviar"  value="Enviar">
            </form>
        </div>

    <?php
        if(isset($_POST["numeroInc"])) {
            $numero = $_POST["numeroInc"];
            incrementar($numero);
            echo "<p class='resultado'>Resultado: $numero</p>";
        }
    ?>