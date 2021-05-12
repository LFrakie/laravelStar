estoy en el archivo reniec crear :D

<form action="{{url('/reniecs')}}" method="post">

{{ csrf_field() }}
Nombres: <input type="text" name="nombres" id="nombres" value="">
<br>
Ap. Paterno: <input type="text" name="appaterno" id="appaterno" value="">
<br>
Ap. Materno: <input type="text" name="apmaterno" id="apmaterno" value="">
<br> 
DNI: 		 <input type="text" name="DNI" id="DNI" value="">
<br>
<input type="submit" value="Registrar" onclick="return confirm('Seguro que quiere guardar?');">

</form>

