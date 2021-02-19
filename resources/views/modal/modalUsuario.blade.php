<!-- Modal -->
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class='glyphicon glyphicon-edit'></i>Crear usuario</h5>
       
      </div>
      <div class="modal-body">
        

      <form id='userForm'>
	  @csrf
		<input type="hidden" id="iduser" name="iduser"/>
		<div class="form-group">
	     <label id='message'> </label>
	  </div>
	  

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
               
				<label for="descripcion">Tipo de usuario</label>
				<select name="type_user" id="type_user" class="form-select form-select-sm" aria-label=".form-select-sm example">     
				 <option value="">--escoga el tipo de usuario</option>
				  @foreach ($type_users as $type_user)
				 <option value="{{$type_user['id_tipo_usuario']}}">{{$type_user['nombre_usuario']}} </option>
				 @endforeach
				</select>
			  </div>
			
			  


			  <div class="form-group">
				<label for="descripcion">Departamento</label>
				<select name="select_departamento" id="select_departamento" class="form-select form-select-sm" aria-label=".form-select-sm example">
				 <option value="">--escoga el departamento</option>
				 @foreach ($departamentos as $departamento)
				 <option value="{{$departamento['id']}}">{{$departamento['nombre_departamento']}} </option>
 		      @endforeach
			   </select>
			  </div>

			
			  <div class="form-group">
				<label for="descripcion">Genero</label>
		
				<select name="select_genero" id="select_genero" class="form-select form-select-sm" aria-label=".form-select-sm example">
				 <option value="">--escoga el genero</option>
				 @foreach ($generos as $genero) 
				 <option value="{{$genero['id_genero']}}">{{$genero['nombre_genero']}} </option>
			    @endforeach
				</select>
		
			  </div>

	  <div class="form-group">
	     <label for="password"> contraseña</label>
		 <input type="password" class="form-control" id="password" />
	  </div>


	  <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="usuarios()">Registrar Usuario</button>
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	  </div>

	  </form>


		
	
      </div>
    
    </div>
  </div>
  
</div>