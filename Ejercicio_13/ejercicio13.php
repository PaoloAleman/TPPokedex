<?php
    $matriz= parse_ini_file("menu.ini")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<main>

    <h1>Elige un menú</h1>
    <form action="ejercicio13.php" method="post" enctype="multipart/form-data">
        <h3>Desayuno</h3>
        <input type="checkbox" name="desayuno[]" value="Café"> Café <br>
        <input type="checkbox" name="desayuno[]" value="Té"> Té <br>
        <input type="checkbox" name="desayuno[]" value="Leche"> Leche <br>
        <h3>Almuerzo</h3>
        <input type="checkbox" name="almuerzo[]" value="Milanesa">Milanesa <br>
        <input type="checkbox" name="almuerzo[]" value="Fideos">Fideos <br>
        <input type="checkbox" name="almuerzo[]" value="Sushi"> Sushi <br>
        <h3>Merienda</h3>
        <input type="checkbox" name="merienda[]" value="Café">Café <br>
        <input type="checkbox" name="merienda[]" value="Té">Té <br>
        <input type="checkbox" name="merienda[]" value="Leche">Leche <br>
        <h3>Cena</h3>
        <input type="checkbox" name="cena[]" value="Pizza">Pizza <br>
        <input type="checkbox" name="cena[]" value="Pancho">Pancho <br>
        <input type="checkbox" name="cena[]" value="Salchipapa">Salchipapas <br><br>

        <input type="submit" name="enviar">
    </form>
</main>
</body>
</html>

<?php
if(isset($_POST['enviar'])) {
    $menu = parse_ini_file('menu.ini', true);

    $menu['Desayuno'] = isset($_POST['desayuno']) ? $_POST['desayuno'] : array();
    $menu['Almuerzo'] = isset($_POST['almuerzo']) ? $_POST['almuerzo'] : array();
    $menu['Merienda'] = isset($_POST['merienda']) ? $_POST['merienda'] : array();
    $menu['Cena'] = isset($_POST['cena']) ? $_POST['cena'] : array();

    $contenido_menu = '';

    foreach($menu as $seccion => $valores) {
        $contenido_menu .= "[$seccion]\n";
        foreach($valores as $valor) {
            $contenido_menu .= "$valor\n";
        }
        $contenido_menu .= "\n";
    }

    file_put_contents('menu.ini', $contenido_menu);

    echo "<h2>Menú seleccionado:</h2>";
    foreach($menu as $seccion=>$valores){
        echo "<h3>$seccion: </h3>";
        foreach ($valores as $valor){
            echo $valor."<br>";
        }
    }
}
?>
