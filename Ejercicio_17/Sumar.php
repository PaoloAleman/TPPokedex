<?php

class Sumar {
    private $operador1;
    private $operador2;

    public function __construct($param, $param1) {
        $this->operador1 = $param;
        $this->operador2 = $param1;
    }

    public function resolverEcuacion(){
        return $this->operador1->resolverEcuacion() + $this->operador2->resolverEcuacion();
    }

    public function mostrarEcuacion() {
        return $this->operador1->mostrarEcuacion() . ' + ' . $this->operador2->mostrarEcuacion();
    }
}