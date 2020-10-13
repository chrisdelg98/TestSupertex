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
        <div style="width:90%; margin:auto; margin-top: 20px;">
            <div class="panel panel-primary" style="width: 60rem; margin:auto; text-align: center;">
              <div class="panel-heading">
                <h3 class="panel-title">Detalles del Usuario</h3>
              </div>
              <div class="panel-body">
                <?php foreach($datos as $dato) { ?>
                <h6>Nombre</h6>
                <h4><?php echo $dato['nombre_usuario']; ?></h4><br>
                <h6>Teléfono</h6>
                <h4><?php echo $dato['telefono_usuario']; ?></h4><br>
                <h6>Correo</h6>
                <h4><?php echo $dato['correo_usuario']; ?></h4><br>
                <h6>Ultimos inicio de sesión</h6>
                <h4><?php echo date_format(date_create($dato['ultima_sesion_usuario']),"d/m/Y H:i:s") ; ?></h4>
                <?php } ?>
              </div>
            </div>
        </div>
    </div>

<script src="Controlador/assets/js/bootstrap.min.js"></script>
<script src="Controlador/assets/js/jquery-1.11.3.min.js"></script>
<script src="Controlador/assets/js/jquery.dataTables.js"></script>
</body>
</html>

<script>


    $(document).ready( function () {
        $('#tablaUsuarios').DataTable();
    } );
</script>