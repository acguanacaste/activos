<div class="modal fade" id="crearDependencia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form method="POST" id="form-crear" action="/dependencias" enctype="multipart/form-data">
    {{ csrf_field() }}
      <div class="modal-header">
        <h5 class="modal-title" id="modalDependencia">Crear</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          <div class="form-group">
            <label for="Dependencia" class="col-form-label">Dependencia</label>
            <input type="text" class="form-control" id="Dependencia" name="Dependencia">
          </div>          

        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Crear</button>
    
      </div>
    </div>
  </div>
  </form>
</div>