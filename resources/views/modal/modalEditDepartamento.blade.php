
	<!-- Modal -->
	<div class="modal fade" id="editDepartamento" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Editar Departamento</h4>
		  </div>
		  <div class="modal-body">
                      <!--editar esto a el modulo a agregar-->
			
			
			
			
			<form class="form-horizontal" id="guardarEditDepartamento" name="guardarEditdepartamento">
			@csrf
			<!-- <div id="resultados_ajax"></div> -->
			<input type="hidden" id="id" name="id"/>
			  <div class="form-group">
				<label for="nombre" class="col-sm-3 control-label">Nombre </label>
				<div class="col-sm-8">
				  <input type="text"  class="form-control" id="editNombreDepartamento" name="editNombreDepartamento" required>
				</div>
			  </div>
			 
				  
			
			  <div class="form-group">
				<label for="descripcion" class="col-sm-3 control-label">Descripcion</label>
				<div class="col-sm-8">
					<textarea class="form-control" id="editDescripcionDepartamento" name="editDescripcionDepartamento"   maxlength="255" ></textarea>
				  
				</div>
			  </div>
			  
	 
		  </div>
		  <div class="modal-footer">
          <button type="button" class="btn btn-primary" onclick="updateDepartamento()">Editar</button> 
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        
		  </div>
		  </form>
		</div>
	  </div>
	</div>