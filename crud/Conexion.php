<?php 

class Conexion {
    public function conectar(){
        $conexion = new PDO("mysql:host=localhost;dbname=AlumnosConIngles", "root","");
        return $conexion;

    }
}

?>