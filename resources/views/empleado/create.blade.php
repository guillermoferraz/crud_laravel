Formulario de creacion de empleados

<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
    @csrf
    
    <label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" placeholder="Nombre" id="Nombre">
    <br>
    <label for="ApellidoPaterno">Apellido Paterno</label>
    <input type="text" name="ApellidoPaterno" placeholder="Apellido Paterno" id="ApellidoPaterno">
    <br>
    <label for="ApellidoMaterno">Aperllio Masterno</label>
    <input type="text" name="ApellidoMaterno" placeholder="Apellido Materno" id="ApellidoMaterno">
    <br>
    <label for="Correo">Correo</label>
    <input type="text" name="Correo" placeholder="Correo" id="Correo">
    <br>
    
    <label for="Foto"> Foto </label>
    <input type="file" name="Foto" id="Foto">
    
    <input type="submit" value="Enviar">

</form>
