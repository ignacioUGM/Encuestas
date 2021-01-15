@include('layouts.app')

<!DOCTYPE html>
<html lang="en">

    <div class="container">
	<div class="panel panel-success">
		<div class="panel-heading">
		    <div class="btn-group pull-right">
				<button type='button' class="btn btn-success" data-toggle="modal" data-target="#nueva_encuesta"><span class="glyphicon glyphicon-plus" ></span> Nueva Encuesta </button>
			</div>
			<h4><i class='glyphicon glyphicon-search'></i> Encuestas Creadas </h4>
		</div>
		<div class="panel-body">

		
                    
			<form class="form-horizontal" role="form" id="datos">
				
						
                            <div class="row">
                                
                                <div class='col-md-4'>
                                    <label>Filtrar por nombre </label>
                                    <input type="text" class="form-control" id="q" placeholder="Nombre de encuesta" onkeyup='load(1);'>
                                </div>

                        
                         
                                <div class='col-md-3'>
                                     <label>Fecha inicio</label>
                                     <input class="form-control" type="date" name="fecha_inicio" id="fecha_inicio" onchange="load(1);">
                                </div>
                                <div class='col-md-3'>
                                    <label>Fecha termino </label>
                                    <input class="form-control" type="date" name="fecha_termino" id="fecha_termino" onchange="load(1);">
                                </div>



                                <!--se carga el icono de productos --->
                                <div class='col-md-12 text-center'>
                                    <span id="loader"></span>
                                </div>
                            </div>
				<hr>
				<div class='row-fluid'>
					<div id="resultados"></div><!-- Carga los datos ajax -->
				</div>	
				<div class='row'>
					<div class='outer_div'></div><!-- Carga los datos ajax -->
				</div>
                
			</form>
				
			
		
	
			
			
			
  </div>
</div>
		 
	</div>
</html>