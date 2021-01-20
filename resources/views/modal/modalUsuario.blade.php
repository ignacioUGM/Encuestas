<!-- Modal -->
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear usuario</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        

      <form id='userForm'>
	    @csrf  
	  <div class="form-group">
	     <label for="name"> nombre</label>
		 <input type="text" class="form-control" id="name" />
	

	  </div>
	  <div class="form-group">
	     <label for="lastname"> apellido</label>
		 <input type="text" class="form-control" id="lastname" />
	  </div>
	  <div class="form-group">
	     <label for="email"> correo</label>
		 <input type="text" class="form-control" id="email" />
	  </div>
	  <div class="form-group">
	     <label for="password"> contraseña</label>
		 <input type="password" class="form-control" id="password" />
	  </div>
	  
        <button type="button" class="btn btn-primary" onclick="usuarios()">Registrar Usuario</button>
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	  </form>


		
	
      </div>
    
    </div>
  </div>
</div>