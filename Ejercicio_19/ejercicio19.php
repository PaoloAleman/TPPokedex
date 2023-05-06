
<h1>FizzBuzz Kata</h1>

<?php
    function fizzBuzz(){
        for($i=1;$i<=100;$i++){
            if($i%3==0 && $i%5==0)
                imprimir("FizzBuzz"."<br>");
            elseif ($i%3==0)
                imprimir("Fizz"."<br>");
            elseif ($i%5==0)
                imprimir("Buzz"."<br>");
            else
                imprimir($i."<br>");
        }
    }

    function imprimir($texto){
        echo $texto;
    }

    fizzBuzz();