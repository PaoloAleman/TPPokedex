<h1>Calcula Doris</h1>
<?php
include_once ("Sumar.php");
include_once('Restar.php');
include_once('Operando.php');
include_once('Multiplicar.php');
include_once('Dividir.php');

    $resultado = new Dividir( new Multiplicar(new Sumar(
        new Restar(new Operando(5), new Operando(3)),
        new Sumar(new Operando(3), new Operando(4))
    ), new Sumar(
        new Restar(new Operando(5), new Operando(3)),
        new Sumar(new Operando(3), new Operando(4))
    )), new Operando(0));

    echo $resultado->mostrarEcuacion() . " = " . $resultado->resolverEcuacion();


