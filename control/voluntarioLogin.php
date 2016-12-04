<?php

if(json_decode(file_get_contents("php://input"))){
	$data = json_decode(file_get_contents("php://input"));
	$emailVoluntario=$data->emailVoluntario;
	$passwordVoluntario=$data->passwordVoluntario;
}else{
	$emailVoluntario=$_REQUEST['emailVoluntario'];
	$passwordVoluntario=$_REQUEST['passwordVoluntario'];
}

require_once '../model/Voluntario.php';
$Voluntario = new Voluntario();
$VOLUNTARIO = $Voluntario->loginVoluntario($emailVoluntario, $passwordVoluntario);


?>