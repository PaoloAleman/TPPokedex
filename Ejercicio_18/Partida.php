<?php

class Partida {

    private $puntaje;
    private $vidas;

    public function __construct($puntaje) {
        $this->puntaje = $puntaje;
        $this->vidas = 3;
    }

    public function sumarPuntaje($puntos){
        $this->puntaje+=$puntos;
    }

    public function restarPuntaje($puntos){
        $this->puntaje-=$puntos;
    }

    public function restarVida(){
        $this->vidas--;

        if($this->vidas == 0){
            throw new FinDePartida('Game Over - ' . $this->puntaje . ' puntos - ' . $this->vidas . ' vidas <br>' );
        }
    }

    public function mostrarPuntaje() {
        echo "Partida activa - " . $this->puntaje . " puntos - " .  $this->vidas .  " vidas <br>";
    }
}

class FinDePartida extends Exception{
    public function __construct($msg) {
        parent::__construct($msg);
    }
}