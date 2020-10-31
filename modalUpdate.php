<!-- Modal -->
<div class="modal fade" id="actualizarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="frminsertu" onsubmit="return actualizarDatos()" method="post">
            <input type="text" id="id" name="id" hidden="">
            <label>sucursal</label>
              <input type="text" id="sucursalu" name="sucursal" class="form-control form-control-sm">
              <label>folio</label>
              <input type="text" id="foliou" name="folio" class="form-control form-control-sm">
              <label>fecha de contrato</label>
              <input type="text" id="fechacontratou" name="fechacontrato" class="form-control form-control-sm">
              <label>nombre</label>
              <input type="text" id="nombreu" name="nombre" class="form-control form-control-sm">
              <label>fechaintro</label>
              <input type="text" id="fechaintrou" name="fechaintro" class="form-control form-control-sm">
              <label>horas autorizadas</label>
              <input type="text" id="horasautorizadasu" name="horasautorizadas" class="form-control form-control-sm">
              <label>plan</label>
              <input type="text" id="planu" name="plan" class="form-control form-control-sm">
              <label>curso</label>
              <input type="text" id="cursou" name="curso" class="form-control form-control-sm">
              <label>nuevoplazo</label>
              <input type="text" id="nuevoplazou" name="nuevoplazo" class="form-control form-control-sm">
              <label>cartas</label>
              <input type="text" id="cartasu" name="cartas" class="form-control form-control-sm">
              <label>fechavencimiento</label>
              <input type="text" id="fechavencimientou" name="fechavencimiento" class="form-control form-control-sm">
              <label>observaciones</label>
              <input type="text" id="observacionesu" name="observaciones" class="form-control form-control-sm">
              <label>libro</label>
              <input type="text" id="librou" name="libro" class="form-control form-control-sm">
              <label>fecha de nacimiento</label>
              <input type="text" id="fechanacimientou" name="fechanacimiento" class="form-control form-control-sm">
              <label>direccion</label>
              <input type="text" id="direccionu" name="direccion" class="form-control form-control-sm">
              <label>correo</label>
              <input type="text" id="correou" name="correo" class="form-control form-control-sm">
              <label>avance</label>
              <input type="text" id="avanceu" name="avance" class="form-control form-control-sm">
              <label>vendedora</label>
              <input type="text" id="vendedorau" name="vendedora" class="form-control form-control-sm">
              <label>foto</label>
              <input type="text" id="fotou" name="foto" class="form-control form-control-sm">
              <label>telefono</label>
              <input type="text" id="telefonou" name="telefono" class="form-control form-control-sm">
              <label>telefonocasa</label>
              <input type="text" id="telefonocasau" name="telefonocasa" class="form-control form-control-sm">
              <br>
               <input type="submit" value="Actualizar" class="btn btn-warning">
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
