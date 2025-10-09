<?php
   //Ejercicio 4
   //Utilice una estructura condicional if-else para verificar si un número es positivo, negativo o cero.

      $numero = -6;
      // Estructura condicional if-else
      if ($numero > 0) {
         echo "El número $numero es positivo.";
      } elseif ($numero < 0) {
         echo "El número $numero es negativo.";
      } else {
         echo "El número es cero.";
      }
      echo "<br>";

   //Utilice un bucle for para imprimir los números del 1 al 10.
   
      for($num=1; $num<=10; $num++){
         echo $num;
      }
      echo "<br>";

   //Utilice un bucle while que sume los números del 1 al 100 y muestre el resultado.

      $num2 = 1;
      $suma = 0;

      while($num2 <= 100){
         $suma += $num2; // Acumula el valor de $num2
         $num2++; // Incrementa $num2 en 1
      }
      echo "La suma total es: " . $suma; //Muestra por pantalla la suma total
      echo "<br>";
   
   //Utilice switch para mostrar el día de la semana basado en un número (1-7).

      $dia = 4; // Número del día (1-7)

      switch ($dia) {
         case 1:
            echo "Lunes";
            break;
         case 2:
            echo "Martes";
            break;
         case 3:
            echo "Miércoles";
            break;
         case 4:
            echo "Jueves";
            break;
         case 5:
            echo "Viernes";
            break;
         case 6:
            echo "Sábado";
            break;
         case 7:
            echo "Domingo";
            break;
         default:
            echo "Número de día inválido";
            break;
      }
      echo "<br>";

   //Cree un array de nombres y use foreach para imprimir cada nombre.

      $ArrayNombres=["Eva", "Fernando", "Cristina"];

      foreach($ArrayNombres as $nombres){
         echo $nombres . "<br>";
      }

   
   
?>
