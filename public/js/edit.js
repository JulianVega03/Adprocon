let cerraredit = document.querySelectorAll(".cerraredit")[0];
let abriredit = document.querySelectorAll(".abriredit")[0];
let editar = document.querySelectorAll(".editar")[0];

// Aparte

abriredit.addEventListener("click", function(e){
	e.preventDefault();

	setTimeout(function(){
		editar.style.visibility = "visible";	
	},0)
});

cerraredit.addEventListener("click", function(e){
	e.preventDefault();

	setTimeout(function(){
		editar.style.visibility = "hidden";	
	},0)
});