<?php
class Conexion{
    public function get_conexion(){
        $user = "postgres";
        $pass = "1234";
        $host = "localhost";
        $db = "cliente";
       $conexion = new PDO ("pgsql:host=$host;dbname=$db;",$user,$pass);
        return $conexion;
    }
}
?>