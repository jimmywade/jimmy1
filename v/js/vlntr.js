

/*
//falta detectar cuando se pulsa el boton atras
//puede ser con una cookie javascript que muera cuando se abandone la pagina
//y se monitorea cada segundo para ver si murio cuando muera es porque la url cambio
if(history.forward(1)){
location.replace(history.forward(1))
}
*/


function cambiarcont(contenido) {
	alert('agarro el onclick');
    $("#conten").load(contenido);
}


function resetForm(nombreForm){
	document.forms[nombreForm].reset();
}



function on_off(a,b){
	var detailesA = document.getElementById(a);
	var detailesB = document.getElementById(b);
	var details2 = detailesB.style.display;
	var details3 = "none";
	if (details2 == details3){
		detailesB.style.display = "block";
		detailesA.style.display = "none";
	}
	var details5 = "block";
	if (details2 == details5){
		detailesB.style.display = "none"; detailesA.style.display = "block";
	}	
}



function on_off(a,b){
	var detailesA = document.getElementById(a);
	var detailesB = document.getElementById(b);
	var details2 = detailesB.style.display;
	var details3 = "none";
	if (details2 == details3){
		detailesB.style.display = "block";
		detailesA.style.display = "none";
	}
	var details5 = "block";
	if (details2 == details5){
		detailesB.style.display = "none"; detailesA.style.display = "block";
	}	
}


function on(element){
	var elemento = document.getElementById(element);
		elemento.style.display = "block";
}


function off(elem){
	var elemto = document.getElementById(elem);
	    elemto.style.display = "none";
}


function single(c){
	alert('single');
	var elElemento = document.getElementById(c);
	var laPropiedad = elElemento.style.display;
	var apagado = "none";
	var prendido = "block";
	if (laPropiedad == apagado){elElemento.style.display = "block";}
	if (laPropiedad == prendido){elElemento.style.display = "none";}
}


function last(){
	location.reload();
}


function irA(dir){ 
    location.href = dir; 
}  

