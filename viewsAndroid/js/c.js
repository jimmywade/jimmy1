

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
