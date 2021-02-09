<!-- Modal -->
<div class="modal fade" id="contraseñaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <h4 class="modal-title" id="exampleModalLabel"><i class='glyphicon glyphicon-edit'></i>Cambiar contraseña</h4>
       
      </div>
      <div class="modal-body">
        

      <form id='editContraForm'>
	    @csrf  
      <div class="form-group">
	     <label id='message'> </label>
	  </div>
      <input type="hidden" id="id3" name="id"/>
<!-- 
	    <div class="form-group">
	     <label for="password"> Nueva Contraseña</label>
		 <input type="password" class="form-control" id="editContraseña" />
      </div> -->
	  <div class="form-group">
	     <label for="password"> Nueva Contraseña</label>
		 <input type="password" class="form-control" id="Editpassword" />
      </div>
      
      	  
	  <div class="form-group">
	     <label for="confpassword"> Confirmar Contraseña</label>
		 <input type="password" class="form-control" id="confpassword" />
	  </div>




	  <div class="modal-footer">
        <button type="button" class="btn btn-success" onclick="CambiarContraseña()">Confirmar</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
	  </div>
	  </form>


		
	
      </div>
    
    </div>
  </div>
</div>