<div id="nota-{{ $nota->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
        <h4 class="modal-title">{{ $nota->titulo }}</h4>
        {{-- <img src="{{ Storage::url($nota->avatar) }}" alt="" width="100%"> --}}
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