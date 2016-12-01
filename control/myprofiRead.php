<?php 


if(json_decode(file_get_contents("php://input"))){
	$data = json_decode(file_get_contents("php://input"));
	$esteToken=$data->esteToken;
}else{
	$esteToken=$_REQUEST['esteToken'];
}


require_once '../model/Estudiante.php';
$Estudiante = new Estudiante;
$estudiante = $Estudiante->myprofiRead($esteToken);


