@extends('layouts.app')
@section('content')
<div class="container">

@if(Session::has('mensaje'))

<div class="alert alert-success border-success alert-dismissible" role="alert">

{{ Session::get('mensaje') }}

<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>

@endif

<a href="{{ url('empleado/create') }}" class="btn btn-success btn-sm mb-1">Registrar nuevo empleado</a>

<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $empleados as $empleado)
        <tr>
            <td>{{ $empleado->id  }}</td>
            
            <td>
                <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto }}" alt="" width="150">

             </td>
            <td>{{ $empleado->Nombre }}</td>
            <td>{{ $empleado->ApellidoPaterno }}</td>
            <td>{{ $empleado->ApellidoMaterno }}</td>
            <td>{{ $empleado->Correo }}</td>
            <td class="row"><a class="btn btn-warning btn-sm m-1" href="{{ url('/empleado/'.$empleado->id. '/edit') }}">
                Editar 
                </a>
                <form action="{{ url('/empleado/'.$empleado->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    
                    <input class="btn btn-danger btn-sm m-1" type="submit" onclick="return confirm('Delete data?')" value="Borrar">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
{!! $empleados->links() !!}

</div>
@endsection
