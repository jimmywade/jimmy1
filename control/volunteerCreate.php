<?php


//setar codigo
require_once '../control/Date.php';
$Date = new Date;
$date = $Date -> joinDateTime();

require_once '../control/Aleatorio.php';
$Random = new Aleatorio;
$random = $Random ->setRandom();


$codigoEstudiante = 'est-'.$date.$random;

if(json_decode(file_get_contents("php://input"))){
	$data = json_decode(file_get_contents("php://input"));
	$codigoInstitucion = $data->codigoInstitucion; 
	$nombreEstudiante = $data->nombreEstudiante; 
	$emailEstudiante  = $data->emailEstudiante;
	$passwordEstudiante = $data->passwordEstudiante;
	$imagenEstudiante = 'default.png'; 
}else{
	$codigoInstitucion = $_REQUEST['codigoInstitucion'];
	$nombreEstudiante = $_REQUEST['nombreEstudiante'];
	$emailEstudiante  = $_REQUEST['emailEstudiante'];
	$passwordEstudiante = $_REQUEST['passwordEstudiante'];
	$imagenEstudiante = 'default.png'; 
}


require_once '../model/volunteer.php';
$model = new volunteer;
$response = $model->volunteerCreate(
	$codigoEstudiante,
	$codigoInstitucion,
	$nombreEstudiante,
	$emailEstudiante,
	$passwordEstudiante,
	$imagenEstudiante
	);

?>