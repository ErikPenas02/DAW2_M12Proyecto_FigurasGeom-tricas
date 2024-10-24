function cambiarFoto() {
    const selectElement = document.getElementById('figuras');
    const imageElement = document.querySelector('.forma img'); // Selecciona la imagen en el div

    
        const selectedValue = selectElement.value;

        switch (selectedValue) {
            case 'cuadrao':
                imageElement.src = './imgs/cuadrado.webp';
                break;
            case 'circulo':
                imageElement.src = './imgs/circulo.png';
                break;
            case 'triangulo':
                imageElement.src = './imgs/triangulo.png'; 
                break;
            case 'rectangulo':
                imageElement.src = './imgs/rectangulo.webp'; 
                break;
        }
    
};

function validarIndex(event) {
    sel = document.getElementById("figuras").value;
    if(sel === ""){
        alert("Por favor selecciona una figura");
        event.preventDefault();
    }
    return true;
}

function validarInput(){
    lados = document.getElementsByName("lado");
    span = document.getElementsByTagName("span");

    error = true;
    lados.forEach(lado => {
        if(lado.value === ""){
            span[0].textContent = "Por favor, introduzca un número";
            span[0].style.color = "red";
            error = false;
        } else{
            if(!(isNaN(lado.value))){
                error = true;
                if (lado.value > 100) {
                span[0].textContent = "No puede superar los 100cm";
                error = false;
                } else if (lado.value < 1){
                span[0].textContent = "Introduce un número positivo mayor que 0";
                error = false;
                }
            } else {
                span[0].textContent = "No es un número";
                error = false;
            }
        }

    });

    if(error){
        
    }else {
        
    }
    
    
    
    // if(lados.length = 2){
        
    //     lados.forEach(lado => {
    //         if(!(typeof lado == "number")){
    //             span.textContent = "Número no válido"
    //         }else if (lado > 100) {
    //             span.textContent = "No puede superar los 100cm"
    //         } else if (lado < 1){
    //             span.textContent = "Introduce un número positivo mayor a 0"
    //         }
    //     });
        
    // }



}