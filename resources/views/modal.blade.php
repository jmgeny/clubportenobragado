<div id="nota-{{ $nota->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">{{ $nota->titulo }}</h4>
      </div>
      <div class="modal-body">
        <p>{{ $nota->desarrollo }}</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>