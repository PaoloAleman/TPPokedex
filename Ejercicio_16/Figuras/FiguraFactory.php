<?php

include_once ('./Figuras/Piedra.php');
include_once ('./Figuras/Papel.php');
include_once ('./Figuras/Tijera.php');
class FiguraFactory{

    public function create($jugada, $jugador)
    {
        switch ($jugada) {
            case 'Piedra':
                return new Piedra($jugador);
            case 'Tijera':
                return new Tijera($jugador);
            case 'Papel':
                return new Papel($jugador);
        }
    }

}