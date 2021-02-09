@include('layouts.app')
@include('modal.modalDepartamento')
@include('modal.modalEditDepartamento')

<!DOCTYPE html>
<html lang="en">

  <body>
	
	
    <div class="container">
	<div class="panel panel-success">
		<div class="panel-heading">
		    <div class="btn-group pull-right">
				<button type='button' class="btn btn-success" data-toggle="modal" data-target="#nuevo_departamento"><span class="glyphicon glyphicon-plus" ></span> Nuevo departamento </button>
			</div>
			<h4><i class='glyphicon glyphicon-search'></i> Buscar Departamento</h4>
		</div>
		<div class="panel-body">
			<!-- <?php
				// include("modal/registro_departamento.php");
				// include("modal/editar_departamento.php");
			?> -->
			<form class="form-horizontal" role="form" id="datos_cotizacion">
				
						<div class="form-group row">
							<label for="q" class="col-md-2 control-label">Nombre</label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="q" placeholder="Nombre del departamento" onkeyup='load(1);'>
							</div>
						
						</div>
	 
			</form>



			<div class="card-body">
				
				<table id="departamentoTable" class="table table-striped">
				<thead>
			   <tr>
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Agregado</th>
			
			   
</tr>
</thead>
<tbody>

@foreach ($departamento as $departamento)


<tr id="sid{{$departamento->id}}">
<td> {{$departamento->nombre_departamento}} </td>
<td> {{$departamento->descripcion_departamento}}</td>
<td> {{$departamento->created_at}}</td>
<td><button type='button' class="btn btn-success btn-sm"  data-toggle="modal" data-target="#editDepartamento" onclick="editaDepartamento({{$departamento->id}})"><i class='glyphicon glyphicon-edit'></i></button>
<button type='button' class="btn btn-danger btn-sm"  data-toggle="modal" data-target="" onclick="DeleteDepartamento({{$departamento->id}})"> <i class='glyphicon glyphicon-trash'></i> </button></td>


</tr>
@endforeach
</tbody>
</table>
</div>


          












                    <!-- el select de la bd se carga en los div -->
                    
		<!-- <div id="resultados"></div>Carga los datos ajax -->
		<!-- <div class='outer_div'></div>Carga los datos ajax		 -->
  </div>
</div>
		 
	</div>
	<hr>

         <!-- el select proviene de js -->
          <!-- <script type="text/javascript" src="js/funciones/departamento.js"></script> -->
		  <script src="{{ asset('js/departamento.js') }}" type="text/javascript"></script>
		 <!-- <script type="text/javascript" src="js/departamento_page.js"></script>        -->
  </body>
</html>
