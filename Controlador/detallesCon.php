<?php 
	require_once "db/conec.php";

	if (isset($_SESSION['sUsuario'])) {
		require_once "Modelo/detallesMod.php";

		$sUser = $_SESSION['sUsuario'];
		$Users=new Users();
	    $datos=$Users->GetUsuarios($sUser);

	    require_once "Vista/detallesVis.php";
	} else {
		require_once "Modelo/usuariosMod.php";

		$Users=new Users();
	    $datos=$Users->GetUsuarios();

		require_once "Vista/usuariosVis.php";
	}
	
?>