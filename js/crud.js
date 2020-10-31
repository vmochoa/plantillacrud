function mostrar(){
	
	$.ajax({
		type:"POST",
		url:"procesos/mostrarDatos.php",
		success:function(r){
			$('#tablaDatos').html(r);
		}
	});
}

function obtenerDatos(id){
	$.ajax({
		type:"POST",
		data:"id="+ id,
		url:"procesos/obtenerDatos.php",
		success:function(r){
			r=jQuery.parseJSON(r);
			$('#id').val(r['id']);
			$('#sucursalu').val(r['sucursal']);
			$('#foliou').val(r['folio']);
			$('#fechacontratou').val(r['fechacontrato']);
			$('#nombreu').val(r['nombre']);
			$('#fechaintrou').val(r['fechaintro']);
			$('#horasautorizadasu').val(r['horasautorizadas']);
			$('#planu').val(r['plan']);
			$('#cursou').val(r['curso']);
			$('#nuevoplazou').val(r['nuevoplazo']);
			$('#cartasu').val(r['cartas']);
			$('#fechavencimientou').val(r['fechavencimiento']);
			$('#observacionesu').val(r['observaciones']);
			$('#librou').val(r['libro']);
			$('#fechanacimientou').val(r['fechanacimiento']);
			$('#direccionu').val(r['direccion']);
			$('#correou').val(r['correo']);
			$('#avanceu').val(r['avance']);
			$('#vendedorau').val(r['vendedora']);
			$('#fotou').val(r['foto']);
			$('#telefonou').val(r['telefono']);
			$('#telefonocasau').val(r['telefonocasa']);
		}
	});
}

function eliminarDatos(id){
	swal({
		title: "¿Estas seguro de eliminar este registro?",
		text: "!Una vez eliminado no podra recuperarse¡",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			$.ajax({
				type:"POST",
				url:"procesos/eliminarDatos.php",
				data:"id="+id,
				success:function(r){
					console.log(r);
					if(r==1){
						$('#frminsert')[0].reset(); //limpiar formulario
						mostrar();
						swal("!Eliminado con exito", ":D", "success");
					} else{
						swal("!Error!",":(","error");
					}
				}
			});
		} 
	});
}
function actualizarDatos(){
	$.ajax({
		type:"POST",
		url:"procesos/actualizarDatos.php",
		data:$('#frminsertu').serialize(),
		success:function(r){
			console.log(r);
			if(r==1){
			
				mostrar();
				swal("!Actualizado con exito", ":D", "success");
			} else{
				swal("!Error!",":(","error");
			}
		}
	});
	return false;
}
function insertarDatos(){
	$.ajax({
		type:"POST",
		url:"procesos/insertarDatos.php",
		data:$('#frminsert').serialize(),
		success:function(r){
			console.log(r);
			if(r==1){
				$('#frminsert')[0].reset(); //limpiar formulario
				mostrar();
				swal("!Agregado con exito", ":D", "success");
			} else{
				swal("!Error!",":(","error");
			}
		}
	});
	return false;
}