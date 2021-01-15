<table class="table table-striped">
    <tr>
        <th>ID_encuesta</th>
        <th>nombre encuesta</th>

    </tr>
    @foreach ($tipo_de_encuesta as $tipo_de_encuesta)

    <tr>
    <td> {{$tipo_de_encuesta->id_encuestas}} </td>
    <td> {{$tipo_de_encuesta->nombre_encuestas}}</td>


    </tr>
    @endforeach

</table>