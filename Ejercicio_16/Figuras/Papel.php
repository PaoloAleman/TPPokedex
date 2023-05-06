<?php

class Papel{


    public $nombreJugador;

    public function __construct($nombreJugador){
        $this->nombreJugador = $nombreJugador;
    }

    function competirContra($otro){
        return $otro->teCompitePapel($this);
    }

    function teCompitePapel($otro){
        return "empate";
    }

    function teCompitePiedra($otro){
        return $this->ganador();
    }

    function teCompiteTijera($otro){
        return $otro->ganador();
    }

    function ganador(){
        return "Ganó ". $this->nombreJugador;

    }

}