<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Práctico Supertex MVC</title>

</head>
<body>

<?php
	session_start();
	if (isset($_SESSION['sUsuario'])) {
		$view = @array_pop(explode('?', $_SERVER['REQUEST_URI']));
		if ($view === "Usuarios") {
			require_once "Controlador/usuariosCon.php";
		} else if ($view === "Detalles") {
			require_once "Controlador/detallesCon.php";
		} else {
			require_once "Controlador/salirCon.php";
		}		
	} else {
		require_once "Controlador/loginCon.php";
	}    
?>

<script src="Controlador/assets/js/bootstrap.min.js"></script>
<script src="Controlador/assets/js/bootstrap-table.min.js"></script>
<script src="Controlador/assets/js/jquery-1.11.3.min.js"></script>
<script src="Controlador/assets/js/jquery.dataTables.js"></script>
    
</body>
</html>