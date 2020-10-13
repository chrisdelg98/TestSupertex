<?php
	require_once "db/conec.php";
	require_once 'Modelo/loginMod.php';
	$Validar=new Login();
	if (isset($_REQUEST['credenciales'])) {
		$datos=$Validar->ValUser($_REQUEST['usuario'],$_REQUEST['password']);
		if ($datos == 1) {
			$_SESSION['sUsuario'] = $_REQUEST['usuario'];
			require_once 'Vista/loginVis.php';
			echo "
			<script>
				$('#alertbox').html('Credenciales correctas, ingresando al sistema');
				$('#alertbox').addClass('alert alert-success');
				$('#alertbox').show();
				setTimeout(function () {
				    location.href = 'index.php?Detalles';
				}, 1000);
			</script>
			 "; 
		} else {
			require_once 'Vista/loginVis.php';
			echo "
			<script>
				$('#alertbox').html('Usuario o Contraseña incorrectos');
				$('#alertbox').addClass('alert alert-danger');
				$('#alertbox').show();
			</script>
			";
		}
	}

	require_once 'Vista/loginVis.php';
?>