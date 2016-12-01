<?php 


if(json_decode(file_get_contents("php://input"))){
	$data = json_decode(file_get_contents("php://input"));
    $codigoProyecto = $data->codigoProyecto;
    $nombreProyecto = $data->nombreProyecto;
    $codigoTema = $data->codigoTema;
    $problemaProyecto = $data->problemaProyecto;
    $objetivoProyecto = $data->objetivoProyecto;
    $especificoProyecto = $data->especificoProyecto;
    $resultadoProyecto = $data->resultadoProyecto;
    $actividadProyecto = $data->actividadProyecto;
    $beneficiarioProyecto = $data->beneficiarioProyecto;
    $areaProyecto = $data->areaProyecto;
    $valorProyecto = $data->valorProyecto;
    $duracionProyecto = $data->duracionProyecto;
}else{
    $codigoProyecto = $_REQUEST['codigoProyecto'];
    $nombreProyecto = $_REQUEST['nombreProyecto'];
    $codigoTema = $_REQUEST['codigoTema'];
    $problemaProyecto = $_REQUEST['problemaProyecto'];
    $objetivoProyecto = $_REQUEST['objetivoProyecto'];
    $especificoProyecto = $_REQUEST['especificoProyecto'];
    $resultadoProyecto = $_REQUEST['resultadoProyecto'];
    $actividadProyecto = $_REQUEST['actividadProyecto'];
    $beneficiarioProyecto = $_REQUEST['beneficiarioProyecto'];
    $areaProyecto = $_REQUEST['areaProyecto'];
    $valorProyecto = $_REQUEST['valorProyecto'];
    $duracionProyecto = $_REQUEST['duracionProyecto'];
}




require_once '../model/Proyecto.php';
$Proyecto = new Proyecto;
$proyecto = $Proyecto->proyectoUpdate($codigoProyecto,$nombreProyecto,$codigoTema,$problemaProyecto,$objetivoProyecto,$especificoProyecto,$resultadoProyecto,$actividadProyecto,$beneficiarioProyecto,$areaProyecto,$valorProyecto,$duracionProyecto);

