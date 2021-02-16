	<!-- Modal -->
	<div class="modal fade" id="edit_pregunta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Editar Pregunta</h4>
		  </div>
		  <div class="modal-body">
			
			
			
			
			<form class="form-horizontal" id="guardar_pregunta" name="guardar_pregunta">
			@csrf
			<input type="hidden" id="id" name="id"/>

			  <div class="form-group">
				<label for="nombre" class="col-sm-3 control-label">Nombre</label>
				<div class="col-sm-8">
				  <input type="text"  class="form-control" id="nombreEdit" name="nombre_pregunta" required>
				</div>
			  </div>
			 
				  
			
			  <div class="form-group">
				<label for="descripcion" class="col-sm-3 control-label">Descripcion</label>
				<div class="col-sm-8">
					<textarea class="form-control" id="descripcionEdit" name="descripcion_pregunta"   maxlength="255" ></textarea>
				  
				</div>
			  </div>
	 
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" onclick="updatePregunta()" >Editar</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>