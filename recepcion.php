<?php
    // echo "<link rel='stylesheet' href='styles.css'>";

session_start();

if(isset($_POST["figuras"])){
    $figuraelegida = $_POST["figuras"];
    $_SESSION["figura"] = htmlspecialchars($figuraelegida);
    // Array que asocia la elección con las respectivas imágenes de cada figura
    $imgs = [
        'cuadrao' => "./imgs/cuadrado.webp",
        'circulo' => "./imgs/circulo.png",
        'triangulo' => "./imgs/triangulo.png",
        'rectangulo' => "./imgs/rectangulo.webp"
    ];
    
    echo "<form action='calcular.php' method='post'>";
    if (array_key_exists($figuraelegida, $imgs)){
        echo "Has elegido: " . htmlspecialchars($figuraelegida) . "<br>";
        echo "<img src='$imgs[$figuraelegida]' alt='' style='width: 250px; height: 250px; margin-top: 10px; margin-bottom: 10px;'><br>";

        
        switch ($figuraelegida){
            case 'cuadrao':
                
                echo "<label for=''> Para medir el perímetro y el área necesitaremos un lado de la figura (en cm):</label>";
                echo "<input type='number' name='' id=''>";
                echo "<input type='submit' name='ladoCuadrado' value='Calcular'>";
                
                break;
            case 'circulo':
                
                echo "<label for=''> Para medir el perímetro y el área necesitaremos el radio del círculo (en cm):</label>";
                echo "<input type='number' name='' id=''>";
                echo "<input type='submit' name='radioCirculo' value='Calcular'>";
                
                break;
            case 'triangulo':

                echo "<label for=''> Para medir el perímetro y el área necesitaremos 1 lado (equilátero), 2 (isósceles) o 3 (escaleno) (en cm):</label><br><br>";
                echo "<input type='number' name='' id=''><br><input type='number' name='' id=''><br><input type='number' name='' id=''><br>";
                echo "<input type='submit' name='ladoTriangulo' value='Calcular'>";

                break;
            case 'rectangulo';

                echo "Para medir el perímetro y el área necesitaremos 2 lados de la figura (en cm):";
                echo "<input type='number' name='' id=''><input type='number' name='' id=''>";
                echo "<input type='submit' name='ladoRectangulo' value='Calcular'>";

                break;
        }
        echo "</form>"; 
    } else {
        echo "Has elegido una figura no válida";
    }
} else {
    header("Location: index.php");
    exit();
}





?>