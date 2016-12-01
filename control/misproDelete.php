<?php 


if(json_decode(file_get_contents("php://input"))){
	$data = json_decode(file_get_contents("php://input"));
    $codigoProyecto = $data->codigoProyecto;
    $codigoEstudiante = $data->codigoEstudiante;
}else{
    $codigoProyecto = $_REQUEST['codigoProyecto'];
    $codigoEstudiante = $_REQUEST['codigoEstudiante'];
}



echo $codigoProyecto;
echo '<br>';
echo $codigoEstudiante;
echo '<br>';


require_once '../model/Proyecto.php';
$model = new Proyecto;
$response = $model->proyectoDelete($codigoProyecto);



require_once '../model/Participante.php';
$Participante = new Participante;
$participante = $Participante->participanteDelete($codigoEstudiante,$codigoProyecto);

