<?php
    function binomioCuadradoPerfecto_a($a, $b){
        $cuenta=($a+$b)*($a+$b);
        return $cuenta;
    }



    function binomioCuadradoPerfecto_b($a, $b){
        $cuenta=($a*$a)+2*$a*$b+($b*$b);
        return $cuenta;
    }

?>