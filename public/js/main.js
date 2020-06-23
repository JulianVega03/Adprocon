let cerrar = document.querySelectorAll(".cerrar")[0];
let abrir = document.querySelectorAll(".abrir")[0];
let modal = document.querySelectorAll(".modal")[0];
// let sublista = document.querySelectorAll(".sublista")[0];
let sublista2 = document.querySelectorAll(".sublista2")[0];
let sublista3 = document.querySelectorAll(".sublista3")[0];
let abrircontrolconcretos = document.querySelectorAll(".abrir-controlconcretos")[0];
let abrirmanoDeObra = document.querySelectorAll(".abrir-manoDeObra")[0];
let abrirControlAlquiler = document.querySelectorAll(".abrir-ControlAlquiler")[0];



// abrircontrolconcretos.addEventListener("click", function(e){
// 	e.preventDefault();

// 	if(sublista.style.height == "78px"){
// 		sublista.style.height = "0px";
// 	} else {
// 		sublista.style.height = "78px";
// 	}

// 	if(sublista2.style.height == "78px" || sublista3.style.height == "78px"){
// 		sublista2.style.height = "0px";
// 		sublista3.style.height = "0px";
// 	}
// });

abrirmanoDeObra.addEventListener("click", function(e) {
    e.preventDefault();

    if (sublista2.style.height == "78px") {
        sublista2.style.height = "0px";
    } else {
        sublista2.style.height = "78px";
    }

    if (sublista.style.height == "78px" || sublista3.style.height == "78px") {
        sublista.style.height = "0px";
        sublista3.style.height = "0px";
    }
});

abrirControlAlquiler.addEventListener("click", function(e) {
    e.preventDefault();

    if (sublista3.style.height == "78px") {
        sublista3.style.height = "0px";
    } else {
        sublista3.style.height = "78px";
    }

    if (sublista.style.height == "78px" || sublista2.style.height == "78px") {
        sublista.style.height = "0px";
        sublista2.style.height = "0px";
    }
});

// Aparte

abrir.addEventListener("click", function(e) {
    e.preventDefault();

    setTimeout(function() {
        modal.style.visibility = "visible";
    }, 0)
});

cerrar.addEventListener("click", function(e) {
    e.preventDefault();

    setTimeout(function() {
        modal.style.visibility = "hidden";
    }, 0)
});