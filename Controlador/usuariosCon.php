<?php
	require_once "db/conec.php";
    require_once 'Modelo/usuariosMod.php';

    if (isset($_REQUEST['eliminarUsuario'])) {
        $id = $_REQUEST['eliminarUsuario'];
        $eliminar = new Users();
        $Delete = $eliminar->delUsuario($id);
    }

    if (isset($_REQUEST['editarUsuario'])) {
        $id = $_REQUEST['id_usuario'];
        $nombre = $_REQUEST['edit_nombre'];
        $telefono = $_REQUEST['edit_telefono'];
        $correo = $_REQUEST['edit_correo'];
        $usuario = $_REQUEST['edit_usuario'];
        $password = $_REQUEST['edit_password'];
        $editar = new Users();
        $Edit = $editar->editUsuario($id,$nombre,$telefono,$correo,$usuario,$password);
    }

    if (isset($_REQUEST['insertarUsuario'])) {
        $nombre = $_REQUEST['nombre'];
        $telefono = $_REQUEST['telefono'];
        $correo = $_REQUEST['correo'];
        $usuario = $_REQUEST['usuario'];
        $password = $_REQUEST['password'];
        $insertar = new Users();
        $Insert = $insertar->insertUsuario($nombre,$telefono,$correo,$usuario,$password);
    }

    $Users=new Users();
    $datos=$Users->GetUsuarios();
    
    $sUser = $_SESSION['sUsuario'];
    $Rols=new Users();
    $roles=$Rols->GetRoles($sUser);

    require_once "Vista/usuariosVis.php";

?>