<html>
<body>
<h1>Inicio de Sesion</h1>
<br>
<form action = "{{route('validalogin')}}" method = 'POST'>
{{csrf_field()}}
Teclea usuario <input type = 'text' name ='user'>
<br>
Teclea password<input type  = 'text' name = 'pasw'>
<br>
<input type = 'submit' value = 'Iniciar Sesion'>
</form>
@if(Session::has('error'))
    <div>{{ Session::get('error') }}</div>
@endif
</body>
</html>