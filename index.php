<?php


$user = $_REQUEST['user'];

if($user == 'student'){
header ("Location: views/");	
}else if($user == 'other'){
header ("Location: v/voluntariado");	
}


?>