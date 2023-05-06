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
    <h1>Paolo Aleman</h1>
    <h2>Ejercicio 1</h2>
    <div>
        <h3>Enunciado:</h3>
        <section>
            <p>
                Ingrese "amarillo", "rojo" o "verde" (Siempre en minúsculas). Según lo que ingrese, generará un resultado. <br>
                rojo -> "frene" <br>
                amarillo -> "precaución"<br>
                verde -> "avance"
            </p>

            <form action="ejercicio7.php" method="post" name="ejercicio1">
                <label for="color">Ingrese el color</label>
                <input type="text" name="color" id="color">
                <input type="submit" name="enviar" class="enviar"  value="Enviar">
            </form>
        </section>
    </div>
    <br>

    <?php
    if(isset($_POST["color"])){
        $color=$_POST["color"];
        require("../Ejercicio_1/ejercicio1.php");
        $resultado= semaforo_A($color);
        echo "<p class='resultado'>Resultado: $resultado</p>";
    }
    ?>



    <h2>Ejercicio 2</h2>
    <div>
        <h3>Enunciado:</h3>
       <section>
           <p>Ingrese 2 números, el resultado será el cuadrado de la suma de ambos.</p>

           <form action="ejercicio7.php" method="post">
               <label for="numero1">Numero 1</label>
               <input type="text" name="numero1" id="numero2">
               <br><br>
               <label for="numero2">Numero 2</label>
               <input type="text" name="numero2" id="numero2">
               <br><br>
               <input type="submit" name="enviar" class="enviar"  value="Enviar">
           </form>
       </section>
    </div>
    <br>

    <?php
    if(isset($_POST["numero1"]) && isset($_POST["numero2"])){
        $numero1= $_POST["numero1"];
        $numero2= $_POST["numero2"];
        require ("../Ejercicio_2/ejercicio2.php");
        $resultado=binomioCuadradoPerfecto_a($numero1,$numero2);
        echo "<p class='resultado'>Resultado: $resultado</p>";
    }
    ?>

    <h2>Ejercicio 3</h2>
    <div>
        <h3>Enunciado:</h3>
        <section>
            <p>Ingrese dos textos, el resultado será una concatenación de ellos.</p>
            <form action="ejercicio7.php" method="post">
                <label for="texto1">Texto 1</label>
                <input type="text" name="texto1" id="texto1">
                <br> <br>
                <label for="texto2">Texto 2</label>
                <input type="text" name="texto2" id="texto2">
                <br> <br>
                <input type="submit" name="enviar" class="enviar" value="Enviar">
            </form>
        </section>
    </div>
    <br>

    <?php
    if(isset($_POST["texto1"]) && isset($_POST["texto2"])) {
        $texto1 = $_POST["texto1"];
        $texto2 = $_POST["texto2"];
        require("../Ejercicio_3/ejercicio3.php");
        $resultado = concatenar($texto1, $texto2);
        echo "<p class='resultado'>Resultado: $resultado</p>";
    }
    ?>

    <h2>Ejercicio 4</h2>
    <div>
        <h3>Enunciado:</h3>
        <section>
            <p>Ingrese un número, el resultado será el mismo número incrementado en 1</p>
            <form action="ejercicio7.php" method="post">
                <label for="numero">Número</label>
                <input type="text" name="numeroInc" id="numero">
                <input type="submit" name="enviar" class="enviar"  value="Enviar">
            </form>
        </section>
    </div>
    <br>

    <?php
    if(isset($_POST["numeroInc"])) {
        $numero = $_POST["numeroInc"];
        require("../Ejercicio_4/ejercicio4.php");
        incrementar($numero);
        echo "<p class='resultado'>Resultado: $numero</p>";
    }
    ?>

    <h2>Ejercicio 5</h2>
    <div>
        <h3>Enunciado:</h3>
       <section>
           <p>Ingrese los números que desee, el resultado será una sumatoria de ellos</p>
           <form action="ejercicio7.php" method="post" name="ejercicio5">
               <label for="numero">Numero </label>
               <input type="text" name="numero" id="numero">
               <br><br>
               <input type="submit" name="enviar" class="enviar"  value="Enviar">
           </form>
       </section>
    </div>
    <br>

    <?php
    session_start(); // Iniciamos la sesión

    if(isset($_POST['numero'])){ // Verificamos si se ha enviado el formulario
        $numero = $_POST['numero']; // Obtenemos el número ingresado en el input
        if(isset($_SESSION['numeros'])){ // Verificamos si ya existe el array en la sesión
            array_push($_SESSION['numeros'], $numero); // Agregamos el número al final del array existente
            require ("../Ejercicio_5/ejercicio5.php");
            $resultado=sumatoria_a($_SESSION['numeros']);
            echo "<p class='resultado'>Resultado: $resultado</p>";
        } else {
            $_SESSION['numeros'] = array($numero); // Creamos el array si no existe y agregamos el número
            require ("../Ejercicio_5/ejercicio5.php");
            $resultado=sumatoria_a($_SESSION['numeros']);
            echo "<p class='resultado'>Resultado: $resultado</p>";
        }
    }
    ?>

    <h2>Ejercicio 6</h2>
    <div>
        <h3>Enunciado:</h3>
        <section>
            <p>Ingrese su nombre, apellido y un horario. Por ej., Paolo, Aleman, 9.</p>
            <form action="ejercicio7.php" method="post">
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
        </section>
    </div>
    <br>

    <?php
        if(isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["horario"])){
            $nombre= $_POST["nombre"];
            $apellido= $_POST["apellido"];
           if($_POST["horario"]>0 && $_POST["horario"]<=24){
               $horario= $_POST["horario"];
               require ("../Ejercicio_6/ejercicio6.php");
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

</main>
</body>
</html>


