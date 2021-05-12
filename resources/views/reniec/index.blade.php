<!-- CSS only -->
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>

<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet"/>

<div class="container">

<center>
<a href="{{ url('/reniecs/create') }}" class="btn btn-primary btn-lg my-4 shadow"  >
AGREGAR PERSONAS
</a>

</rp></center>

<table class="table table-striped table-hover shadow-lg">
	<thead class="table-dark bg-primary">
		<tr>
			<th>#</th>			
			<th>NOMBRE</th>			
			<th>AP. PATERNO</th>
            <th>AP. MATERNO</th>
            <th>DNI</th>
			<th>OPCIONES</th>
			
		</tr>
	</thead>
	<tbody>
		@foreach ($reniecs as $reniec)	
		<tr>
			<td>{{$loop->iteration}} </td>
			<td>{{ $reniec->nombres}}</td>
            <td>{{ $reniec->appaterno}}</td>
            <td>{{ $reniec->apmaterno}}</td>
            <td>{{ $reniec->DNI}}</td>
			<td>
			<!-- <a href="{{ url('/reniecs/'.$reniec->id.'/edit') }}"  class="btn btn-warning" onclick="return confirm('Desea Actualizar?');"  > Actualizar</a>			 -->
			<a href="{{ url('/reniecs/'.$reniec->id.'/edit') }}"  class="btn btn-success"> Actualizar</a>			
			
			| 
		
			<form method="post" action="{{url('/reniecs/'.$reniec->id)}}" style="display:inline" >
			  
			  {{ csrf_field() }}
			  {{ method_field('DELETE') }}
			  <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar este item?');">
			  Eliminar
			</button>
			</form>





			</td>
		</tr>
		@endforeach
	</tbody>
</table>
{{ $reniecs->links() }}
</div>

<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
></script>