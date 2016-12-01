<?php
class Estudiante{

	private $db;

	function __construct() {
		require_once '../db/db_connect.php';
		$this->db = new db_connect();
		$this->db->connect();
	}

	function __destruct() {}


    private $sql;


    public function estudianteCreate($codigoEstudiante,$codigoInstitucion,$nombreEstudiante,$emailEstudiante,$passwordEstudiante,$imagenEstudiante){
    	$sql = "
        INSERT INTO estudiantes (codigoEstudiante,codigoInstitucion,nombreEstudiante,emailEstudiante,passwordEstudiante,imagenEstudiante)
        VALUES ('".$codigoEstudiante."','".$codigoInstitucion."','".$nombreEstudiante."','".$emailEstudiante."','".$passwordEstudiante."','".$imagenEstudiante."')
    	";
    	$result = mysqli_query($this->db->connect(), $sql);
        $rows = array();
        if($result==true){
        	$r['success']=1;
			$r['insertado']=true;
			$rows[] = $r;
        }else{
        	$r['success']=0;
			$r['insertado']=false;
			$rows[] = $r;
        }
	    echo json_encode($rows);
    }




    public function loginEstudiante($emailEstudiante, $passwordEstudiante) {
		$sql = " SELECT codigoEstudiante FROM estudiantes 
		WHERE emailEstudiante = '$emailEstudiante' 
		AND passwordEstudiante = '$passwordEstudiante'
		AND estadoEstudiante= 1
		";
		$result = mysqli_query($this->db->connect(), $sql);
        $rows = array();
			while($r = mysqli_fetch_array($result)){
				$r['success']=1;
                $rows[] = $r;
	        }
	    echo json_encode($rows);
	}




	public function myprofiRead($esteToken){
		$sql = " SELECT * FROM estudiantes,instituciones,ciudades,paises
		WHERE estudiantes.codigoEstudiante = '$esteToken'
		AND estudiantes.codigoInstitucion = instituciones.codigoInstitucion
		AND instituciones.codigoPais = paises.codigoPais 
		AND instituciones.codigoCiudad = ciudades.codigoCiudad 
		AND estudiantes.estadoEstudiante = 1
		";
		$result = mysqli_query($this->db->connect(), $sql);
        $rows = array();
			while($r = mysqli_fetch_array($result)){
				$r['success']=1;
                $rows[] = $r;
	        }
	    echo json_encode($rows);
	}




    /*
	public function misproRead_hh($esteEstudiante){
		$sql = "SELECT * FROM participantes,proyectos,imagenes,estudiantes
			WHERE participantes.codigoProyecto = proyectos.codigoProyecto 
			AND proyectos.codigoProyecto = imagenes.codigoProyecto
		    AND participantes.codigoEstudiante = '$esteEstudiante' 
			AND proyectos.estadoProyecto = 1
			AND participantes.estadoParticipante = 1
		    AND estudiantes.estadoEstudiante = 1 
		    ORDER BY proyectos.fechaProyecto DESC
		";
		$result = mysqli_query($this->db->connect(), $sql);
        $rows = array();
			while($r = mysqli_fetch_array($result)){
				$r['success']=1;
                $rows[] = $r;
	        }
	    echo json_encode($rows);
	}
    */



    /*
	public function misproRead_hh($esteEstudiante){
		$sql = "
		    SELECT * FROM participantes,proyectos,imagenes,estudiantes,instituciones,ciudades,paises
			WHERE estudiantes.codigoEstudiante = '$esteEstudiante'
			AND participantes.liderParticipante = 1
			AND participantes.codigoProyecto = proyectos.codigoProyecto
			AND proyectos.codigoProyecto = imagenes.codigoProyecto
			AND participantes.codigoEstudiante = estudiantes.codigoEstudiante
			AND estudiantes.codigoInstitucion = instituciones.codigoInstitucion
			AND instituciones.codigoCiudad = ciudades.codigoCiudad
			AND instituciones.codigoPais = paises.codigopais
			AND proyectos.estadoProyecto = 1
			ORDER BY fechaProyecto DESC
		";
		$result = mysqli_query($this->db->connect(), $sql);
        $rows = array();
			while($r = mysqli_fetch_array($result)){
				$r['success']=1;
                $rows[] = $r;
	        }
	    echo json_encode($rows);
	}
    */



    public function misproRead($codigoEstudiante){
		$sql = " 
		SELECT * FROM participantes,proyectos,temas,imagenes,estudiantes,instituciones,ciudades,paises
		WHERE participantes.liderParticipante = 1
		AND participantes.codigoProyecto = proyectos.codigoProyecto
		AND temas.codigoTema = proyectos.codigoTema
		AND proyectos.codigoProyecto = imagenes.codigoProyecto
		AND participantes.codigoEstudiante = estudiantes.codigoEstudiante
		AND estudiantes.codigoEstudiante = '$codigoEstudiante'
		AND estudiantes.codigoInstitucion = instituciones.codigoInstitucion
		AND instituciones.codigoCiudad = ciudades.codigoCiudad
		AND instituciones.codigoPais = paises.codigopais
		AND proyectos.estadoProyecto = 1
		ORDER BY fechaProyecto DESC
		";
		$result = mysqli_query($this->db->connect(), $sql);
        $rows = array();
			while($r = mysqli_fetch_array($result)){
                $rows[] = $r;
	        }
	        echo json_encode($rows);
    }






    public function picanteUpdate($img,$esteEstudiante){
        $sql = " UPDATE estudiantes
        SET imagenEstudiante='$img'
        WHERE codigoEstudiante='$esteEstudiante'
		";
		$result = mysqli_query($this->db->connect(), $sql);
        $rows = array();

        if($result==true){
        	$r['success']=1;
			$r['insertado']=true;
        }else{
        	$r['success']=0;
			$r['insertado']=false;
        }

	    echo json_encode($rows);
    }



}