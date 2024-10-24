<?php

class Rectangulo extends FiguraGeometrica{
    public $lado2;    
    // Constructor
    function __construct($tipoFigura, $lado1, $lado2) {
        // Llama al constructor de la clase padre (FiguraGeometrica).
        parent::__construct($tipoFigura, $lado1);
        $this->lado2 = $lado2;
    }

    // Getters
    function getLado2(){
        return $this->lado2;
    }

    // Setters
    function setLado2($lado2){
        $this->lado2 = $lado2;
    }

    //CalcularArea y Calcular Perimetro
    function calcularArea(){
        $areaRec = $this->lado1 * $this->lado2;
        return $areaRec;
    }

    function calcularPerimetro(){
        $periRec = ($this->lado1 * 2) + ($this->lado2 * 2);
        return $periRec;
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