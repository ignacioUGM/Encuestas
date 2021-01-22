<!-- Modal -->
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear usuario</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        

      <form id='userForm' action="{{route('add_users')}}"  method="post">
	  @csrf  
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
		 <input type="text" class="form-control" id="name" value="{{old('name')}}"/>
		 <span>{{ $errors->first('name') }}</span>  

	  </div>


	  <div class="form-group">
	     <label for="lastname"> apellido</label>
		 <input type="text" class="form-control" id="lastname" value="{{old('lastname')}}" />
		 <span>{{ $errors->first('lastname') }}</span>  

	  </div>


	  <div class="form-group">
	     <label for="email"> correo</label>
		 <input type="text" class="form-control" id="email" value="{{old('email')}}" />
		 <span>{{ $errors->first('email') }}</span>  

	  </div>


	  
	  <div class="form-group">
	     <label for="password"> contraseña</label>
		 <input type="password" class="form-control" id="password" value="{{old('password')}}" />
		 <span>{{ $errors->first('password') }}</span>  

	  </div>
	  <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="usuarios()">Registrar Usuario</button>
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
		{{ csrf_field() }}
         
	  </div>
	  </form>


		
	
      </div>
    
    </div>
  </div>
</div>