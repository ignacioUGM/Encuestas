<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel"><i class='glyphicon glyphicon-edit'></i>Editar Usuario</h4>
		
      </div>
      <div class="modal-body">
        

      <form id='editForm'>
		@csrf  
		<input type="hidden" id="id" name="id"/>

		<div class="form-group">
	     <label id='message2'> </label>
	  </div>

	  <div class="form-group">
	     <label for="name"> nombre</label>
		 <input type="text" class="form-control" id="nameEdit" />
	  </div>



	  <div class="form-group">
	     <label for="lastname"> apellido</label>
		 <input type="text" class="form-control" id="lastnameEdit" />
	  </div>


	  <div class="form-group">
	     <label for="email"> correo</label>
		 <input type="text" readonly class="form-control" id="emailEdit" />
	  </div>


	  <div class="modal-footer">
        <button type="button" class="btn btn-success" onclick="updateUsuarios()"  >Editar Usuario</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
	  </div>
	  </form>


		
	
      </div>
    
    </div>
  </div>
</div>