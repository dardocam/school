<!DOCTYPE html>
<html lang="es">
	<head>
	  <?php
	  	require_once('php/configuracion.php');
	  ?>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta http-equiv="x-ua-compatible" content="ie=edge">
	  <meta name="description" content="Olimpiadas2021; Programación; EEST3NECOCHEA; Necochea; Aplicaciones Web's Dinámicas">
	  <title>EEST N3 - OLIMPIADAS DE PROGRAMACION 2021 - NECOCHEA</title>
	  <!-- Archivo de estilos para configurar valores iniciales -->
	  <link rel="stylesheet" href="css/reset.css">
	  <!-- Archivo de estilos CSS -->
	  <link rel="stylesheet" href="css/index.css">

	</head>
	<body>

<!-- Html-open insertado con PHP --->

<!-- Html-open insertado con PHP -->

<?php
	if (isset($_SESSION["username"])) {
		echo	"<link rel='stylesheet' href='css/home.css' />";
		require 'views/homeView.php';
	}else{
		echo	"<link rel='stylesheet' href='css/login.css' />";
		require 'views/loginView.php';
	}
?>
<!-- Html-closed insertado con PHP -->
<!-- Javascript -->
	<script type="text/javascript" src="js/app.js"></script>
	</body>
</html>
