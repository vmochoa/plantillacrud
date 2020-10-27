
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
              <label>Nombre</label>
              <input type="text" id="nombre" name="nombre" class="form-control form-control-sm" required="">
              <label>Sueldo</label>
              <input type="text" id="sueldo" name="sueldo" class="form-control form-control-sm" required="">
              <label>Edad</label>
              <input type="text" id="edad" name="edad" class="form-control form-control-sm">
              <label>Fecha de registro</label>
              <input type="text" id="fecha" name="fecha" class="form-control form-control-sm">
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


