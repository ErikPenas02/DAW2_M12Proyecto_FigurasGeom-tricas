<?php

class Circulo extends FiguraGeometrica{
        
    // Constructor
    function __construct($tipoFigura, $lado1) {
        // Llama al constructor de la clase padre (FiguraGeometrica).
        parent::__construct($tipoFigura, $lado1);
    }

    // Circulo tiene la misma cantidad de Getters y Setters que la clase FiguraGeometrica.
    // Por lo tanto no hará falta añadirle más Getters o Setters.

    //CalcularArea y Calcular Perimetro
    function calcularArea(){
        $areaCir =  pi() * pow($this->lado1, 2);
        $areaCir = round($areaCir, 2);
        return $areaCir;
    }

    function calcularPerimetro(){
        $periCir = 2 * pi() * $this->lado1;
        $periCir = round($periCir, 2);
        return $periCir;
    }


    // toString 
    function __toString(){
        return "Area: " . $this->calcularArea() . "<br> Perímetro: " . $this->calcularPerimetro();
    }
    // Destructor
    function __destruct(){
        echo "";
    }

}