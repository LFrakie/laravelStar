estoy en el archivo estudiante crear :D

<form action="{{url('/estudiantes')}}" method="post">

{{ csrf_field() }}
Nombre: <input type="text" name="nombre" id="nombre" value="">
<br>
Ap. Paterno: <input type="text" name="appaterno" id="appaterno" value="">
<br>
Ap. Materno: : <input type="text" name="apmaterno" id="apmaterno" value="">
<br>
<input type="submit" value="Registrar" onclick="return confirm('Seguro que quiere guardar?');">

</form>

