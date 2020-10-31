<?php 

class Conexion {
    public static function conectar(){
        $conexion = new PDO("mysql:host=localhost;dbname=AlumnosConIngles", "root","");
        return $conexion;

    }
}

?>