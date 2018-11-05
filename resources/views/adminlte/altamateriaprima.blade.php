
@extends('sistema.vistamain')


@section('contenido')
<h1>Alta de materia prima</h1>
<br>
<form action = "{{route('guardamateriaprima')}}" method = "POST" enctype='multipart/form-data'>
{{csrf_field()}}

@if($errors->first('idm')) 
<i> {{ $errors->first('idm') }} </i> 
@endif	<br>

Clave <input type = 'text' name = 'idm' value="{{$idms}}" readonly ='readonly'>
<br>
@if($errors->first('materia prima')) 
<i> {{ $errors->first('materia prima') }} </i> 
@endif	<br>
Materia prima<input type = 'text' name = 'materia prima' value="{{old('materia prima')}}">
<br>
@if($errors->first('tipo')) 
<i> {{ $errors->first('tipo') }} </i> 
@endif	<br>
Tipo<input type = 'text' name = 'tipo' value="{{old('tipo')}}">
<br>
Azucar<input type = 'radio' name = 'azucar' value = 'azucar'>Azucar
    <input type = 'radio' name = 'adicionales' value = 'adicionales'>Sabor
<br>
@if($errors->first('Unidad de Medida')) 
<i> {{ $errors->first('Unidad de Medida') }} </i> 
@endif	<br>
Unidad de Existencia<input type = 'text' name = 'unidad de existencia' value="{{old('unidad de existencia')}}">
<br>
@if($errors->first('cantidad')) 
<i> {{ $errors->first('cantidad') }} </i> 
@endif	<br>
Cantidad<input type = 'text' name = 'cantidad' value="{{old('cantidad')}}">
<br>
Inventario<select name = 'idc'>
	    
			@foreach($carreras as $car)
			<option value = '{{$car->idc}}'>{{$car->nombre}}</option>
			@endforeach
                  </select>
<br>
@if($errors->first('archivo')) 
<i> {{ $errors->first('archivo') }} </i> 
@endif	<br>
Seleccione archivo <input type ='file' name='archivo'>
<br>
<input type  ='submit' value = 'Guardar'>
</form>
@stop



@section('bienvenida')
<b>BIenvenido PANchito FOTO </b>
@stop















