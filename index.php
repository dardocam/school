<!DOCTYPE html>
<html lang="es">
	<head>
	  <?php
	  	require_once('php/configuracion.php');
			if(!isset($_SESSION)) {
			  session_start();
			}
	  ?>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta http-equiv="x-ua-compatible" content="ie=edge">
	  <meta name="description" content="EEST3NECOCHEA; Necochea; Aplicaciones Web's Dinámicas">
	  <title>EEST N3 - APP USUARIOS - NECOCHEA</title>
	  <!-- Archivo de estilos para configurar valores iniciales -->
	  <link rel="stylesheet" href=<?= HOME_URL."css/reset.css"?>>
	  <!-- Archivo de estilos CSS -->
	  <link rel="stylesheet" href=<?= HOME_URL."css/index.css" ?>>
		<link rel="stylesheet" href=<?= HOME_URL."css/login.css" ?>>
	</head>
	<body>

<!-- Html-open insertado con PHP --->
<?php
	if (isset($_SESSION["username"])) {
		require 'views/homeView.php';
	}else{
		require 'views/loginView.php';
	}
?>
<!-- Html-closed insertado con PHP -->
	</body>
</html>
