<?php

    function semaforo_A($color){
        if($color=="rojo"){
            return"Frene";
        }else if($color=="amarillo"){
            return "precaución";
        }else if($color=="verde"){
            return "avance";
        }else{
            return "color no válido";
        }
    }

    function semaforo_B($color){
        $decision= ($color=="rojo") ? "frene" :
            (($color=="amarillo")?"precaucion":
                (($color=="verde") ? "avance":"Color no válido"));
                 return $decision;
    }

    function semaforo_C($color){
        switch ($color){
            case "rojo":
                return "frene";
                break;
            case "amarillo":
                return "precaución";
                break;
            case "verde":
                return "avance";
                break;
            default:
                return "color no válido";
                break;
    }

}