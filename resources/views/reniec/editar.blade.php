hola

<form action="{{url('/reniecs/'.$reniec->id)}}" method="post" >

    {{ csrf_field() }}
    {{ method_field('PATCH') }} 

    <div class="form-group">
 

    <label for="Nombre"  class="control-label" >{{'Nombres'}}</label>
    <input type="text" placeholder="Nombres"  name="nombres" id="nombres"  value="{{ isset($reniec->nombres)?$reniec->nombres:old('nombres') }}">
    
    {!! $errors->first('nombres','<div class="invalid-feedback">:message</div>')  !!}
    <br>



    <label for="Paterno"  class="control-label" >{{'Paterno'}}</label>
    <input type="text" placeholder="paterno"  name="appaterno" id="appaterno"   value="{{ isset($reniec->appaterno)?$reniec->appaterno:old('appaterno') }}">
    
    {!! $errors->first('appaterno','<div class="invalid-feedback">:message</div>')  !!}
    <br>



    <label for="Materno"  class="control-label" >{{'Materno'}}</label>
    <input type="text" placeholder="escribe tu apellido materno"  name="apmaterno" id="apmaterno"   value="{{ isset($reniec->apmaterno)?$reniec->apmaterno:old('apmaterno') }}">
    
    {!! $errors->first('apmaterno','<div class="invalid-feedback">:message</div>')  !!}
    <br>



    <label for="DNI"  class="control-label" >{{'DNI'}}</label>
    <input type="text" placeholder="Tu dni"  name="DNI" id="DNI"   value="{{ isset($reniec->DNI)?$reniec->DNI:old('DNI') }}">
    
    {!! $errors->first('DNI','<div class="invalid-feedback">:message</div>')  !!}
    <br>





    <label for="sexo"  class="control-label" >{{'sexo'}}</label>
    <input type="text" placeholder="Sexo"  name="sexo" id="sexo"   value="{{ isset($reniec->sexo)?$reniec->sexo:old('sexo') }}">
    
    {!! $errors->first('sexo','<div class="invalid-feedback">:message</div>')  !!}
    <br>

    <label for="fecha_nac"  class="control-label" >{{'fecha_nac'}}</label>
    <input type="text" placeholder="Tu dni"  name="fecha_nac" id="fecha_nac"   value="{{ isset($reniec->fecha_nac)?$reniec->fecha_nac:old('fecha_nac') }}">
    
    {!! $errors->first('fecha_nac','<div class="invalid-feedback">:message</div>')  !!}
    <br>

    <label for="departamento"  class="control-label" >{{'departamento'}}</label>
    <input type="text" placeholder="Tu departamento"  name="departamento" id="departamento"   value="{{ isset($reniec->departamento)?$reniec->departamento:old('departamento') }}">
    
    {!! $errors->first('departamento','<div class="invalid-feedback">:message</div>')  !!}
    <br>

    <label for="provincia"  class="control-label" >{{'provincia'}}</label>
    <input type="text" placeholder="Tu provincia"  name="provincia" id="provincia"   value="{{ isset($reniec->provincia)?$reniec->provincia:old('provincia') }}">
    
    {!! $errors->first('provincia','<div class="invalid-feedback">:message</div>')  !!}
    <br>

    <label for="distrito"  class="control-label" >{{'distrito'}}</label>
    <input type="text" placeholder="Tu distrito"  name="distrito" id="distrito"   value="{{ isset($reniec->distrito)?$reniec->distrito:old('distrito') }}">
    
    {!! $errors->first('distrito','<div class="invalid-feedback">:message</div>')  !!}
    <br>
    <input type="submit"  class="btn btn-success" value="Actualizar" onclick="return confirm('Confirmar guardado?');">
    </div>
</form>