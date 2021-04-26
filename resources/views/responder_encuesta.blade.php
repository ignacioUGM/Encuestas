@include('layouts.app')

<html lang="en">

<head>
    
    <div class="container">
        <div class="panel panel-success">
            <div class="panel-body">
                <h1 style="text-align: center">Nombre de Encuesta:{{$_GET['id_encuesta']}} </h1>
                
            </div>

            <div class="panel-body">

                 


                <form class="form-horizontal" role="form" id="calificaciones" method="POST" action="calificaciones">
                    <input id='id_encuesta' type="hidden" name="id_encuesta" value="{{$_GET['id_encuesta']}}">
                    @csrf
                    <div class="outer_div">

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                          
                                        
                                        <td colspan="2" style="text-align: center"><strong class="form-control">Evaluador:   </strong></td>
                                        <td colspan="3" style="text-align: center"><strong class="form-control">A Evaluar</strong></td>
                                        <td colspan="1" style="text-align: center">
                                            <select id="t_evaluar" name="t_evaluar" class="form-control" > 
                                        
                                    
                                         
                                    </tr>
                                  
                                </thead>
                                <tbody>
                                    <tr class="alert alert-primary">

                                        @foreach($seccion as $index => $valor)
                                        <input id='id_seccion' type="hidden" name="id_seccion" value="{{$valor->id}}">
                                        <th class="hidden">{{$valor->id}} </th>
                                        <th class="alert alert-primary">{{$valor->nombre_seccion}}</th>
                                        <th  style="text-align: center">Nivel 1</th>
                                        <th style="text-align: center">Nivel 2</th>
                                        <th style="text-align: center">Nivel 3</th>
                                        <th style="text-align: center">Nivel 4</th>
                                        <th style="text-align: center">Nivel 5</th>
                                        <th>Comentario</th>

                                    </tr>
                                

                               

                                    @foreach($pregunta as $index_p => $valor_p)
                                    
         
                                   @if($valor_p->id_seccion == $valor->id)
                                
                                         <tr>
                                         <input id='id[]' type="hidden" name="id[]" value="{{$valor_p->id}}">
                                        <td class="hidden" >{{$valor_p->id}}</td>
                                        <td>{{$valor_p->nombre_pregunta}}</td>
                                        <td><input class="form-check-input" type="radio" name="calificacion_{{$index_p}}" value="1" required ></td>
                                        <td><input class="form-check-input" type="radio" name="calificacion_{{$index_p}}" value="2" required ></td>
                                        <td><input class="form-check-input" type="radio" name="calificacion_{{$index_p}}" value="3" required ></td>
                                        <td><input class="form-check-input" type="radio" name="calificacion_{{$index_p}}" value="4" required ></td>
                                        <td><input class="form-check-input" type="radio" name="calificacion_{{$index_p}}" value="5" required></td>
                                        <td><textarea class="form-control" type="text" name="comentario_pregunta[]" id="comentario_pregunta[]"></textarea></td>

                                    </tr>
                                    
                                    @endif
                                    @endforeach 
      
                                    
                                    <tr>
                                        <td colspan="8" style="text-align: center" class="alert alert-primary"> Comentario General </td>


                                    </tr>
                                    <tr>

                                        <td colspan="8"><textarea class="form-control" type="text" name="comentario_final[]" id="comentario_final" required></textarea></td>

                                     
                                    </tr>

                                    @endforeach
                                  <td>  <td>   <input class="btn btn-success btn-lg btn-block" type="submit" value="enviar"> </td></td>
                                </tbody>

                                <tfoot>
                             


                                </tfoot>






                        </div>
                    </div>

            </div>
        </div>

    </div>



    </form>

    </body>

</html>