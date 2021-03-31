@include('layouts.app')

<html lang="en"><head>




	

        <div class="container">
            <div class="panel panel-success">
                <div class="panel-body">
                    <h1 style="text-align: center">Nombre de Encuesta: encuesta2</h1>  
                </div>
                <div class="alert alert-primary">

                </div>
                <div class="panel-body">

                    <form class="form-horizontal" role="form" id="guardar_evaluacion">
                        <input type="hidden" id="id_encuesta" name="id_encuesta" value="33"> 
                        <input type="hidden" id="nombre_encuesta" name="nombre_encuesta" value="encuesta2"> 
                        <input type="hidden" id="tipo_encuesta" name="tipo_encuesta" value="1"> 
                        <input type="hidden" id="id_asignacion" name="id_asignacion" value="10"> 

                        <!-- el select de la bd se carga en los div -->

                        <div id="resultados_evaluacion"></div><!-- Carga los datos ajax -->
                        <div class="outer_div">        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <td colspan="2" style="text-align: center"><strong class="form-control">Evaluador : ignacio robles</strong></td>
                        <td colspan="3" style="text-align: center"><strong class="form-control">A Evaluar</strong></td>
                        <td colspan="1" style="text-align: center">
                            <select id="t_evaluar" name="t_evaluar" class="form-control" required="">
                                                                    <option value="14.518.129-1">[14.518.129-1] - Alvaro Guillermo Valenzuela Garrido</option>			
                                                                        <option value="19.159.723-0">[19.159.723-0] -  auto  evaluacion</option>			
                                                                        <option value="22.222.222-2">[22.222.222-2] - javier rojas</option>			
                                                                </select></td> 
                    </tr>

                </thead>
                <tbody><tr class="alert alert-primary">
                    <th>Criterio a Evaluar</th>
                    <th style="text-align: center">Nivel 1</th>
                    <th style="text-align: center">Nivel 2</th>
                    <th style="text-align: center">Nivel 3</th>
                    <th style="text-align: center">Nivel 4</th>
                    <th>Comentario</th>


                </tr>
                            <tr>

                        <td><input type="hidden" name="id_pregunta[]" id="id_pregunta" value="35"> <strong>cuantos años tienes</strong><br>wsdada</td>
                        <td><input class="form-check-input" type="radio" name="calificacion0" value="1" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion0" value="2" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion0" value="3" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion0" value="4" required=""></td>
                        <td><textarea class="form-control" type="text" name="comentario_pregunta[]" id="comentario_pregunta"></textarea></td>


                    </tr>

                                <tr>

                        <td><input type="hidden" name="id_pregunta[]" id="id_pregunta" value="36"> <strong>cuantos años tienes2</strong><br>wsdada</td>
                        <td><input class="form-check-input" type="radio" name="calificacion1" value="1" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion1" value="2" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion1" value="3" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion1" value="4" required=""></td>
                        <td><textarea class="form-control" type="text" name="comentario_pregunta[]" id="comentario_pregunta"></textarea></td>


                    </tr>

                                <tr>

                        <td><input type="hidden" name="id_pregunta[]" id="id_pregunta" value="37"> <strong>cuantos años tienes23</strong><br>wsdadassd</td>
                        <td><input class="form-check-input" type="radio" name="calificacion2" value="1" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion2" value="2" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion2" value="3" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion2" value="4" required=""></td>
                        <td><textarea class="form-control" type="text" name="comentario_pregunta[]" id="comentario_pregunta"></textarea></td>


                    </tr>

                            <tr>
                <input type="hidden" name="dinamico" id="dinamico" value="3">
                </tr>
                </tbody><tfoot>
                    <tr>
                        <td colspan="8" style="text-align: center">   Comentario General </td>  

                    </tr>  
                    <tr>

                        <td colspan="8"><textarea class="form-control" type="text" name="comentario_final" id="comentario_final" required=""></textarea></td>    
                    </tr> 

                    <table class="table">
   
                <tbody><tr class="alert alert-primary">
                    <th>Criterio a Evaluar</th>
                    <th style="text-align: center">Nivel 1</th>
                    <th style="text-align: center">Nivel 2</th>
                    <th style="text-align: center">Nivel 3</th>
                    <th style="text-align: center">Nivel 4</th>
                    <th>Comentario</th>


                </tr>
                            <tr>

                        <td><input type="hidden" name="id_pregunta[]" id="id_pregunta" value="35"> <strong>cuantos años tienes</strong><br>wsdada</td>
                        <td><input class="form-check-input" type="radio" name="calificacion0" value="1" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion0" value="2" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion0" value="3" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion0" value="4" required=""></td>
                        <td><textarea class="form-control" type="text" name="comentario_pregunta[]" id="comentario_pregunta"></textarea></td>


                    </tr>

                                <tr>

                        <td><input type="hidden" name="id_pregunta[]" id="id_pregunta" value="36"> <strong>cuantos años tienes2</strong><br>wsdada</td>
                        <td><input class="form-check-input" type="radio" name="calificacion1" value="1" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion1" value="2" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion1" value="3" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion1" value="4" required=""></td>
                        <td><textarea class="form-control" type="text" name="comentario_pregunta[]" id="comentario_pregunta"></textarea></td>


                    </tr>

                                <tr>

                        <td><input type="hidden" name="id_pregunta[]" id="id_pregunta" value="37"> <strong>cuantos años tienes23</strong><br>wsdadassd</td>
                        <td><input class="form-check-input" type="radio" name="calificacion2" value="1" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion2" value="2" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion2" value="3" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion2" value="4" required=""></td>
                        <td><textarea class="form-control" type="text" name="comentario_pregunta[]" id="comentario_pregunta"></textarea></td>


                    </tr>

                            <tr>
                <input type="hidden" name="dinamico" id="dinamico" value="3">
                </tr>
                </tbody><tfoot>
                    <tr>
                        <td colspan="8" style="text-align: center">   Comentario General </td>  

                    </tr>  
                    <tr>

                        <td colspan="8"><textarea class="form-control" type="text" name="comentario_final" id="comentario_final" required=""></textarea></td>    
                    </tr> 

                    <table class="table">

                <tbody><tr class="alert alert-primary">
                    <th>Criterio a Evaluar</th>
                    <th style="text-align: center">Nivel 1</th>
                    <th style="text-align: center">Nivel 2</th>
                    <th style="text-align: center">Nivel 3</th>
                    <th style="text-align: center">Nivel 4</th>
                    <th>Comentario</th>


                </tr>
                            <tr>

                        <td><input type="hidden" name="id_pregunta[]" id="id_pregunta" value="35"> <strong>cuantos años tienes</strong><br>wsdada</td>
                        <td><input class="form-check-input" type="radio" name="calificacion0" value="1" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion0" value="2" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion0" value="3" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion0" value="4" required=""></td>
                        <td><textarea class="form-control" type="text" name="comentario_pregunta[]" id="comentario_pregunta"></textarea></td>


                    </tr>

                                <tr>

                        <td><input type="hidden" name="id_pregunta[]" id="id_pregunta" value="36"> <strong>cuantos años tienes2</strong><br>wsdada</td>
                        <td><input class="form-check-input" type="radio" name="calificacion1" value="1" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion1" value="2" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion1" value="3" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion1" value="4" required=""></td>
                        <td><textarea class="form-control" type="text" name="comentario_pregunta[]" id="comentario_pregunta"></textarea></td>


                    </tr>

                                <tr>

                        <td><input type="hidden" name="id_pregunta[]" id="id_pregunta" value="37"> <strong>cuantos años tienes23</strong><br>wsdadassd</td>
                        <td><input class="form-check-input" type="radio" name="calificacion2" value="1" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion2" value="2" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion2" value="3" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion2" value="4" required=""></td>
                        <td><textarea class="form-control" type="text" name="comentario_pregunta[]" id="comentario_pregunta"></textarea></td>


                    </tr>

                            <tr>
                <input type="hidden" name="dinamico" id="dinamico" value="3">
                </tr>
                </tbody><tfoot>
                    <tr>
                        <td colspan="8" style="text-align: center">   Comentario General </td>  

                    </tr>  
                    <tr>

                        <td colspan="8"><textarea class="form-control" type="text" name="comentario_final" id="comentario_final" required=""></textarea></td>    
                    </tr> 

                    <table class="table">
    
                <tbody><tr class="alert alert-primary">
                    <th>Criterio a Evaluar</th>
                    <th style="text-align: center">Nivel 1</th>
                    <th style="text-align: center">Nivel 2</th>
                    <th style="text-align: center">Nivel 3</th>
                    <th style="text-align: center">Nivel 4</th>
                    <th>Comentario</th>


                </tr>
                            <tr>

                        <td><input type="hidden" name="id_pregunta[]" id="id_pregunta" value="35"> <strong>cuantos años tienes</strong><br>wsdada</td>
                        <td><input class="form-check-input" type="radio" name="calificacion0" value="1" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion0" value="2" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion0" value="3" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion0" value="4" required=""></td>
                        <td><textarea class="form-control" type="text" name="comentario_pregunta[]" id="comentario_pregunta"></textarea></td>


                    </tr>

                                <tr>

                        <td><input type="hidden" name="id_pregunta[]" id="id_pregunta" value="36"> <strong>cuantos años tienes2</strong><br>wsdada</td>
                        <td><input class="form-check-input" type="radio" name="calificacion1" value="1" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion1" value="2" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion1" value="3" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion1" value="4" required=""></td>
                        <td><textarea class="form-control" type="text" name="comentario_pregunta[]" id="comentario_pregunta"></textarea></td>


                    </tr>

                                <tr>

                        <td><input type="hidden" name="id_pregunta[]" id="id_pregunta" value="37"> <strong>cuantos años tienes23</strong><br>wsdadassd</td>
                        <td><input class="form-check-input" type="radio" name="calificacion2" value="1" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion2" value="2" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion2" value="3" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion2" value="4" required=""></td>
                        <td><textarea class="form-control" type="text" name="comentario_pregunta[]" id="comentario_pregunta"></textarea></td>


                    </tr>

                            <tr>
                <input type="hidden" name="dinamico" id="dinamico" value="3">
                </tr>
                </tbody><tfoot>
                    <tr>
                        <td colspan="8" style="text-align: center">   Comentario General </td>  

                    </tr>  
                    <tr>

                        <td colspan="8"><textarea class="form-control" type="text" name="comentario_final" id="comentario_final" required=""></textarea></td>    
                    </tr> 

                    <table class="table">
    
                <tbody><tr class="alert alert-primary">
                    <th>Criterio a Evaluar</th>
                    <th style="text-align: center">Nivel 1</th>
                    <th style="text-align: center">Nivel 2</th>
                    <th style="text-align: center">Nivel 3</th>
                    <th style="text-align: center">Nivel 4</th>
                    <th>Comentario</th>


                </tr>
                            <tr>

                        <td><input type="hidden" name="id_pregunta[]" id="id_pregunta" value="35"> <strong>cuantos años tienes</strong><br>wsdada</td>
                        <td><input class="form-check-input" type="radio" name="calificacion0" value="1" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion0" value="2" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion0" value="3" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion0" value="4" required=""></td>
                        <td><textarea class="form-control" type="text" name="comentario_pregunta[]" id="comentario_pregunta"></textarea></td>


                    </tr>

                                <tr>

                        <td><input type="hidden" name="id_pregunta[]" id="id_pregunta" value="36"> <strong>cuantos años tienes2</strong><br>wsdada</td>
                        <td><input class="form-check-input" type="radio" name="calificacion1" value="1" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion1" value="2" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion1" value="3" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion1" value="4" required=""></td>
                        <td><textarea class="form-control" type="text" name="comentario_pregunta[]" id="comentario_pregunta"></textarea></td>


                    </tr>

                                <tr>

                        <td><input type="hidden" name="id_pregunta[]" id="id_pregunta" value="37"> <strong>cuantos años tienes23</strong><br>wsdadassd</td>
                        <td><input class="form-check-input" type="radio" name="calificacion2" value="1" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion2" value="2" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion2" value="3" required=""></td>
                        <td><input class="form-check-input" type="radio" name="calificacion2" value="4" required=""></td>
                        <td><textarea class="form-control" type="text" name="comentario_pregunta[]" id="comentario_pregunta"></textarea></td>


                    </tr>

                            <tr>
                <input type="hidden" name="dinamico" id="dinamico" value="3">
                </tr>
                </tbody><tfoot>
                    <tr>
                        <td colspan="8" style="text-align: center">   Comentario General </td>  

                    </tr>  
                    <tr>

                        <td colspan="8"><textarea class="form-control" type="text" name="comentario_final" id="comentario_final" required=""></textarea></td>    
                    </tr> 


                    <tr>
                        <td colspan="8" style="text-align: center">
                            <button id="guardar_datos" class="btn btn-primary btn-lg">Enviar</button>       
                        </td>    

                    </tr>
                    
                </tfoot>
            </table>
        </div>
        </div><!-- Carga los datos ajax -->

                    </form>

                </div>
            </div>

        </div>
        <hr>


    

</body></html>