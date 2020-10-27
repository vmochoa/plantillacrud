<?php 

 require_once "../crud/crud.php";
 $obj = new Crud();
 $datos=$obj->mostrarDatos();

 $tabla='<table class="table table-dark">
 <thead>
     <tr class="font-weight-bold">
     
         <th>Sucursal</th>
         <th>Folio</th>
         <th>Fecha Contrato</th>
         <th>nombre</th>
         <th>Fecha de Into</th>
         <th>Hora Autorizada</th>
         <th>Plan</th>
         <th>Curso</th>
         <th>uevo Plan</th>
         <th>Cartas</th>
         <th>Fecha Vencimiento</th>
         <th>Observaciones</th>
         <th>Libro</th>
         <th>Fecha de Nacimiento</th>
         <th>Dirección</th>
         <th>Correo</th>
         <th>Avance</th>
         <th>Vendedora</th>
         <th>Foto</th>
         <th>Celular</th>
         <th>Teléfono Casa</th>
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
                                <td>'.$value["horasautorizadas"].'</td>
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
echo "si imprime MostrarDATOS";
?>