@include('layouts.app')



<!DOCTYPE html>
<html lang="en">
<!-- <head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0 ">
<meta http-equiv="X-UA-Compatible" content="ie=edge">



<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>





</head> -->
  <body>
 	
      <div class="container" style="width: 90%">
		<div class="panel panel-success">
		<div class="panel-heading">
		    <div class="btn-group pull-right">
				<button type='button' class="btn btn-success" data-toggle="modal" data-target="#userModal"><span class="glyphicon glyphicon-plus" ></span> Nuevo Usuario</button>
			</div>
			<h4><i class='glyphicon glyphicon-search'></i> Buscar Usuarios</h4>
		</div>			
			<div class="panel-body">
	
			<form class="form-horizontal" role="form">
			         <form class="form-inline my-2 my-lg-0 float-right">
				
						<div class="form-group row">
							<label for="q" class="col-md-2 control-label">Nombres:</label>
							<div class="col-md-5">
							<input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" value="{{ $buscarpor }}" >
							<button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
							</div>


						</div>
					 </form>
						<form>
					
						<table class="table table-striped">
                       <tr>
	                    <th>ID</th>
                        <th>Nombres</th>
                        <th>Apellido</th>
                        <th>Correo electronico</th>
                        <th>Genero</th>
                        <th>Tipo Usuario</th>
                       
    </tr>

	@foreach ($usuarios as $users)


    <tr>
    <td> {{$users->id}} </td>
    <td> {{$users->name}}</td>
	<td> {{$users->lastname}}</td>
    <td> {{$users->email}}</td>
    <td> {{$users->gender}}</td>
	<td> {{$users->type_user}}</td>
	

    </tr>
	@endforeach
</table>

	
			</form>
				<!-- <div id="resultados"></div>Carga los datos ajax -->
				<!-- <div class='outer_div'></div>Carga los datos ajax			 -->
			</div>
		</div>

	</div>
            


<!-- Modal -->
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear nuevo Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        

      <form id='userForm'>
	  @csrf
	  <div class="form-group">
	     <label for="name"> nombre</label>
		 <input type="text" class="form-control" id="name"/>
	  </div>
	  <div class="form-group">
	     <label for="lastname"> apellido</label>
		 <input type="text" class="form-control" id="lastname"/>
	  </div>
	  <div class="form-group">
	     <label for="email"> correo</label>
		 <input type="text" class="form-control" id="email"/>
	  </div>
	  <div class="form-group">
	     <label for="password"> contraseña</label>
		 <input type="password" class="form-control" id="password"/>
	  </div>
	
	  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Registrar Usuario</button>
      </div>
	  
	  </form>


		
	
      </div>
    
    </div>
  </div>
</div>



	
  </body>

</html>
