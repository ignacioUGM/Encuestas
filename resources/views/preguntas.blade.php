@include('layouts.app')
@include('modal.modalCrearPreguntas')
@include('modal.modalEditPregunta')
@include('modal.modalAsignarEncuesta')
<!DOCTYPE html>
<html lang="en">
 
        
        <div class="container">
            <div class="panel panel-success">
                <div class="panel-body">
                    <h1 style="text-align: center">Nombre de Encuesta:{{$_GET['id_encuesta']}} </h1>  

<input  id='id_encuesta' type="hidden" value="{{$_GET['id_encuesta']}}">
                </div>
                <div class="panel-heading">
                   
                    <div class="btn-group col-md-5 ">

                            <button type='button' class="btn btn-danger" onclick="deshabilitarEncuesta()"><span class="glyphicon glyphicon-trash" ></span> Eliminar Encuesta </button>
                    
                    </div>
                    
                    <div class="btn-group  col-md-5 ">

                            <!-- <button type='button' class="btn btn-primary" data-toggle="modal" data-target="#asignar_encuesta_general"><span class="glyphicon glyphicon-share" ></span> Asignar Encuesta </button> -->
                     
                            <button type='button' class="btn btn-primary" data-toggle="modal" data-target="#modalAsignar" ><span class="glyphicon glyphicon-share" ></span> Asignar Encuesta </button>
                     
                    </div>
                    
                     <div class="btn-group">
                        <button type='button' class="btn btn-success" data-toggle="modal" data-target="#nueva_pregunta"><span class="glyphicon glyphicon-plus" ></span> Nueva Pregunta </button>
                    </div>
                    
                    <h4><i class='glyphicon glyphicon-search'></i> Buscar Pregunta </h4>
                </div>
                <div class="panel-body">

                    <form class="form-horizontal" role="form" id="datos_cotizacion">

                        <div class="form-group row">
                            <label for="q" class="col-md-2 control-label">Nombre</label>
                            <div class="col-md-5">
                                <input type="text" class="form-control" id="q" placeholder="Titulo de la Pregunta" onkeyup='load(1);'>
                            </div>
                        </div>




                    </form>
                    <div class="card-body">
				
                <table id="preguntasTable" class="table table-striped">
                <thead>
               <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Acciones</th>

               
</tr>
</thead>
<tbody>

@foreach ($preguntas as $pregunta)


<tr id="sid{{$pregunta->id}}">
<td> {{$pregunta->nombre_pregunta}} </td>
<td> {{$pregunta->descripcion_pregunta}}</td>
<td><button type="button" class="btn btn-success btn-sm"  data-toggle="modal" data-target="#edit_pregunta"><i class='glyphicon glyphicon-edit' onclick="recuperaridencuesta({{$pregunta->id}})"></i> </button>
<button type='button' class="btn btn-danger btn-sm"  data-toggle="modal" data-target="" onclick="DeletePregunta({{$pregunta->id}})"> <i class='glyphicon glyphicon-trash'></i> </button>
</td>
</tr>

@endforeach
    </tbody>
        </table>
                   </div>
                </div>
            </div>

        </div>
        <script src="{{ asset('js/pregunta.js') }}" type="text/javascript"></script>

</html>
