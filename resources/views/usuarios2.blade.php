
@include('layouts.app')

<!DOCTYPE html>
<html lang="en">
		


<form method="POST" action="asignarUsuario">
@csrf


<input  id='id_encuesta' type="hidden" name="id_encuesta" value="{{$_POST['id_encuesta']}}">
<input type="hidden" name="departamento" value="{{ app('request')->input('departamento') }}">

<div class="card-body">
				
                <table id="asignarUserTable" class="table table-striped">
                <thead>
               <tr>

               
                <th>ID usuario</th>
                <th>Departamento</th>
                <th>Nombres</th>
                <th>Apellido</th>
                <th>Correo electronico</th>
                <th>Tipo de usuario</th>
                <th>Seleccion</th>

               
</tr>
</thead>
<tbody>

@foreach ($usuarios2 as $users)

<tr>

<td> {{$users->id}} </td>
<td>{{$users->nombre_departamento}}</td>
<td> {{$users->name}}</td>
<td> {{$users->lastname}}</td>
<td> {{$users->email}}</td>
<td> {{$users->nombre_usuario}}</td>
<td><div class="col-sm-12"><div class="checkbox"><label><input type="checkbox" name="asignacion[]" value="{{$users->id}}" ><span class="cr"></span></label></div> </td>
</tr>


@endforeach

</tbody>

</table>
</div>

<input type="submit" value="enviar">

</form>

<script src="{{ asset('js/asignar.js') }}" type="text/javascript"></script>
</body>