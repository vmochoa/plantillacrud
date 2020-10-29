<?php 
require_once "../crud/crud.php";

$datos = array(
    'sucursal' => $_POST['sucursal'],
    'folio' => $_POST['folio'],
    'fechacontrato' => $_POST['fechacontrato'],
    'nombre' => $_POST['nombre'],
    'fechaintro' => $_POST['fechaintro'],
    'horasautorizadas' => $_POST['horasautorizadas'],
    'plan' => $_POST['plan'],
    'curso' => $_POST['curso'],
    'nuevoplazo' => $_POST['nuevoplazo'],
    'cartas' => $_POST['cartas'],
    'fechavencimiento' => $_POST['fechavencimiento'],
    'observaciones' => $_POST['observaciones'],
    'libro' => $_POST['libro'],
    'fechanacimiento' => $_POST['fechanacimiento'],
    'direccion' => $_POST['direccion'],
    'correo' => $_POST['correo'],
    'avance' => $_POST['avance'],
    'vendedora' => $_POST['vendedora'],
    'foto' => $_POST['foto'],
    'telefono' => $_POST['telefono'],
    'telefonocasa' => $_POST['telefonocasa']
);

        echo Crud::insertarDatos($datos);

?>