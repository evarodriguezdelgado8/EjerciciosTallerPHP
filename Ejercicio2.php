<?php
    //Ejercicio 2
    //Define variables de distintos tipos: un entero, un flotante, una cadena y un booleano. Luego imprime el valor y tipo de cada variable utilizando la función var_dump().

        $edad = 26; //Entero
        $altura = 1.76; //Flotante
        $nombre = "Eva"; //Cadena de caracteres
        $esMujer = true; //Booleano
        var_dump($edad); //Imprime el valor y tipo de cada variable
        var_dump($altura);
        var_dump($nombre);
        var_dump($esMujer);

    //Crea un array asociativo que contenga información de una persona (nombre, edad, ciudad).

        $personas = ["nombre" => "Juan", "edad" => 30, "ciudad" => "O Barco de Valdeorras"]; // Array asociativo


    //Define una constante llamada NOMBRE_CURSO con el valor "Programación PHP" y muestra su valor en pantalla.

        define("NOMBRE_CURSO", "Programación PHP");
        echo NOMBRE_CURSO;

    //Crea una función que reciba un array de números y devuelva la suma de todos sus elementos. Llámala con un array de ejemplo y muestra el resultado.

        function sumar($numeros) {
            $suma = 0;
            foreach ($numeros as $num) {
                $suma += $num;
            }
            return $suma;
        }
        
        $valores = [2, 4, 6, 8, 10]; // Array de ejemplo        
        $resultado = sumar($valores); // Llamada a la función
        
        echo "La suma de los elementos del array es: " . $resultado; // Mostrar el resultado

    //Declara una variable con el valor null y utiliza la función is_null() para verificar si la variable tiene valor null.

        $variable = null; //Variable con valor null
        is_null($variable); //Función para ver si la variable tiene el valor null


?>
