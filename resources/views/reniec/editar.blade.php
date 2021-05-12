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



    <input type="submit"  class="btn btn-success" value="Actualizar" onclick="return confirm('Confirmar guardado?');">
    </div>
</form>