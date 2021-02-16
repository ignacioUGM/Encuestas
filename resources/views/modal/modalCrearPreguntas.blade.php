	<!-- Modal -->
	<div class="modal fade" id="nueva_pregunta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar nueva Pregunta</h4>
		  </div>
		  <div class="modal-body">
                      <!--editar esto a el modulo a agregar-->
			
			
			
			
			<form class="form-horizontal" id="guardar_pregunta" name="guardar_pregunta">
			@csrf
<!-- 
			<input type="text" id="id_encuesta" name="id_encuesta"  >    -->
			<!-- <div id="resultados_ajax"></div> -->

			<div class="line-height">
		 <label id='message'> </label> 
	  </div>
       
			  <div class="form-group">
				<label for="nombre" class="col-sm-3 control-label">Nombre</label>
				<div class="col-sm-8">
				  <input type="text"  class="form-control" id="nombre_pregunta" name="nombre_pregunta" required>
				</div>
			  </div>
			 
				  
			
			  <div class="form-group">
				<label for="descripcion" class="col-sm-3 control-label">Descripcion</label>
				<div class="col-sm-8">
					<textarea class="form-control" id="descripcion_pregunta" name="descripcion_pregunta"   maxlength="255" ></textarea>
				  
				</div>
			  </div>
	 
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" onclick="CrearPreguntas()">Guardar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>