
    <?php
        include "../Ejercicio_1/ejercicio1.php";
        // Obtener el contenido del archivo ejemplo.html
        $contenido = file_get_contents('ejercicio8.php');

        // Buscar y reemplazar el código del iframe con una cadena vacía
        $contenido = preg_replace('/<iframe.*?>.*?<\/iframe>/si', '', $contenido);

        // Mostrar el contenido modificado
        echo $contenido;
    ?>

   <div>
       <form action="ejercicio1.php" method="post" name="ejercicio1">
           <label for="color">Ingrese el color</label>
           <input type="text" name="color" id="color">
           <input type="submit" name="enviar" class="enviar"  value="Enviar">
       </form>
   </div>

    <?php
        if(isset($_POST["color"])){
            $color=$_POST["color"];
            $resultado= semaforo_A($color);
            echo "<p class='resultado'>Resultado: $resultado</p>";
        }
    ?>
