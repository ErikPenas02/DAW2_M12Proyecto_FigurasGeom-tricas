<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><script src="./funciones.js" type="text/javascript"></script>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="header"></div>
<form action="recepcion.php" method="post" onsubmit="validarIndex(event);">
    <div>
        <div class="forma">
            <label for="" class="textoforma">Cuadrado</label><br>
            <img src="./imgs/cuadrado.webp" class="img-circulo" alt=""><br>
        </div>
        <select class="form-select form-select-sm" name="figuras" id="figuras" onchange="cambiarFoto();">
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