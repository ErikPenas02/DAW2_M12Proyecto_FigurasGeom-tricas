<?php

class FiguraGeometrica{
    public $tipoFigura;
    public $lado1;
    
    // Constructor
    function __construct($tipoFigura, $lado1){
        $this->tipoFigura = $tipoFigura;
        $this->lado1 = $lado1;
    }

    // Getters
    function getNombre(){
        return $this->tipoFigura;
    }

    function getLado1(){
        return $this->lado1;
    }

    // Setters
    function setNombre($tipoFigura){
        $this->tipoFigura = $tipoFigura;
    }
    function setLado1($lado1){
        $this->lado1 = $lado1;
    }

    // Destructor
    function __destruct(){
        echo "Objeto destruido";
    }

}





?>