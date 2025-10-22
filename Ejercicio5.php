<?php

//Ejercicio 5 (clases, herencia)

//1. Defina una clase Coche que tenga las propiedades marca, modelo y año. Agregue un método acelerar()que imprima "El coche está acelerando".

class Coche {

    //Propiedades
    public $marca;
    public $modelo;
    public $anio;

        //Constructor
    public function __construct($marca, $modelo, $anio) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->anio = $anio;
    }
    //Metodo
    public function acelerar() {
        echo "El coche está acelerando";
    }
}

//Instancia de la clase Coche
$oCoche = new Coche("Toyota", "Corolla", 2020);
$oCoche->acelerar(); // Llamada al método acelerar

//2. Crea una clase Electrodomestico con las propiedades nombrey precio. Luego, crea una clase Lavadoraque herede Electrodomesticoy tenga un método lavar().

class Electrodomestico {

    //Propiedades
    public $nombre;
    public $precio;

        //Constructor
    public function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

}
class Lavadora extends Electrodomestico {

    //Metodo
    public function lavar() {
        echo "La lavadora está lavando";
    }
}

$oLavadora = new Lavadora("LG", 500);
$oLavadora->lavar(); // Llamada al método lavar


//3. Definir una clase Animal con un método hacerSonido(). Luego, crea una clase Gatoque herede Animaly sobrescribe el método hacerSonido()para que imprima "El gato maúlla".




?>