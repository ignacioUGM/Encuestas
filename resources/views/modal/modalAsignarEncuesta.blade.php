<!-- Modal -->
<div class="modal fade" id="modalAsignar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <h4 class="modal-title" id="exampleModalLabel"><i class='glyphicon glyphicon-edit'></i>Asignar Encuesta</h4>
       
      </div>
      <div class="modal-body">
        

      <form id='editContraForm'>
	    @csrf  
      <div class="form-group">
	     <label id='message'> </label>
	  </div>


	  <div class="form-group">
				<label for="descripcion">Departamento</label>
				<select name="select_departamento" id="select_departamento" class="form-select form-select-sm" aria-label=".form-select-sm example">
				 <option value="">--escoga el departamento</option>
				 @foreach ($preguntas as $pregunta)
				 <option value="{{$pregunta['id']}}">{{$pregunta['nombre_departamento']}} </option>
 		      @endforeach
			   </select>
			  </div>


      





	  <div class="modal-footer">
        <button type="button" class="btn btn-success" >Confirmar</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
	  </div>
	  </form>


		
	
      </div>
    
    </div>
  </div>
</div>