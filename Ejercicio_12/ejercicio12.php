<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<main>

    <h1>Contador de visitas extraterrestres</h1>
    <form action="ejercicio12.php" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
        <br><br>
        <label for="planeta">Planeta</label>
        <select name="planeta">
            <option value="Mercurio">Mercurio</option>
            <option value="Venus">Venus</option>
            <option value="Tierra">Tierra</option>
            <option value="Marte">Marte</option>
            <option value="Jupiter">Jupiter</option>
            <option value="Saturno">Saturno</option>
            <option value="Urano">Urano</option>
            <option value="Neptuno">Neptuno</option>
        </select>
        <br><br>
        <input type="submit" name="enviar">
    </form>
    <div>
        <?php

        if(isset($_POST["nombre"]) && isset($_POST["planeta"])&& isset($_POST["enviar"])){
            $visitas= json_decode(file_get_contents("visitas.json"),true);

            $nombre=$_POST["nombre"];
            $planeta=$_POST["planeta"];

            $visitas[]= array("nombre"=>$nombre,"planeta"=>$planeta);

            file_put_contents("visitas.json",json_encode($visitas));

            $contadorDeVisitas=0;

            foreach ($visitas as $visita){
                if($visita["planeta"] !="Tierra"){
                    $contadorDeVisitas++;
                }
            }
            echo "<section><p><strong>Visitas de otros planetas: </strong>$contadorDeVisitas</p> <br>";
            foreach ($visitas as $visita){
                echo "<p>Nos visitó ".$visita["nombre"]. " del planeta ".$visita["planeta"]."</p> ". "<br>";
            }
            echo "</section>";
        }

        ?>
    </div>
</main>
</body>
</html>




