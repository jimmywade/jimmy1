<?php

	require_once '../model/Proyecto.php';
	$model = new Proyecto;
	$response = $model->proyectoRead();

?>