<?php
    class Users {
        private $db;
        private $usuarios;
        private $roles;
    
        public function __construct()
        {
            $this->db=DBCon::conectar();
            $this->usuarios=array();
        }

        public function GetUsuarios()
        {
            $query=mysqli_query($this->db, "SELECT * FROM usuarios;");

            if($query== FALSE)
            {
                echo '
                <div class="alert alert-danger alert-dismissible" role="alert" style="margin-top:50px; margin-bottom:0px;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><center>
                    <strong>Sentencia incorrecta, datos no encontrados</strong></center>
                </div>
                ';
            }
            else{
                while($fila=mysqli_fetch_assoc($query))
                {
                    $this->usuarios[]=$fila;
                }
                mysqli_free_result($query);
            }

            return $this->usuarios;
        }

        public function GetRoles($id)
        {
            $query=mysqli_query($this->db, "SELECT * FROM usuarios as u INNER JOIN roles AS r WHERE u.usuario = '$id'; ");

            if($query== FALSE)
            {
                echo '
                <div class="alert alert-danger alert-dismissible" role="alert" style="margin-top:50px; margin-bottom:0px;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><center>
                    <strong>Sentencia incorrecta, datos no encontrados</strong></center>
                </div>
                ';
            }
            else{
                while($row=mysqli_fetch_assoc($query))
                {
                    $this->roles[]=$row;
                }
                mysqli_free_result($query);
            }

            return $this->roles;
        }

        public function insertUsuario($nombre,$telefono,$correo,$usuario,$password)
        {
            $query=mysqli_query($this->db, "INSERT INTO usuarios (nombre_usuario,telefono_usuario,correo_usuario,usuario,contrasena) VALUES ('$nombre','$telefono','$correo','$usuario', SHA1('$password'));");

            if($query== FALSE)
            {
                echo '
                <div class="alert alert-danger alert-dismissible" role="alert" style="margin-top:50px; margin-bottom:0px;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><center>
                    <strong>Sentencia incorrecta, no se pudo proceder con la operación</strong></center>
                </div>
                ';
            }
            else{
                echo '
                <div class="alert alert-success alert-dismissible" role="alert" style="margin-top:50px; margin-bottom:0px;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><center>
                    <strong>EL registro se inserto correctamente</strong></center>
                </div>
                ';
            }
        }

        public function delUsuario($idEliminar)
        {
            $query=mysqli_query($this->db, "DELETE FROM usuarios WHERE id_usuario = '$idEliminar' ;");

            if($query== FALSE)
            {
                echo '
                <div class="alert alert-danger alert-dismissible" role="alert" style="margin-top:50px; margin-bottom:0px;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><center>
                    <strong>Sentencia incorrecta, no se pudo proceder con la operación</strong></center>
                </div>
                ';
            }
            else{
                echo '
                <div class="alert alert-success alert-dismissible" role="alert" style="margin-top:50px; margin-bottom:0px;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><center>
                    <strong>EL registro se elimino correctamente</strong></center>
                </div>
                ';
            }
        }

        public function editUsuario($id,$nombre,$telefono,$correo,$usuario,$password)
        {
            $query=mysqli_query($this->db, "UPDATE usuarios SET nombre_usuario = '$nombre',telefono_usuario='$telefono',correo_usuario='$correo',usuario='$usuario',contrasena='$password' WHERE id_usuario = '$id' ;");

            if($query== FALSE)
            {
                echo '
                <div class="alert alert-danger alert-dismissible" role="alert" style="margin-top:50px; margin-bottom:0px;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><center>
                    <strong>Sentencia incorrecta, no se pudo proceder con la operación</strong></center>
                </div>
                '."UPDATE autor SET nombre_usuario = '$nombre',telefono_usuario='$telefono',correo_usuario='$correo',usuario='$usuario',contrasena='$password' WHERE id_usuario = '$id' ;";
            }
            else{
                echo '
                <div class="alert alert-success alert-dismissible" role="alert" style="margin-top:50px; margin-bottom:0px;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><center>
                    <strong>EL registro se actualizo correctamente</strong></center>
                </div>
                ';
            }
        }

    }
?>