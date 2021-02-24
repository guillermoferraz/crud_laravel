Formulario en comun con create y edit

    <label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" placeholder="Nombre" id="Nombre" value="{{ $empleado->Nombre}}">
    <br>
    <label for="ApellidoPaterno">Apellido Paterno</label>
    <input type="text" name="ApellidoPaterno" placeholder="Apellido Paterno" id="ApellidoPaterno" value="{{ $empleado->ApellidoPaterno}}">
    <br>
    <label for="ApellidoMaterno">Aperllio Masterno</label>
    <input type="text" name="ApellidoMaterno" placeholder="Apellido Materno" id="ApellidoMaterno" value="{{$empleado->ApellidoMaterno}}">
    <br>
    <label for="Correo">Correo</label>
    <input type="text" name="Correo" placeholder="Correo" id="Correo" value="{{$empleado->Correo}}">
    <br>
    
    <label for="Foto"> Foto </label>
    {{$empleado->Foto}}
    <input type="file" name="Foto" id="Foto" value="">
    
    <input type="submit" value="Enviar">

