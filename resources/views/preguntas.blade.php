@include('layouts.app')
<!DOCTYPE html>
<html lang="en">

<input type="hidden" id="id_encuesta" name="id_encuesta"  >    
        
        <div class="container">
            <div class="panel panel-success">
                <div class="panel-body">
                    <h1 style="text-align: center">Nombre de Encuesta:</h1>  


                </div>
                <div class="panel-heading">
                   
                    <div class="btn-group col-md-5 ">

                            <button type='button' class="btn btn-danger" onclick="deshabilitarEncuesta()"><span class="glyphicon glyphicon-trash" ></span> Eliminar Encuesta </button>
                    
                    </div>
                    
                    <div class="btn-group  col-md-5 ">

                            <!-- <button type='button' class="btn btn-primary" data-toggle="modal" data-target="#asignar_encuesta_general"><span class="glyphicon glyphicon-share" ></span> Asignar Encuesta </button> -->
                     
                            <button type='button' class="btn btn-primary" data-toggle="modal" data-target="#asignar_encuesta_jefatura" onclick="recuperarUsuarioDepartamento(0)"><span class="glyphicon glyphicon-share" ></span> Asignar Encuesta </button>
                     
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



                </div>
            </div>

        </div>

</html>
