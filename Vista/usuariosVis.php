<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Práctico Supertex MVC</title>
    <link rel="stylesheet" href="Controlador/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Controlador/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="Controlador/assets/css/jquery.dataTables.css">
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php?Usuarios">Usuarios</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php?Detalles"><i class="fa fa-user-circle" alt="Detalle del usuario"></i> Cuenta</a></li>
                <li><a href="index.php?Salir"><i class="fa fa-sign-out" alt="Detalle del usuario"></i> Salir</a></li>
            </ul>
        </div>
      </div>
    </nav>
    <div class="jumbotron">
        <div style="width:90%; margin:auto;">
            <table width="100%">
                <thead>
                    <tr>
                        <th width="80%"><h2>Lista de Usuarios </h2></th>
                        <th width="10%"><button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#ModalAddUsuario"><i class="fa fa-plus-circle"></i> Agregar usuario</button></th>
                    </tr>
                </thead>
            </table>
        
        <table id="tablaUsuarios" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th>Ult. Sesión</th>
                    <th>Roles</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($datos as $dato) { ?>
                <input style="display: none;" type="text" id="<?php echo $dato['id_usuario'];?>nombre" value="<?php echo $dato['nombre_usuario']; ?>">
                <input style="display: none;" type="text" id="<?php echo $dato['id_usuario']; ?>telefono" value="<?php echo $dato['telefono_usuario']; ?>">
                <input style="display: none;" type="text" id="<?php echo $dato['id_usuario']; ?>correo" value="<?php echo $dato['correo_usuario']; ?>">
                <input style="display: none;" type="text" id="<?php echo $dato['id_usuario']; ?>usuario" value="<?php echo $dato['usuario']; ?>">
                <tr>
                    <td><?php echo $dato['nombre_usuario']; ?></td>
                    <td><?php echo $dato['telefono_usuario']; ?></td>
                    <td><?php echo $dato['correo_usuario']; ?></td>
                    <td><?php echo $dato['ultima_sesion_usuario']; ?></td>
                    <td>
                        <?php                         
                        foreach($roles as $rol) { 
                        if ($rol['id_usuario'] == $dato['id_usuario']) { ?>

                        <span class="label label-primary"><?php echo $rol['detalle_rol'];?></span>

                        <?php } } ?>
                    </td>
                    <td><?php echo $dato['usuario']; ?></td>
                    <td>
                        <div style="width: 130px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden;">
                            <?php echo $dato['contrasena']; ?>
                        </div>
                    </td>
                    <td>
                        <div style="display: flex; flex-wrap: wrap; justify-content:center;">
                            <div style="margin:1px;">
                                <input type="hidden" name="editarUsuario">
                                <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#ModalEditUsuario" onclick="loadedit(<?php echo $dato['id_usuario'];?>);"><i class="fa fa-edit"></i></button>
                            </div>
                            <form action="index.php?Usuarios" method="post" style="margin:1px;">
                                <input type="hidden" name="eliminarUsuario" value="<?php echo $dato['id_usuario']; ?>">
                                <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>
    </div>

<?php require_once 'Controlador/assets/modales.php' ?>

<script src="Controlador/assets/js/bootstrap.min.js"></script>
<script src="Controlador/assets/js/jquery-1.11.3.min.js"></script>
<script src="Controlador/assets/js/jquery.dataTables.js"></script>
</body>
</html>

<script>
    function loadedit(id) {
        var nombre = document.getElementById(id + "nombre").value;
        var telefono = document.getElementById(id + "telefono").value;
        var correo = document.getElementById(id + "correo").value;
        var usuario = document.getElementById(id + "usuario").value;
        document.getElementById("id_usuario").value = id;
        document.getElementById("edit_nombre").value = nombre;
        document.getElementById("edit_telefono").value = telefono;
        document.getElementById("edit_correo").value = correo;
        document.getElementById("edit_usuario").value = usuario;
    }

    $(document).ready( function () {
        $('#tablaUsuarios').DataTable();
    } );
</script>