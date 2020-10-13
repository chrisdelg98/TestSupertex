<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Examen Práctico Supertex MVC</title>
    <link rel="stylesheet" href="Controlador/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Controlador/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="Controlador/assets/css/jquery.dataTables.css">
</head>
<body>

    <div class="jumbotron" style="height: calc(100vh); margin:0px;">
        <div class="card" style="width: 400px; margin:auto;">
            <form class="form-signin" method="post">
                <h3 class="form-signin-heading text-center">Ingrese Credenciales</h3><br>
                <input type="hidden" name="credenciales">
                <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Ingrese el Usuario" required autofocus autocomplete="off"><br>
                <input type="password" id="password" name="password" class="form-control" placeholder="Ingrese la Contraseña" required><br>
                <div id="alertbox"></div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
            </form>
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