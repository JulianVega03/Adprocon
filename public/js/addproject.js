let cerrar = document.querySelectorAll(".cerrar")[0];
let abrir = document.querySelectorAll(".abrir")[0];
let modal = document.querySelectorAll(".modal")[0];

// Aparte

abrir.addEventListener("click", function(e){
	e.preventDefault();

	setTimeout(function(){
		modal.style.visibility = "visible";	
	},0)
});

cerrar.addEventListener("click", function(e){
	e.preventDefault();

	setTimeout(function(){
		modal.style.visibility = "hidden";	
	},0)
});