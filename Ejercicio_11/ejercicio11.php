<link rel='stylesheet' href='style.css'>

<h2>Ingrese el número de dados que desea lanzar</h2>
<form action="ejercicio11.php" method="post" enctype="multipart/form-data">
    <label for="numero">Número: </label>
    <input type="number" name="numero">
    <input type="submit" name="enviar">
</form>

<?php

$numeroDeDados=$_POST["numero"];
$resultado=0;
    echo "<section>";
    for($i=0;$i<$numeroDeDados;$i++){
        $valorRandom=rand(1,6);
        $resultado+=$valorRandom;
        echo "<img src='dados/$valorRandom.webp'>";
    }
    echo "</section>";


echo "<p>El puntaje obtenido es de: ". $resultado."</p>";