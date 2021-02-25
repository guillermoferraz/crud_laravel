
    <h1 class="h1 mx-auto col-md-4">{{ $modo }} empleado</h1>
    
    @if(count($errors)>0)

        <div class="alert alert-danger col-md-4 float-right border border-danger alert-dismissible" role="alert">
            <ul>
                 @foreach($errors->all() as $error)
                    <li> {{ $error  }}</li>
                    @endforeach

            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    @endif

    <div class="form-group col-md-4 mx-auto">
    <label for="Nombre">Nombre</label>
    <input  type="text" class="form-control" name="Nombre" placeholder="Nombre" id="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre: old('Nombre') }}">
    <br>
    <label for="ApellidoPaterno">Apellido Paterno</label>
    <input type="text" class="form-control" name="ApellidoPaterno" placeholder="A Paterno" id="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno: old('ApellidoPaterno')}} ">
    <br>
    <label for="ApellidoMaterno">Apellido Materno</label>
    <input type="text" class="form-control"  name="ApellidoMaterno" placeholder="A Materno" id="ApellidoMaterno" value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno: old('ApellidoMaterno')}} ">
    <br>
    <label for="Correo">Correo</label>
    <input type="text" class="form-control" name="Correo" placeholder="Correo" id="Correo" value="{{ isset($empleado->Correo)?$empleado->Correo: old('Correo')}}">
    <br>
    
    <label for="Foto" class="form-control-label"></label>
    @if(isset($empleado->Foto))
    <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto }}" alt="" width="150">
    @endif
    <input type="file" class="btn btn-info btn-sm" name="Foto" id="Foto" value="">
    
    <input type="submit" class="btn btn-primary btn-sm" value="{{ $modo }}">
    <a href="{{ url('empleado/') }}" class="btn btn-secondary btn-sm mt-1">Regresar</a>
    </div>
