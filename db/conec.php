<?php
    require_once 'config.php';

    class DBCon {

        private $con;
        private $db;

        public function Conectar() {
            
            $con = mysqli_connect(host,user,pass,dbname);

            if($con->connect_errno) {
                die("Lo sentimos, no se ha podido conectar con MySQL ".mysqli_error($con));
            } else {
                $db = mysqli_select_db($con, dbname);
                if($db == 0){
                    die("Lo sentimos, no se ha podido conectar con la base de datos: ".dbname);
                }
            }
            return $con;
        }
        
    }
?>