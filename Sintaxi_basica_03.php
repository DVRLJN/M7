<?php
#EJERCICIO 3
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $difNum1 = 100 - $num1;
    $difNum2 = 100 - $num2;

    echo "De los números ".$num1." y ".$num2;
    echo "<br>";

    if(abs($difNum1) < abs($difNum2)){
        echo "el número ".$num1." es más próximo a 100.";
    }else{
        echo "el número ".$num2." es más próximo a 100.";
    }
?>
