<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><script src="./funciones.js" type="text/javascript"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="header"></div>
<form action="recepcion.php" method="post">
    <div>
        <div class="forma">
            <label for="" class="textoforma">Cuadrado</label><br>
            <img src="./imgs/cuadrado.webp" alt=""><br>
        </div>
        <select name="figuras" id="figuras">
            <option value="cuadrao">Cuadrado</option>
            <option value="circulo">Círculo</option>
            <option value="triangulo">Triángulo</option>
            <option value="rectangulo">Rectángulo</option>
        </select>
    </div>
    <div class="submit"><input type="submit" value="Elegir"></div>
</form>

    <?php

    ?>
</body>
</html>