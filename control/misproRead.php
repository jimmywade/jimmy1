<?php 

if(json_decode(file_get_contents("php://input"))){
	$data = json_decode(file_get_contents("php://input"));
	$esteEstudiante=$data->esteEstudiante;
}else{
	$esteEstudiante=$_REQUEST['esteEstudiante'];
}


require_once '../model/Estudiante.php';
$Estudiante = new Estudiante;
$estudiante = $Estudiante->misproRead($esteEstudiante);