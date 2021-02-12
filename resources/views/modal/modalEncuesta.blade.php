<div class="modal fade" id="nueva_encuesta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
            
		  <div class="modal-header">
			
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar Encuesta</h4>
		  </div>
		  <div class="modal-body">
                      <!--editar esto a el modulo a agregar-->
			
			
			
			
			<form class="form-horizontal" id="guardar_encuesta" name="guardar_encuesta">
			@csrf
			<!-- <div id="resultados_ajax"></div> -->
			
			<input  id="id_encuesta" name="id_encuesta"/>

			<div class="form-group">
			
	     <label id='message'> </label>
	  </div>


			  <div class="form-group">
				<label for="nombre" class="col-sm-3 control-label">Nombre</label>
				<div class="col-sm-8">
				  <input type="text"  class="form-control" id="nombre_encuesta" name="nombre_encuesta" required>
				</div>
			  </div>
			 
				  


			  <div class="form-group">
				<label for="descripcion" class="col-sm-3 control-label">Tipo de encuesta</label>
				<div class="col-sm-8">
				<select name="tipo_encuesta" id="tipo_encuesta" class="form-select form-select-sm" aria-label=".form-select-sm example">
                 
				 <option value="">--escoga el tipo de encuesta</option>
				 	 @foreach ($tipo_encuestas as $tipo_encuesta) -->

				 <option value="{{$tipo_encuesta['id_tipo_encuesta']}}">{{$tipo_encuesta['nombre_tipo_encuesta']}} </option>
 		
                   @endforeach     




  
                 </select>
				  
				</div>
			  </div>
			  
	 
		  </div>
		  <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="encuesta()">Crear </button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
		  </form>
		</div>
	  </div>
	</div>
