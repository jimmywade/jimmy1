<?php 



//setar codigo
require_once '../control/Date.php';
$Date = new Date;
$date = $Date -> joinDateTime();

require_once '../control/Aleatorio.php';
$Random = new Aleatorio;
$random = $Random ->setRandom();





$codigoTema = 'tem-'.$date.$random;

if(json_decode(file_get_contents("php://input"))){
	$data = json_decode(file_get_contents("php://input"));
}

$NombreTema = new Request();
$nombreTema = $NombreTema -> setRequestValue($data->nombreTema,$_REQUEST['nombreTema']);

require_once '../model/Especifico.php';

$Tema = new Tema;
$tema = $Tema->temaCreate($codigoEspecifico,$nombreTema);


