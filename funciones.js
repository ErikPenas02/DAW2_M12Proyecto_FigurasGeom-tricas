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

function validarInputs(event){
    
    lados = document.getElementsByName("lado[]");
    span = document.getElementsByTagName("span");

    error = false;
    contador = 0;
    lados.forEach(lado => {
        span[contador].textContent = "";
        span[contador].style.color = "red";

        if(lado.value === ""){
            span[contador].textContent = "Por favor, introduzca un número";
            error = true;
        } else{
            if(!(isNaN(lado.value))){
                if (lado.value > 100) {
                span[contador].textContent = "No puede superar 100";
                error = true;
                } else if (lado.value < 1){
                span[contador].textContent = "Introduce un número positivo (mayor que 0)";
                error = true;
                }
            } else {
                span[contador].textContent = "No es un número";
                error = true;
            }
        }
        contador++;
    });

    if(error){
        // Swal.fire({
        //     icon: "error",
        //     title: "Oops...",
        //     text: "Something went wrong!",
        //   });
        event.preventDefault();
    }

}

function validarInput(input){
    span = document.getElementsByName(input.id)
    span[0].textContent = "";
    span[0].style.color = "red";

    if(input.value === ""){
        span[0].textContent = "Por favor, introduzca un número";
    } else{
        if(!(isNaN(input.value))){
            if (input.value > 100) {
            span[0].textContent = "No puede superar los 100cm";
            } else if (input.value < 1){
            span[0].textContent = "Introduce un número positivo mayor que 0";
            }
        } else {
            span[0].textContent = "No es un número";
        }
    }
}
