<link rel='stylesheet' href='style.css'>

<?php
function buscar($clave, $texto){
    $palabra = "";
    $contador = 0;
    for ($i = 0; $i < strlen($texto); $i++) {
        if (!ctype_space($texto[$i])) {
            $palabra .= $texto[$i];
        } else {
            if ($palabra == $clave) {
                $contador++;
            }
            $palabra = "";
        }
    }
    if ($palabra == $clave) {
        $contador++;
    }
    echo "<p>Cantidad de veces que se encontró: ".$contador."</p>";
}

?>
    <h1>Buscando una palabra en un pajar, más bien en un String</h1>
    <form action="ejercicio15.php" method="post" enctype="multipart/form-data">
        <label for="texto">Texto</label>
        <input type="text" name="texto">
        <br><br>
        <label for="palabra">Palabra</label>
        <input type="text" name="palabra">
        <br><br>
        <input type="submit" name="enviar">
    </form>

    <?php
        if(isset($_POST["enviar"])){
            $texto=$_POST["texto"];
            $palabra= $_POST["palabra"];
            buscar($palabra,$texto);
        }