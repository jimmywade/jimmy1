<?php

class Request{

    private $db;

    function __construct() {
		require_once '../db/db_connect.php';
		$this->db = new db_connect();
		$this->db->connect();
	}

	function __destruct() {}

	public function login($QUERY){
		$Q = $QUERY;
		$result = mysqli_query($this->db->connect(), $Q);
		$registros = mysqli_num_rows($result);
        $rows = array();
        $r = mysqli_fetch_array($result);
        if($registros>0){
			$r["login"]=true;
			$rows[] = $r;
        }else{
			$r["login"]=false;
			$rows[] = $r;
        }
        echo json_encode($rows);
	}


	public function registrarNombre($Q){
		$result = mysqli_query($this->db->connect(), $Q);
		return $result;
	}


	public function consultar($Q) {
		$result = mysqli_query($this->db->connect(), $Q);
		$rows = array();
		while($r = mysqli_fetch_array($result)){
            $rows[] = $r;
        }
        echo json_encode($rows);
	}


    public function setRequestValue($decodedValue,$requestValue){
    	if($decodedValue){
            $value = $decodedValue;
            return $value; 
		}else if($requestValue){
		    $value = $requestValue;
		    return $value; 
		}else{
			return null;
		}
		
    }



}
?>