<?php
#EJERCICIO 15
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $col = 1;
    $fil = 1;

    echo( "<table style='width:25%' border = 1px solid black>");
    for ($f=1; $f <= $num1; $f++) { 
        print("<tr>");
        for ($c=1; $c <= $num2 ; $c++) { 
             print("<th>".$fil.".".$c."</th>");
        } 
        print("</tr>");
        $fil++;
        echo "<br>";
    }
    echo("</table>"); 
?>
