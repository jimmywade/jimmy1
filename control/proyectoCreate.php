<?php


//setar codigo
require_once '../control/Date.php';
$Date = new Date;
$date = $Date -> joinDateTime();

require_once '../control/Aleatorio.php';
$Random = new Aleatorio;
$random = $Random ->setRandom();



$codigoProyecto = 'pro-'.$date.$random;

if(json_decode(file_get_contents("php://input"))){
	$data = json_decode(file_get_contents("php://input"));


	$codigoEstudiante = $data->codigoEstudiante;
	//echo $codigoEstudiante.'<br>';
	$elegidoTema = $data->elegidoTema;
	//echo $elegidoTema.'<br>';
	$nombreProyecto = $data->nombreProyecto;
    //echo $nombreProyecto.'<br>';

	$problemaProyecto = $data->problemaProyecto;
	//echo $problemaProyecto.'<br>';
	$objetivoProyecto = $data->objetivoProyecto;
	//echo $objetivoProyecto.'<br>';
	$especificoProyecto = $data->especificoProyecto;
    //echo $especificoProyecto.'<br>';

	$actividadProyecto = $data->actividadProyecto;
    //echo $actividadProyecto.'<br>';
	$resultadoProyecto = $data->resultadoProyecto;
    //echo $resultadoProyecto.'<br>';
	$valorProyecto = $data->valorProyecto;
    //echo $valorProyecto.'<br>';

	$beneficiarioProyecto = $data->beneficiarioProyecto;
    //echo $beneficiarioProyecto.'<br>';
	$areaProyecto = $data->areaProyecto;
	//echo $areaProyecto.'<br>';
    //echo 'duracion proyecto: ';
    $duracionProyecto=$data->duracionProyecto;
    //echo $duracionProyecto;


}else{
	$codigoEstudiante = $_REQUEST['codigoEstudiante'];
	$elegidoTema = $_REQUEST['elegidoTema'];
	$nombreProyecto = $_REQUEST['nombreProyecto'];

	$problemaProyecto = $_REQUEST['problemaProyecto'];
	$objetivoProyecto = $_REQUEST['objetivoProyecto'];
	$especificoProyecto = $_REQUEST['especificoProyecto'];

	$actividadProyecto = $_REQUEST['actividadProyecto'];
	$resultadoProyecto = $_REQUEST['resultadoProyecto'];
	$valorProyecto = $_REQUEST['valorProyecto'];

	$beneficiarioProyecto = $_REQUEST['beneficiarioProyecto'];
	$areaProyecto = $_REQUEST['areaProyecto'];
	$duracionProyecto = $_REQUEST['duracionProyecto'];
}




require_once '../model/Proyecto.php';
$model = new Proyecto;
$response = $model->proyectoCreate(
	    $codigoProyecto,
		$elegidoTema,
		$nombreProyecto,
		$problemaProyecto,
		$objetivoProyecto,
		$especificoProyecto,
		$actividadProyecto,
		$resultadoProyecto,
		$beneficiarioProyecto,
		$areaProyecto,
		$valorProyecto,
		$duracionProyecto);




$codigoParticipante = 'par-'.$date.$random;

require_once '../model/Participante.php';
$Participante = new Participante;
$participante = $Participante->participanteCreate($codigoParticipante, $codigoEstudiante, $codigoProyecto);





$codigoImagen = 'img-'.$date.$random;
$nombreImagen = 'default.jpg';

require_once '../model/Imagen.php';
$Imagen = new Imagen;
$imagen = $Imagen->imagenCreate($codigoImagen,$codigoProyecto,$nombreImagen);



?>