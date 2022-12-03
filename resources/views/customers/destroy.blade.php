<div class="modal" tabindex="-1" role="dialog" id="modal-delete-{{$custome->id}}">
    <form action="{{route('customers.destroy', $custome->id)}}" method="post">
        @method('DELETE')
        @csrf

    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Eliminar Registro</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure to delete the customer {{$custome->nombre}}?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Delete</button>
        </div>
      </div>
    </div>

    </form>
  </div>