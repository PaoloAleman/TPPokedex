<?php

class Piedra
{

    public $nombreJugador;

    public function __construct($nombreJugador){
        $this->nombreJugador = $nombreJugador;
    }

    function competirContra($otro){
        return $otro->teCompitePiedra($this);
    }

    function teCompitePapel($otro)
    {
        return $otro->ganador();
    }

    function teCompitePiedra($otro){
        return "empate";
    }

    function teCompiteTijera($otro){
        return $this->ganador();
    }

    function ganador(){
        return "Ganó ". $this->nombreJugador;

    }

}