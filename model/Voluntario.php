<?php
class Sql{

	function ___construct(){}

	function ___destruct(){}


    private $sql;

    public function proyectosRead(){
		$sql = " SELECT * FROM proyectos,imagenes 
		WHERE proyectos.codigoProyecto = imagenes.codigoProyecto 
		AND proyectos.estadoProyecto = 1 
		ORDER BY proyectos.fechaProyecto DESC
		";
		return $sql;
    }


    public function loginEstudiante($emailEstudiante, $passwordEstudiante) {
		$sql = " SELECT * FROM estudiantes 
		WHERE emailEstudiante = '$emailEstudiante' 
		AND passwordEstudiante = '$passwordEstudiante' 
		";
		return $sql;
	}


	public function defaultValue($table,$columna,$valor){
		$sql = "ALTER TABLE '$table' ALTER COLUMN '$columna' SET DEFAULT '$valor'";
		return $sql;
	}

}