<?php

class Alien
{
    public $nombre;
    public $planeta;
    public function __construct($nombre, $planeta){
        $this->nombre=$nombre;
        $this->planeta=$planeta;
    }
}