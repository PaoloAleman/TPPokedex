    <?php
        include "../Ejercicio_6/ejercicio6.php";
        // Obtener el contenido del archivo ejemplo.html
        $contenido = file_get_contents('ejercicio8.php');

        // Buscar y reemplazar el código del iframe con una cadena vacía
        $contenido = preg_replace('/<iframe.*?>.*?<\/iframe>/si', '', $contenido);

        // Mostrar el contenido modificado
        echo $contenido;
    ?>

    <div>
        <form action="ejercicio6.php" method="post">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre">
            <br><br>
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido">
            <br><br>
            <label for="horario">Horario</label>
            <input type="text" name="horario" id="horario">
            <br><br>
            <input type="submit" name="enviar" class="enviar"  value="Enviar">
        </form>
    </div>

    <?php
        if(isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["horario"])){
            $nombre= $_POST["nombre"];
            $apellido= $_POST["apellido"];
                if($_POST["horario"]>0 && $_POST["horario"]<=24){
                    $horario= $_POST["horario"];
                    $saludo= new Saludar($nombre,$apellido);
                    echo "<p class='resultado'>Saludo formal: </p>";
                    $saludo_formal= $saludo ->saludo_formal($horario);
                    echo "<br> <br>";
                    echo "<p class='resultado'>Saludo informal: </p>";
                    $saludo_informal= $saludo ->saludo_informal($horario);
                }else{
                    echo "<p class='resultado'>Horario inválido</p>";
                }
        }
    ?>