<?php 

 require_once "../crud/crud.php";
 $obj = new Crud();
 $datos=$obj->mostrarDatos();

 $tabla='<table class="table table-dark">
 <thead>
     <tr class="font-weight-bold">
     
         <td>Sucursal</td>
         <td>Folio</td>
         <td>Fecha Contrato</td>
         <td>nombre</td>
         <td>Fecha de Into</td>
         <td>Hora Autorizada</td>
         <td>Plan</td>
         <td>Curso</td>
         <td>uevo Plan</td>
         <td>Cartas</td>
         <td>Fecha Vencimiento</td>
         <td>Observaciones</td>
         <td>Libro</td>
         <td>Fecha de Nacimiento</td>
         <td>Dirección</td>
         <td>Correo</td>
         <td>Avance</td>
         <td>Vendedora</td>
         <td>Foto</td>
         <td>Celular</td>
         <td>Teléfono Casa</td>
         <td>Editar</td>
         <td>Eliminar</td>
     </tr>
 </thead>
 <tbody>';

 $datosTabla="";

foreach ($datos as $key => $value) {
    $datosTabla = $datosTabla.'<tr>
                                <td>'.$value["sucursal"].'</td>
                                <td>'.$value["folio"].'</td>
                                <td>'.$value["fechacontrato"].'</td>
                                <td>'.$value["nombre"].'</td>
                                <td>'.$value["fechaintro"].'</td>
                                <td>'.$value["horasautorizadas"].'</td>
                                <td>'.$value["plan"].'</td>
                                <td>'.$value["curso"].'</td>
                                <td>'.$value["nuevoplazo"].'</td>
                                <td>'.$value["cartas"].'</td>
                                <td>'.$value["fechavencimiento"].'</td>
                                <td>'.$value["observaciones"].'</td>
                                <td>'.$value["libro"].'</td>
                                <td>'.$value["fechanacimiento"].'</td>
                                <td>'.$value["direccion"].'</td>
                                <td>'.$value["correo"].'</td>
                                <td>'.$value["avance"].'</td>
                                <td>'.$value["vendedora"].'</td>
                                <td>'.$value["foto"].'</td>
                                <td>'.$value["telefono"].'</td>
                                <td>'.$value["telefonocasa"].'</td>
                                <td>
                                    <span class="btn btn-warning btn-sm" onclick="obtenerDatos('.$value['id'].')" data-toggle="modal" data-target="#actualizarModal">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                    
                                </td>
                                <td>
                                    <span class="btn btn-danger" onclick="eliminarDatos('.$value['id'].')">
                                        <li class="fas fa-trash-alt"></li>
                                    </span>
                                </td>
                            </tr>';
}

echo $tabla.$datosTabla.'</tbody></table>';

?>