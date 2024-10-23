document.addEventListener('DOMContentLoaded', function() {
    const selectElement = document.getElementById('figuras');
    const imageElement = document.querySelector('.forma img'); // Selecciona la imagen en el div

    selectElement.addEventListener('change', function() {
        const selectedValue = selectElement.value;

        switch (selectedValue) {
            case 'cuadrao':
                imageElement.src = './imgs/cuadrado.webp';
                break;
            case 'circulo':
                imageElement.src = './imgs/circulo.png';
                imageElement.classList.add("img-circulo");
                break;
            case 'triangulo':
                imageElement.src = './imgs/triangulo.png'; 
                break;
            case 'rectangulo':
                imageElement.src = './imgs/rectangulo.webp'; 
                break;
        }
    });
});