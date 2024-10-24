<?php
echo "<link rel='stylesheet' href='styles.css'>";
echo "<script type='text/javascript' src='funciones.js'></script>";
echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
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
    echo "<form action='calcular.php' method='post' onsubmit='validarInputs(event);'>";
    if (array_key_exists($figuraelegida, $imgs)){
        echo "Has elegido: " . htmlspecialchars($figuraelegida) . "<br>";
        echo "<img src='$imgs[$figuraelegida]' alt='' style='width: 250px; height: 250px; margin-top: 10px; margin-bottom: 10px;'><br>";

        
        switch ($figuraelegida){
            case 'cuadrao':
                
                echo "<label for=''> Para medir el perímetro y el área necesitaremos un lado de la figura (en cm):</label>";
                echo "<input type='text' name='lado[]' class='ladofig' id='inputCua' onblur='validarInput(this);' onkeyup='validarInput(this);'>";
                echo "<span name='inputCua'></span><br>";
                echo "<input type='submit' name='ladoCuadrado' value='Calcular'>";
                break;

            case 'circulo':
                
                echo "<label for=''> Para medir el perímetro y el área necesitaremos el radio del círculo (en cm):</label>";
                echo "<input type='text' name='lado[]' class='ladofig' id='inputCir' onblur='validarInput(this);' onkeyup='validarInput(this);'>";
                echo "<span name='inputCir'></span><br>";
                echo "<input type='submit' name='radioCirculo' value='Calcular'>";
                
                break;
            case 'triangulo':

                echo "<label for=''> Para medir el perímetro y el área necesitaremos 3 lados (en cm):</label><br><br>";
                echo "<input type='text' name='lado[]' class='ladofig' id='inputTri1' onblur='validarInput(this);' onkeyup='validarInput(this);'><span name='inputTri1'></span><br><br>";
                echo "<input type='text' name='lado[]' class='ladofig' id='inputTri2' onblur='validarInput(this);' onkeyup='validarInput(this);'><span name='inputTri2'></span><br><br>";
                echo "<input type='text' name='lado[]' class='ladofig' id='inputTri3' onblur='validarInput(this);' onkeyup='validarInput(this);'><span name='inputTri3'></span><br><br>";
                echo "<input type='submit' name='ladoTriangulo' value='Calcular'>";

                break;
            case 'rectangulo';

                echo "Para medir el perímetro y el área necesitaremos 2 lados de la figura (en cm):";
                echo "<input type='text' name='lado[]' class='ladofig' id='inputRec1' onblur='validarInput(this);' onkeyup='validarInput(this);'><span name='inputRec1'></span><br>";
                echo "<input type='text' name='lado[]' class='ladofig' id='inputRec2' onblur='validarInput(this);' onkeyup='validarInput(this);'><span name='inputRec2'></span><br>";
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

