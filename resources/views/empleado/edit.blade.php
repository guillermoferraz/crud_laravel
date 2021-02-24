Formulario de edicion de empleados

<form action="{{ url('/empleado/'.$empleado->id) }}" method="post" enctype="multipart/form-data">
 @csrf
{{ mehod_field('PATCH') }}
@include('empleado.form');
</form>
