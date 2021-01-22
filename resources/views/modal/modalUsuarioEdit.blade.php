<!-- Modal -->
<!-- <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">editar usuario</h5> 
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        

      <form id='editForm' >
	    
		@if (session()->has('estado'))
        
		<div class="alert alert-success" role="alert">
		   {{session('estado')}}
		  </div>
		@endif
	
		@if (count($errors) > 0)
		<div class="alert alert-danger" role="alert"> 
		  <p>Errores del formulario...</p>
		  <ul>
			  @foreach ($errors->all() as $message)
				<li>{{ $message }}</li>
			  @endforeach              
		  </ul>
		</div>
	@endif




	  <div class="form-group">
	     <label for="name"> nombre</label>
		 <input type="text" class="form-control" id="name"  />
		 <span>{{ $errors->first('name') }}</span>  

	  </div>
	 
	  <div class="form-group">
	     <label for="lastname"> apellido</label>
		 <input type="text" class="form-control" id="lastname"  />
	
		 <span>{{ $errors->first('lastname') }}</span>
	  </div>


	 

	  <div class="modal-footer">
        <button type="submit" class="btn btn-success" value="AddUsuario" >Editar Usuario</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
		{{ csrf_field() }}
          {{ method_field('PUT')}}
	  </div>
	  </form>


		
	
      </div>
    
    </div>
  </div>
</div> -->