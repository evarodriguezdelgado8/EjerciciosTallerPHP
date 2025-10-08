<?php
    //Ejercicio 1 SINTAXIS PHP
    //Declare una variable llamada $nombre y asígnale tu nombre.

        $nombre = "Eva"; //Declaro una variable y le asigno mi nombre
        
    //Imprima un saludo utilizando la función echo como: "Hola, mi nombre es [tu nombre]".

        echo "Hola, mi nombre es " . $nombre; //Uso echo para imprimir por pantalla y lo concateno con la variable asignada a mi nombre

    //Define una constante llamada PI con el valor 3.1416 y muestra su valor en pantalla.

        define("PI", 3.1416); // Defino la constante PI con el valor 3.1416
        echo PI; // Imprime 3.1416

    //Prueba con dos variables cuyos nombres solo difieran en mayúsculas y demuestra que PHP es sensible a mayúsculas y minúsculas.

        $nombre = "Eva";
        $Nombre = "Cristina"; // Diferente a $nombre  
?>
