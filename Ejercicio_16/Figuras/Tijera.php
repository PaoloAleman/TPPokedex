<?php

class Tijera
{

    public $nombreJugador;

    public function __construct($nombreJugador)
    {
        $this->nombreJugador = $nombreJugador;
    }

    function competirContra($otro){
        return $otro->teCompiteTijera($this);
    }

    function teCompitePapel($otro){
        return $this->ganador();
    }

    function teCompitePiedra($otro){
        return $otro->ganador();
    }

    function teCompiteTijera($otro){
        return "empate";
    }

    function ganador(){
        return "Ganó ". $this->nombreJugador;
    }
}