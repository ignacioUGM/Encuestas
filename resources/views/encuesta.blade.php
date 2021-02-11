@include('layouts.app')
@include('modal.modalEncuesta')
<!DOCTYPE html>
<html lang="en">

<div class="container">
    <div class="panel panel-success">
        <div class="panel-heading">
            <div class="btn-group pull-right">
                <button type='button' class="btn btn-success" data-toggle="modal" data-target="#nueva_encuesta"><span class="glyphicon glyphicon-plus"></span> Nueva Encuesta </button>
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


                    <!-- --------------------------------------------------------------------------------------------------------------------------- -->

                    <br> <br> <br> <br>

            
                    <div id="view_encuesta" class="outer_div">
       
                        @foreach ($encuestas as $encuesta)
                      

                        <div  class="col-lg-2 col-md-2 col-sm-6 col-xs-12 thumb text-center ng-scope" ng-repeat="item in records">
                            <a class="thumbnail" href="{{route('preguntas')}}?id_encuesta={{$encuesta->id_encuesta}}">

                                <img id="imagen" class="img-responsive" src="image/encuesta.png">

                            </a>
                    
                            <span id="tipo_encuesta" class="thumb-name"><p>{{$encuesta->nombre_tipo_encuesta}} </p> </span>                      
                            <span id="nombre_encuesta" class="thumb-code ng-binding"><p>{{$encuesta->nombre_encuesta}}</p></span>
                            <span id="created_at" class="thumb-name"><p>{{$encuesta->created_at}}</p></span>
                        </div>
                    
                        @endforeach
                
                    
             
                    </div>



                    <!--se carga el icono de productos --->
                    <!-- <div class='col-md-12 text-center'>
                                    <span id="loader"></span>
                                </div>
                            </div>
				<hr>
				<div class='row-fluid'>
					<div id="resultados"></div>Carga los datos ajax -->
                    <!-- </div>	
				<div class='row'>
					<div class='outer_div'></div>Carga los datos ajax -->
                    <!-- </div>  -->

            </form>







        </div>
    </div>
    <script src="{{ asset('js/encuesta.js') }}" type="text/javascript"></script>
</div>



</html>