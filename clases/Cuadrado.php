<?php

class Cuadrado extends FiguraGeometrica{
        
    // Constructor
    function __construct($tipoFigura, $lado1) {
        // Llama al constructor de la clase padre (FiguraGeometrica).
        parent::__construct($tipoFigura, $lado1);
    }

    // Cuadrado tiene la misma cantidad de Getters y Setters que la clase FiguraGeometrica.
    // Por lo tanto no hará falta añadirle más Getters o Setters.

    //CalcularArea y Calcular Perimetro
    function calcularArea(){
        $areaCua = $this->lado1 * $this->lado1;
        return $areaCua;
    }

    function calcularPerimetro(){
        $periCua = $this->lado1 * 4;
        return $periCua;
    }


    // toString 
    function __toString(){
        return "Area: " . $this->calcularArea() . "<br> Perímetro: " . $this->calcularPerimetro();
    }
    // Destructor
    function __destruct(){
        echo "Objeto destruido";
    }

}