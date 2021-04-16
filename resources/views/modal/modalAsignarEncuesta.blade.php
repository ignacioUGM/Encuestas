<!-- Modal -->
<div class="modal fade" id="modalAsignar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">

				<h4 class="modal-title" id="exampleModalLabel"><i class='glyphicon glyphicon-edit'></i>Asignar Encuesta</h4>

			</div>
			<div class="modal-body">




				<form id='editContraForm' method="POST" action="usuarios2">
					@csrf
					<div class="form-group">
						<label id='message'> </label>
					</div>


					<div class="form-group">
						<input  id='id_encuesta' type="hidden" name="id_encuesta" value="{{$_GET['id_encuesta']}}">
							<label for="descripcion">Departamento</label>
							<select id="departamento" name="departamento" class="form-select form-select-sm" aria-label=".form-select-sm example">
								<option value="">--escoga el departamento</option>

								@foreach ($departamentos as $departamento)
								<option value="{{$departamento['id']}}">{{$departamento['nombre_departamento']}} </option>
								@endforeach

							</select>

					</div>








					<div class="modal-footer">
						<input type="submit" class="btn btn-success" value="Confirmar">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
					</div>
				</form>




			</div>

		</div>
	</div>
</div>