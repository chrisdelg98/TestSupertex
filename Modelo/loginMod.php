<?php
    class Login {
        private $db;
        private $usuarios;
    
        public function __construct()
        {
            $this->db=DBcon::conectar();
            $this->usuarios=array();
        }

        /**
         * Funcion para verficiar credenciales
         */

        public function ValUser($usuario, $password)
        {
            $query=mysqli_query($this->db, "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = SHA1('$password') ;");

            if($query== FALSE)
            {
                echo "<center> Sentencia incorrecta, datos no encontrados </center>";
            }
            else{
                while($fila=mysqli_fetch_assoc($query))
                {  
                    $date = date("Y-m-d H:i:s");
                    $usuarios[]=$fila;
                    foreach($usuarios as $dato) {
                    $id = $dato['id_usuario'];
                    $queryupd=mysqli_query($this->db, "UPDATE usuarios SET ultima_sesion_usuario = '$date' WHERE id_usuario = '$id';");
                    }
                    return 1;
                }
                return 0;
            }
        }

    }
?>