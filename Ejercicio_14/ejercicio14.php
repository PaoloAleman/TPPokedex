<link rel="stylesheet" href="style.css">

<h1>Ingrese la dimension de la matriz:</h1>
    <form method="post" action="ejercicio14.php">
        <label for="dimension">Dimensión</label>
        <input type="number" name="dimension" id="dimension">
        <br><br>
        <input type="submit" name="enviar">
    </form>

    <?php
    if(isset($_POST['enviar'])) {
        echo "<section><h3>Matriz</h3>";
        $dimension = $_POST['dimension'];
        $matriz = array();
        for($i = 0; $i < $dimension; $i++) {
            $fila = array();
            for($j = 0; $j < $dimension; $j++) {
                $fila[$j] = rand(-100,100);
            }
            $matriz[$i] = $fila;
        }
        for($i = 0; $i < $dimension; $i++) {
            for($j = 0; $j < $dimension; $j++) {
                echo $matriz[$i][$j] . " ";
            }
            echo "<br>";
        }


        //A:
        echo "<br>";
        echo "<h3>Diagonal principal</h3>";
        for($i = 0; $i < $dimension; $i++) {
            echo $matriz[$i][$i] . " ";
        }

        //B:
        echo "<br>";
        echo "<h3>Diagonal secundaria</h3>";
        for ($i = 0; $i < $dimension; $i++) {
            echo $matriz[$i][$dimension - $i - 1]. " ";
        }

        //C:
        $suma=0;
        echo "<br>";
        echo "<h3>Suma de todos los valores</h3>";
        for ($i = 0; $i < $dimension; $i++) {
            for ($j = 0; $j < $dimension; $j++) {
                $suma+=$matriz[$i][$j];
            }
        }

        echo $suma."</section>";

    }
    ?>


