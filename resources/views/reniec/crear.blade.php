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
sexo: 		 <input type="text" name="sexo" id="sexo" value="">
<br>

fecha_nac: 		 <input type="text" name="fecha_nac" id="fecha_nac" value="">
<br>	
departamento: 		 <input type="text" name="departamento" id="departamento" value="">
<br>
provincia: 		 <input type="text" name="provincia" id="provincia" value="">
<br>
distrito: 		 <input type="text" name="distrito" id="distrito" value="">
<br>
<input type="submit" value="Registrar" onclick="return confirm('Seguro que quiere guardar?');">

</form>

