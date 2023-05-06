<?php

class Dividir {
    private $operador1;
    private $operador2;

    public function __construct($operador1, $operador2) {
        $this->operador1 = $operador1;
        $this->operador2 = $operador2;
    }


    public function resolverEcuacion(){
        if ($this->operador2->resolverEcuacion() != 0) {
            return $this->operador1->resolverEcuacion() / $this->operador2->resolverEcuacion();
        }else {
            return "infinito";
        }
    }
    public function mostrarEcuacion() {
        return '( ' . $this->operador1->mostrarEcuacion() . ' ) / (' . $this->operador2->mostrarEcuacion() . ')';
    }
}