<?php


//setar codigo
require_once '../control/Date.php';
$Date = new Date;
$date = $Date -> joinDateTime();

require_once '../control/Aleatorio.php';
$Random = new Aleatorio;
$random = $Random ->setRandom();


$codigoVoluntario = 'vol-'.$date.$random;

if(json_decode(file_get_contents("php://input"))){
	$data = json_decode(file_get_contents("php://input"));
	$idPais = $data->idPais; 
	$idCiudad = $data->idCiudad; 
	$nombreVoluntario = $data->nombreVoluntario;
	$identificacionVoluntario = $data->identificacionVoluntario;
	$telefonoVoluntario = $data->telefonoVoluntario; 
	$direccionVoluntario = $data->direccionVoluntario; 
	$emailVoluntario  = $data->emailVoluntario;
	$passwordVoluntario = $data->passwordVoluntario;
	$imagenVoluntario = 'default.png'; 
}else{
	$idPais = $_REQUEST['idPais'];
	$idCiudad = $_REQUEST['idCiudad'];
	$nombreVoluntario = $_REQUEST['nombreVoluntario'];
	$identificacionVoluntario = $_REQUEST['identificacionVoluntario'];
	$telefonoVoluntario = $_REQUEST['telefonoVoluntario'];
	$direccionVoluntario = $_REQUEST['direccionVoluntario'];
	$emailVoluntario  = $_REQUEST['emailVoluntario'];
	$passwordVoluntario = $_REQUEST['passwordVoluntario'];
	$imagenVoluntario = 'default.png'; 
}


require_once '../model/Voluntario.php';
$model = new Voluntario;
$response = $model->voluntarioCreate(
	$codigoVoluntario,
	$idPais,
	$idCiudad,
	$nombreVoluntario,
	$identificacionVoluntario,
	$telefonoVoluntario,
	$direccionVoluntario,
	$emailVoluntario,
	$passwordVoluntario,
	$imagenVoluntario
	);

?>