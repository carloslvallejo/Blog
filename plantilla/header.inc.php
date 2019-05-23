<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo RUTA_CSS ?>/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo RUTA_CSS ?>/estilos.css">
	<script src="<?php echo RUTA_JS ?>/jquery-3.3.1.min.js"></script>
	<script src="<?php echo RUTA_JS ?>/popper.min.js"></script>
	<script src="<?php echo RUTA_JS ?>/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" crossorigin="anonymous">
	<title><?php echo $titulo ;?></title>
	<script>
		$(document).ready(function(){
			$("#modalLogin").click(function(){
				$("#login").addClass("active");
				$("#modal1").addClass("active");
				$("#registro").removeClass("active");
				$("#modal2").removeClass("active");
			});
			$("#modalRegistro").click(function(){
				$("#registro").addClass("active");
				$("#modal2").addClass("active");
				$("#login").removeClass("active");
				$("#modal1").removeClass("active");
			});
			$("#editarperfil").click(function(){
				$('fieldset').removeAttr('disabled');
				$('#guardarperfil').removeAttr("disabled");
			});
		});
	</script>
</head>
<body>