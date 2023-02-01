@extends('layouts.app')
@section('content')
<div class="container">


    @if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible">
    {{ Session::get('mensaje') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif



    <a href="{{ url('empleado/create') }}" class="btn btn-success">Registrar nuevo empleado</a>
    <br>
    <br>
    <table class="table table-light">


        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Foto</th>
                <th>Acciones</th>
            </tr>
        </thead>


        <tbody>
            @foreach($empleados as $empleado)
            <tr>
                <td>{{ $empleado->id }}</td>
                <td><img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto }}" alt="" width="100"></td>
                <td>{{ $empleado->Nombre }}</td>
                <td>{{ $empleado->Apellido }}</td>
                <td>{{ $empleado->Correo }}</td>
                <td>

                    <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}" class="btn btn-warning">EDITAR</a>


                    <form action="{{ url('/empleado/'.$empleado->id) }}" method="POST" class="d-inline">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>



    </table>
    {{ $empleados->links() }}
</div>
@endsection