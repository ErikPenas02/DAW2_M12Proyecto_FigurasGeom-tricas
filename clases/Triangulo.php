<?php

class Triangulo extends FiguraGeometrica{
    private $lado2;
    private $lado3;    
    // Constructor
    function __construct($tipoFigura, $lado1, $lado2, $lado3) {
        // Llama al constructor de la clase padre (FiguraGeometrica).
        parent::__construct($tipoFigura, $lado1);
        $this->lado2 = $lado2;
        $this->lado3 = $lado3;
    }

    // Getters
    function getLado2(){
        return $this->lado2;
    }

    function getLado3(){
        return $this->lado3;
    }

    // Setters
    function setLado2($lado2){
        $this->lado2 = $lado2;
    }
    function setLado2($lado2){
        $this->lado3 = $lado3;
    }

    //CalcularArea y Calcular Perimetro
    function calcularArea(){
        $a = $this->lado1;
        $b = $this->lado2;
        $c = $this->lado3;

        $s = ($a + $b + $c) / 2;
        $areaTri = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));;
        return $areaTri;
    }

    function calcularPerimetro(){
        $periTri = $this->lado1 + $this->lado2 + $this->lado3;
        return $periTri;
    }


    // toString 
    function __toString(){
        echo "Area: " . $this->calcularArea() . "<br> Perímetro: " . $this->calcularPerimetro();
    }
    // Destructor
    function __destruct(){
        echo "Objeto destruido";
    }

}



?>