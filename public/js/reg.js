let cerrarreg = document.querySelectorAll(".cerrarreg")[0];
let abrirreg = document.querySelectorAll(".abrirreg")[0];
let regmanoobra = document.querySelectorAll(".regmanoobra")[0];

// Aparte

abrirreg.addEventListener("click", function(e){
	e.preventDefault();

	setTimeout(function(){
		regmanoobra.style.visibility = "visible";	
	},0)
});

cerrarreg.addEventListener("click", function(e){
	e.preventDefault();

	setTimeout(function(){
		regmanoobra.style.visibility = "hidden";	
	},0)
});