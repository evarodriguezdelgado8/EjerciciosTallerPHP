<?php
    //Ejercicio 3
    //Defina dos variables con valores numéricos y realice operaciones aritméticas básicas (suma, resta, multiplicación, división, módulo).

        $num1 = 10;
        $num2 = 5;

        echo $num1 + $num2; // Imprime 15
        echo "<br>"; //Salto de linea
        echo $num1 - $num2; // Imprime 5
        echo "<br>";
        echo $num1 * $num2; // Imprime 50
        echo "<br>";
        echo $num1 / $num2; // Imprime 2
        echo "<br>";
        echo $num1 % $num2; // Imprime 0 (resto de la división)
        echo "<br>";

    //Use operadores de comparación para verificar si una variable es mayor, menor o igual que la otra.

        echo $num1 > $num2; // Imprime 1
        echo "<br>";
        echo $num1 < $num2; // No imprime nada
        echo "<br>";
        echo $num1 == $num2; // Ni imprime nada   
        echo "<br>";

    //Usa un operador ternario para determinar si una variable es par o impar.

        $numero = 7;
        $resultado = ($numero % 2 == 0) ? "par" : "impar"; // Operador ternario para comprobar si es par o impar

        echo "El número $numero es $resultado"; // Mostrar el resultado
        echo "<br>";
   
    // Aplica operadores lógicos para verificar si ambas variables son mayores de 10 y muestra un mensaje dependiendo del resultado.

        if ($num1 > 10 && $num2 > 10){ // Verifica si ambas son mayores de 10
            echo "Ambas variables son mayores de 10";
        }else{
            echo "Al menos una de las variables no es mayor de 10";
        }
        echo "<br>";

    //Implementa operadores de incremento y decremento y muestra cómo cambian los valores de las variables.

        echo ++$num1; // Imprime 11 (pre-incremento)
        echo "<br>";
        echo $num1++; // Imprime 11 (luego $num1 será 12)
        echo "<br>";
        echo $num1; // Imprime 12
   
?>
