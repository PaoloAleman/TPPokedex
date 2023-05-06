<?php

class Packman {
    private $partida;

    public function __construct($partida) {
        $this->partida = $partida;
    }

    public function chocaContra($algo) {
        $algo->chocasteContraPackman($this->partida);
    }
}