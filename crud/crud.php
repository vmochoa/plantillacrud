<?php 

require_once "Conexion.php";
class Crud extends conexion{
    public function mostrarDatos(){
        $sql = "SELECT id, sucursal, folio, fechacontrato, nombre, fechaintro, horasautorizadas, plan, curso, nuevoplazo, cartas, fechavencimiento, observaciones, libro, fechanacimiento, direccion, correo, avance, vendedora, foto, telefono, telefonocasa from gpdalumnos";
        
        $query=Conexion::conectar()->prepare($sql);
        $query->execute();
        return $query->fetchAll();
        $query->close();
        }    
    public static function insertarDatos($datos){
        $sql = "  INSERT INTO  gpdalumnos (sucursal, folio, fechacontrato, nombre, fechaintro, horasautorizadas, plan, curso, nuevoplazo, cartas, fechavencimiento, observaciones, libro, fechanacimiento, direccion, correo, avance, vendedora, foto, telefono, telefonocasa) 
        VALUES (
        :sucursal, 
        :folio, 
        :fechacontrato, 
        :nombre, 
        :fechaintro, 
        :horasautorizadas, 
        :plan, 
        :curso, 
        :nuevoplazo, 
        :cartas, 
        :fechavencimiento, 
        :observaciones, 
        :libro, 
        :fechanacimiento, 
        :direccion, 
        :correo, 
        :avance, 
        :vendedora, 
        :foto, 
        :telefono, 
        :telefonocasa)";
    
        $query=Conexion::conectar()->prepare($sql);
        $query->bindParam(":sucursal", $datos["sucursal"], PDO::PARAM_STR);
        $query->bindParam(":folio", $datos["folio"], PDO::PARAM_STR);
        $query->bindParam(":fechacontrato", $datos["fechacontrato"], PDO::PARAM_STR);
        $query->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $query->bindParam(":fechaintro", $datos["fechaintro"], PDO::PARAM_STR);
        $query->bindParam(":horasautorizadas", $datos["horasautorizadas"], PDO::PARAM_STR);
        $query->bindParam(":plan", $datos["plan"], PDO::PARAM_STR);
        $query->bindParam(":curso", $datos["curso"], PDO::PARAM_STR);
        $query->bindParam(":nuevoplazo", $datos["nuevoplazo"], PDO::PARAM_STR);
        $query->bindParam(":cartas", $datos["cartas"], PDO::PARAM_STR);
        $query->bindParam(":fechavencimiento", $datos["fechavencimiento"], PDO::PARAM_STR);
        $query->bindParam(":observaciones", $datos["observaciones"], PDO::PARAM_STR);
        $query->bindParam(":libro", $datos["libro"], PDO::PARAM_STR);
        $query->bindParam(":fechanacimiento", $datos["fechanacimiento"], PDO::PARAM_STR);
        $query->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
        $query->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
        $query->bindParam(":avance", $datos["avance"], PDO::PARAM_STR);
        $query->bindParam(":vendedora", $datos["vendedora"], PDO::PARAM_STR);
        $query->bindParam(":foto", $datos["foto"], PDO::PARAM_STR);
        $query->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
        $query->bindParam(":telefonocasa", $datos["telefonocasa"], PDO::PARAM_STR); 

        return $query->execute();
        $query->close();
        }

        public static function obtenerDatos($id){
            $sql = "SELECT id, sucursal, folio, fechacontrato, nombre, fechaintro, horasautorizadas, plan, curso, nuevoplazo, cartas, fechavencimiento, observaciones, libro, fechanacimiento, direccion,correo, avance, vendedora, foto, telefono, telefonocasa from gpdalumnos where id=:id";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            $query->execute();
            return $query->fetch();
            $query->close();
        }
        public static function actualizarDatos($datos){
            $sql = "UPDATE gpdalumnos set 
            sucursal = :sucursal,
            folio = :folio,
            fechacontrato = :fechacontrato,
            nombre = :nombre,
            fechaintro = :fechaintro,
            horasautorizadas = :horasautorizadas,
            plan = :plan,
            curso = :curso,
            nuevoplazo = :nuevoplazo,
            cartas = :cartas,
            fechavencimiento = :fechavencimiento,
            observaciones = :observaciones,
            libro = :libro,
            fechanacimiento = :fechanacimiento,
            direccion = :direccion,
            correo = :correo,
            avance = :avance,
            vendedora = :vendedora,
            foto = :foto,
            telefono = :telefono,
            telefonocasa = :telefonocasa
            WHERE id= :id";
            $query =Conexion::conectar()->prepare($sql);
            $query->bindParam(":sucursal", $datos["sucursal"], PDO::PARAM_STR);
            $query->bindParam(":folio", $datos["folio"], PDO::PARAM_STR);
            $query->bindParam(":fechacontrato", $datos["fechacontrato"], PDO::PARAM_STR);
            $query->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
            $query->bindParam(":fechaintro", $datos["fechaintro"], PDO::PARAM_STR);
            $query->bindParam(":horasautorizadas", $datos["horasautorizadas"], PDO::PARAM_STR);
            $query->bindParam(":plan", $datos["plan"], PDO::PARAM_STR);
            $query->bindParam(":curso", $datos["curso"], PDO::PARAM_STR);
            $query->bindParam(":nuevoplazo", $datos["nuevoplazo"], PDO::PARAM_STR);
            $query->bindParam(":cartas", $datos["cartas"], PDO::PARAM_STR);
            $query->bindParam(":fechavencimiento", $datos["fechavencimiento"], PDO::PARAM_STR);
            $query->bindParam(":observaciones", $datos["observaciones"], PDO::PARAM_STR);
            $query->bindParam(":libro", $datos["libro"], PDO::PARAM_STR);
            $query->bindParam(":fechanacimiento", $datos["fechanacimiento"], PDO::PARAM_STR);
            $query->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
            $query->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
            $query->bindParam(":avance", $datos["avance"], PDO::PARAM_STR);
            $query->bindParam(":vendedora", $datos["vendedora"], PDO::PARAM_STR);
            $query->bindParam(":foto", $datos["foto"], PDO::PARAM_STR);
            $query->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
            $query->bindParam(":telefonocasa", $datos["telefonocasa"], PDO::PARAM_STR); 
            $query->bindParam(":id", $datos["id"], PDO::PARAM_INT);
            
            return $query->execute();
            $query->close();
        }
        public static function eliminarDatos($id){
            $sql="DELETE FROM gpdalumnos where id=:id";
            $query = Conexion::conectar()->prepare($sql);
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            return $query->execute();
            $query->close();
        }
}
   
?>