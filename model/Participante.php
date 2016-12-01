<?php
	class Participante{

		private $db;

		function __construct() {
			require_once '../db/db_connect.php';
			$this->db = new db_connect();
			$this->db->connect();
		}

		function __destruct() {}


	    private $sql;





	    public function participanteCreate($codigoParticipante,$codigoEstudiante,$codigoProyecto){
	    	$sql = "
		    INSERT INTO participantes (codigoParticipante, codigoEstudiante, codigoProyecto, aceptadoParticipante, liderParticipante) 
		    VALUES ('".$codigoParticipante."','".$codigoEstudiante."','".$codigoProyecto."','1','1')
	    	";
	    	
			$result = mysqli_query($this->db->connect(), $sql);
			var_dump($result);

	    }



		public function participanteDelete($codigoEstudiante,$codigoProyecto){
			$sql = "
			UPDATE participantes
            SET estadoParticipante='0'
			WHERE codigoEstudiante='$codigoEstudiante'
            AND codigoProyecto='$codigoProyecto' 

	    	";
			$result = mysqli_query($this->db->connect(), $sql);
			var_dump($result);
		}









	}