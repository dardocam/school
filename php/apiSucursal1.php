<?php

require_once('configuracion.php');
$url = "http://localhost/olimpo/sucursal1.php";
$data = file_get_contents($url);
$_SESSION['data']=$data;
header('Location: http://localhost/school/')
exit;
?>
