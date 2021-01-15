@include('layouts.app')
@extends('master')
@section('contenedor')
<!DOCTYPE html>
<html lang="en">
  <head>

      
  </head>
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
				
						<div class="form-group row">
							<label for="q" class="col-md-2 control-label">Nombres:</label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="q" placeholder="Nombre" onkeyup='load(1);'>
							</div>
							
							
						</div>
					
						<table class="table table-striped">
                       <tr>
	                    <th>ID</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Genero</th>
                        <th>Mail</th>
                        <th>Tipo Usuario</th>
                       
    </tr>

	@foreach ($usuarios as $users)


    <tr>
    <td> {{$users->id}} </td>
    <td> {{$users->name}}</td>
	<td> {{$users->lastname}}</td>
    <td> {{$users->email}}</td>
    <td> {{$users->gender}}</td>
	<td> {{$users->mail}}</td>
	<td> {{$users->type_user}}</td>
	

    </tr>
	@endforeach
</table>
@endsection
	
			</form>
				<div id="resultados"></div><!-- Carga los datos ajax -->
				<div class='outer_div'></div><!-- Carga los datos ajax -->			
			</div>
		</div>

	</div>
	<hr>

  </body>
</html>
