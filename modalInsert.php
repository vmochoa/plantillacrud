
<!-- Modal -->
<div class="modal fade" id="insertarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="frminsert" onsubmit="return insertarDatos()" method="post">
              <label>sucursal</label>
              <input type="text" id="sucursal" name="sucursal" class="form-control form-control-sm">
              <label>folio</label>
              <input type="text" id="folio" name="folio" class="form-control form-control-sm">
              <label>fecha de contrato</label>
              <input type="text" id="fechacontrato" name="fechacontrato" class="form-control form-control-sm">
              <label>nombre</label>
              <input type="text" id="nombre" name="nombre" class="form-control form-control-sm">
              <label>fechaintro</label>
              <input type="text" id="fechaintro" name="fechaintro" class="form-control form-control-sm">
              <label>horas autorizadas</label>
              <input type="text" id="horasautorizadas" name="horasautorizadas" class="form-control form-control-sm">
              <label>plan</label>
              <input type="text" id="plan" name="plan" class="form-control form-control-sm">
              <label>curso</label>
              <input type="text" id="curso" name="curso" class="form-control form-control-sm">
              <label>nuevoplazo</label>
              <input type="text" id="nuevoplazo" name="nuevoplazo" class="form-control form-control-sm">
              <label>cartas</label>
              <input type="text" id="cartas" name="cartas" class="form-control form-control-sm">
              <label>fechavencimiento</label>
              <input type="text" id="fechavencimiento" name="fechavencimiento" class="form-control form-control-sm">
              <label>observaciones</label>
              <input type="text" id="observaciones" name="observaciones" class="form-control form-control-sm">
              <label>libro</label>
              <input type="text" id="libro" name="libro" class="form-control form-control-sm">
              <label>fecha de nacimiento</label>
              <input type="text" id="fechanacimiento" name="fechanacimiento" class="form-control form-control-sm">
              <label>direccion</label>
              <input type="text" id="direccion" name="direccion" class="form-control form-control-sm">
              <label>correo</label>
              <input type="text" id="correo" name="correo" class="form-control form-control-sm">
              <label>avance</label>
              <input type="text" id="avance" name="avance" class="form-control form-control-sm">
              <label>vendedora</label>
              <input type="text" id="vendedora" name="vendedora" class="form-control form-control-sm">
              <label>foto</label>
              <input type="text" id="foto" name="foto" class="form-control form-control-sm">
              <label>telefono</label>
              <input type="text" id="telefono" name="telefono" class="form-control form-control-sm">
              <label>telefonocasa</label>
              <input type="text" id="telefonocasa" name="telefonocasa" class="form-control form-control-sm">
              <br>
               <input type="submit" value="Guardar" class="btn btn-primary">
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>


