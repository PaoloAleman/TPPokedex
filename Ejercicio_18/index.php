<?php
include_once("Packman.php");
include_once('Partida.php');
include_once('FantasmaComestible.php');
include_once('Pildora.php');
include_once('Espina.php');
include_once('Fantasma.php');

try {
    $puntaje = 0;

    $partida = new Partida($puntaje);
    $packman = new Packman($partida);
    $pildora = new Pildora();
    $espina = new Espina();
    $fantasma = new Fantasma();

    $fantasmaComestible = new FantasmaComestible();

    $packman->chocaContra($fantasmaComestible);
    $partida->mostrarPuntaje();

    $packman->chocaContra($fantasmaComestible);
    $packman->chocaContra($fantasmaComestible);
    $partida->mostrarPuntaje();

    $packman->chocaContra($pildora);
    $partida->mostrarPuntaje();

    $packman->chocaContra($pildora);
    $packman->chocaContra($pildora);
    $partida->mostrarPuntaje();

    $packman->chocaContra($espina);
    $packman->chocaContra($espina);
    $partida->mostrarPuntaje();


    $packman->chocaContra($fantasma);
    $partida->mostrarPuntaje();

    $packman->chocaContra($fantasma);
    $packman->chocaContra($fantasma);
    $partida->mostrarPuntaje();

} catch (FinDePartida $e) {
    echo  $e->getMessage();
}

