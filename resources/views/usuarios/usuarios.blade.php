@include('layouts.app')



<!DOCTYPE html>
<html lang="en">

  <body>
 	
      <div class="container" style="width: 90%">
		<div class="panel panel-success">
		<div class="panel-heading">
		    <div class="btn-group pull-right">
				<button type='button' class="btn btn-success" data-toggle="modal" data-target="#nuevo_usuario"><span class="glyphicon glyphicon-plus" ></span> Nuevo Usuario</button>
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
				<div id="resultados"></div><!-- Carga los datos ajax -->
				<div class='outer_div'></div><!-- Carga los datos ajax -->			
			</div>
		</div>

	</div>
	
  </body>

</html>
