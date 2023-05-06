<?php

class Saludar{

    public $nombre;
    public $apellido;

    public function __construct($nombre,$apellido){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
    }

    function saludo_formal($horario){
        if($horario>=5 && $horario<=13){
            echo "<p class='resultado'>Buenos días $this->nombre $this->apellido</p>";
        }elseif ($horario>=13 && $horario<=21){
            echo "<p class='resultado'>Buenas tardes $this->nombre $this->apellido</p>";
        }elseif ($horario>=21 && $horario<=24 || $horario>=1 && $horario<=5 ){
            echo "<p class='resultado'>Buenas noches $this->nombre $this->apellido</p>";
        }
    }

    function saludo_informal($horario){
        if($horario>=5 && $horario<=13){
            echo "<p class='resultado'>Hola $this->nombre! que tengas un buen día</p>";
        }elseif ($horario>=13 && $horario<=21){
            echo "<p class='resultado'>Hola $this->nombre! que tengas una buena tarde</p>";
        }elseif ($horario>=21 && $horario<=24 || $horario>=1 && $horario<=5 ){
            echo "<p class='resultado'>Hola $this->nombre! que tengas una buena noche</p>";
        }
    }
    }


