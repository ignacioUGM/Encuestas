
@include('layouts.app')

<!DOCTYPE html>
<html lang="en">
		



<div class="card-body">
				
                <table id="asignarUserTable" class="table table-striped">
                <thead>
               <tr>
                <th>ID</th>
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
<td> {{$users->name}}</td>
<td> {{$users->lastname}}</td>
<td> {{$users->email}}</td>
<td> {{$users->nombre_usuario}}</td>
<td><button type="button" class="btn btn-success btn-sm"><i class='glyphicon glyphicon-edit'></i> </button> </td>
</tr>


@endforeach

</tbody>

</table>
</div>


<script src="{{ asset('js/asignar.js') }}" type="text/javascript"></script>
</body>