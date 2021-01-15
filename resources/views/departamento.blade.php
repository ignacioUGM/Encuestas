@include('layouts.app')

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
		
			<form class="form-horizontal" role="form" id="datos_cotizacion">
				
						<div class="form-group row">
							<label for="q" class="col-md-2 control-label">Nombre</label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="q" placeholder="Nombre del departamento" onkeyup='load(1);'>
							</div>
						
						</div>
	
			</form>

  </div>
</div>
		 
	</div>


        
    
  </body>
</html>
