<?php

require_once 'Date.php';

$fecha = new Date();
$FECHA = $fecha -> joinDateTime();


require_once 'Aleatorio.php';
$aleatorio = new Aleatorio();
$ALEATORIO = $aleatorio -> setRandom();
$codigoUsuario = $FECHA.$ALEATORIO;
$nombreUsuario = $_REQUEST['nombre_usuario'];
$emailUsuario = $_REQUEST['email_usuario'];
$entidadUsuario = $_REQUEST['entidad_usuario'];
$fec = new Date;
$fechaUsuario = $fec -> estaFecha();
$horaUsuario = '04:38 PM';//$_REQUEST['hora_usuario'];
$passwordUsuario = $_REQUEST['password_usuario'];
$imagenUsuario = 'defecto.jpg';//$_REQUEST['imagen_usuario'];
$profileImageUsuario = null; //$_FILES['profile_image_usuario'];

require_once '../model/model_usuarios.php';
$model_usuarios = new model_usuarios;
$user_usuario = $model_usuarios->existeUsuario($emailUsuario);
if($user_usuario){
	$response["Success"] = 0;
	$response["Mensaje_Error"] = "Error: Email ya registrado";
	echo json_encode($response);

}else {
    $model_usuarios = new model_usuarios;
	$user_usuario_entidad = $model_usuarios->buscarCodigoEntidad($entidadUsuario);

	if($user_usuario_entidad) {
		$codigoEntidad = $user_usuario_entidad["codigoEntidades"];
	
		if ($imagenUsuario == "null" || $profileImageUsuario == null) {
			$imagenUsuario = "defecto.png";
		} else if ($profileImageUsuario != null) {
			$imagePath = "../utilities/images/usuarios/";
			$imagePath = $imagePath . basename($_FILES['profile_image_usuario']['name']);

			if(move_uploaded_file($_FILES['profile_image_usuario']['tmp_name'], $imagePath)){}
		}

		$user_usuario = $model_usuarios->registrarUsuario($codigoUsuario, $nombreUsuario, $emailUsuario, $codigoEntidad, $fechaUsuario, $horaUsuario, $passwordUsuario, $imagenUsuario);
		if ($user_usuario) {
			//$response["Codigo_Usuario"] = $user_usuario["codigoUsuarios"];
			//$response["Nombre_Usuario"] = $user_usuario["nombreUsuarios"];
			//echo json_encode($response);
		    header('Location: ../viewsAndroid/androidLogin.php');
            exit();
		} else {
            header('Location: ../viewsAndroid/androidLogin.php');
            exit();

		}





			






	}

}







?>