<?php

if(json_decode(file_get_contents("php://input"))){
	$data = json_decode(file_get_contents("php://input"));
	$emailEstudiante=$data->emailEstudiante;
	$passwordEstudiante=$data->passwordEstudiante;
}else{
	$emailEstudiante=$_REQUEST['emailEstudiante'];
	$passwordEstudiante=$_REQUEST['passwordEstudiante'];
}

require_once '../model/Estudiante.php';
$Estudiante = new Estudiante();
$ESTUDIANTE = $Estudiante->loginEstudiante($emailEstudiante, $passwordEstudiante);


?>