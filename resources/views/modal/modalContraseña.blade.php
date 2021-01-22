<!-- Modal -->
<div class="modal fade" id="contraseñaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cambiar contraseña</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        

      <form id='editForm'>
	    @csrf  
	 


	  
	  <div class="form-group">
	     <label for="password"> Nueva Contraseña</label>
		 <input type="Cambiarpassword" class="form-control" id="cambiarPassword" />
      </div>
      
      	  
	  <div class="form-group">
	     <label for="confpassword"> Confirmar Contraseña</label>
		 <input type="password" class="form-control" id="confpassword" />
	  </div>




	  <div class="modal-footer">
        <button type="button" class="btn btn-success" onclick="ContraseñaUsuarios()">Confirmar</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
	  </div>
	  </form>


		
	
      </div>
    
    </div>
  </div>
</div>