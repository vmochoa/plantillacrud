<?php 

require_once "conexion.php";
class Crud extends Conexion{
    public function mostrarDatos(){
        $sql = "SELECT id, sucursal, folio, fechacontrato, nombre, fechaintro, horasautorizadas, plan, curso, nuevoplazo, cartas, fechavencimiento, observaciones, libro, fechanacimiento, direccion, correo, avance, vendedora, foto, telefono, telefonocasa from gpdalumnos";
        
        $query=Conexion::conectar()->prepare($sql);
        $query->execute();
        return $query->fetchAll();
        $query->close();
        }    
    }
?>