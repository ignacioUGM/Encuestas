
	<!-- Modal -->
	<div class="modal fade" id="nuevo_departamento" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar nuevo Departamento</h4>
		  </div>
		  <div class="modal-body">
                      <!--editar esto a el modulo a agregar-->
			<form class="form-horizontal" method="post" id="guardar_departamento" name="guardar_departamento">
			<div id="resultados_ajax"></div>
			  <div class="form-group">
				<label for="nombre" class="col-sm-3 control-label">Nombre</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="nombre" name="nombre" required>
				</div>
			  </div>
			 
				  
			  <div class="form-group">
				<label for="descripcion" class="col-sm-3 control-label">Descripcion</label>
				<div class="col-sm-8">
					<textarea class="form-control" id="descripcion" name="descripcion"   maxlength="255" ></textarea>
				  
				</div>
			  </div>
			  
	 
			 
			 
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="guardar_datos" onclick="registrarDepartamento()">Guardar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>