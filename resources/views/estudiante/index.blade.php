este es archivo estudiante
<table>	
	<thead>
		<tr>
			<th>#</th>			
			<th>Nombre</th>			
			<th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Opciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($estudiantes as $estudiante)	
		<tr>
			<td>{{$loop->iteration}} </td>
			<td>{{ $estudiante->nombre}}</td>
            <td>{{ $estudiante->appaterno}}</td>
            <td>{{ $estudiante->apmaterno}}</td>
            <td>

            	<a href="{{ url('/estudiantes/'.$estudiante->id.'/edit')}}">Actualizar</a> | Eliminar 
            	<form></form>
            	 

            </td>
		</tr>
		@endforeach
	</tbody>
</table>
