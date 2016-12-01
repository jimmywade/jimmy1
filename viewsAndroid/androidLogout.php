<?php

session_start();
$codigo = $_SESSION['codigo'];

header('Location: androidLogin.php');
exit();

?>