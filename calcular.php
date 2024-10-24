<?php
include_once "./clases/Figuras.php";
include_once "./clases/Cuadrado.php";
include_once "./clases/Circulo.php";
include_once "./clases/Triangulo.php";
include_once "./clases/Rectangulo.php";

session_start();

if (isset($_GET['destruir'])) {
    session_unset();
    session_destroy();
    header("Location: index.php");
}

    $_SESSION["lado"] = $_POST["lado"];
    $lado = $_SESSION["lado"];

    $figura = $_SESSION["figura"];
    
    switch($figura){
        case 'cuadrao':
            $cuadrado = new Cuadrado($figura, $lado[0]);
            echo "Datos del Cuadrado escogido:<br>";
            echo $cuadrado;
            echo "<br>";
        break;

        case 'circulo':
            $circulo = new Circulo($figura, $lado[0]);
            echo "Datos del Circulo escogido:<br>";
            echo $circulo;
            echo "<br>";
        break;

        case 'triangulo':
            $triangulo = new Triangulo($figura, $lado[0], $lado[1], $lado[2]);
            echo "Datos del Triangulo escogido: ";
            echo "<br>";
            echo $triangulo;
            echo "<br>";
        break;

        case 'rectangulo':
            $rectangulo = new Rectangulo($figura, $lado[0], $lado[1]);
            echo "Datos del Rectangulo escogido: ";
            echo "<br>";
            echo $rectangulo;
            echo "<br><br>";
        break;
    }
// }
echo "<button type='button' onclick=\"location.href='./calcular.php?destruir=true'\">Cerrar Sesión</button><br><br>";