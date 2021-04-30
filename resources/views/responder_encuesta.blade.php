@include('layouts.app')




    
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
                                        
                                        <td colspan="3" style="text-align: center"><strong class="form-control">A Evaluar</strong>
                                        
                                        </td>
                                        <td colspan="1" style="text-align: center">
                                            <select id="t_evaluar" name="t_evaluar" class="form-control" > 
                                           @foreach($evaluados as $evaluado)
                                           <option value="{{ $evaluado['id'] }}"> {{$evaluado['email']}}</option>
                                           @endforeach
                                           </select>
                                    </tr>
                                  
                                </thead>
                                <tbody>
                                    <tr class="alert alert-primary">

                                        @foreach($seccion as $index => $valor)
                                        <input id='id_seccion' type="hidden" name="id_seccion" value="{{$valor->id}}">
                                        <th class="hidden">{{$valor->id}} </th>
                                        <th class="alert alert-primary">{{$valor->nombre_seccion}}</th>
                                        <th>Descripcion</th>
                                        <th  style="text-align: center">Nunca</th>&nbsp
                                        <th style="text-align: center">Casi Nunca</th>&nbsp
                                        <th style="text-align: center">Algunas Veces</th>&nbsp
                                        <th style="text-align: center">Casi siempre</th>&nbsp
                                        <th style="text-align: center">Siempre</th>&nbsp&nbsp&nbsp&nbsp&nbsp
                                        <th>Comentario</th>

                                    </tr>
                                

                               

                                    @foreach($pregunta as $index_p => $valor_p)
                                    
         
                                   @if($valor_p->id_seccion == $valor->id)
                                
                                         <tr>
                                         <input id='id[]' type="hidden" name="id[]" value="{{$valor_p->id}}">
                                        <td class="hidden" >{{$valor_p->id}}</td>
                                        <td>{{$valor_p->nombre_pregunta}}</td>
                                        <td>{{$valor_p->descripcion_pregunta}}</td>
                                        <td><input class="form-check-input" type="radio" name="calificacion_{{$index_p}}" value="1" required ></td>&nbsp&nbsp
                                        <td><input class="form-check-input" type="radio" name="calificacion_{{$index_p}}" value="2" required ></td>&nbsp&nbsp
                                        <td><input class="form-check-input" type="radio" name="calificacion_{{$index_p}}" value="3" required ></td>&nbsp&nbsp
                                        <td><input class="form-check-input" type="radio" name="calificacion_{{$index_p}}" value="4" required ></td>&nbsp&nbsp
                                        <td><input class="form-check-input" type="radio" name="calificacion_{{$index_p}}" value="5" required></td>&nbsp&nbsp
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
                                    <tfoot>
                            
                                <td> <td><input class="btn btn-success btn-lg btn-block"  type="submit" value="enviar"> <td></td> 



                                </tfoot>
                             
                                </tbody>

                          
                             


                            






                        </div>
                    </div>

            </div>
        </div>

    </div>



    </form>

 

