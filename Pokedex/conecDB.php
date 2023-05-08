<?php

function conecDB(){
    $servername="localhost";
    $username="root";
    $password="";
    $database="pokedex";

    $conn= new mysqli($servername,$username,$password,$database) or die();
    return $conn;
}
