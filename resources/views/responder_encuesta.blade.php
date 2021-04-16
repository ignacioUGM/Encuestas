@include('layouts.app')

<table>

<thead>
               
               <tr>
            
                <th>seccion</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Acciones</th>
               

               
</tr>

</thead>
<tbody>

@foreach ($users_encuesta as $responder_encuesta)



<tr >
<td> {{$responder_encuesta->id}}</td>   
<td> {{$responder_encuesta->nombre_seccion}}</td>
<td> {{$responder_encuesta->nombre_pregunta}} </td>
<td> {{$responder_encuesta->descripcion_pregunta}}</td>
</tr>

@endforeach
    </tbody>








</table>