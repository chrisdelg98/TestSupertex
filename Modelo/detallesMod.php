<?php
    class Users {
        private $db;
        private $usuarios;
    
        public function __construct()
        {
            $this->db=DBCon::conectar();
            $this->usuarios=array();
        }

        public function GetUsuarios($sUser)
        {
            $query=mysqli_query($this->db, "SELECT * FROM usuarios WHERE usuario='$sUser';");

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
    }
?>
