@extends('layouts.app')

@section('content')

    <!-- <a href="{{ route('usuarios.create') }}" class="btn btn-success">Crear Usuario</a> -->

    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Cedula</th>
                    <th scope="col">NivelEstudios</th>
                    <th scope="col">Acciones</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($encargados as $encargado)
                    <tr>
                        <td scope="row">{{ $encargado->nombreEncargado }}</td>
                        <td>{{ $encargado->apellidoEncargado }}</td>
                        <td>{{ $encargado->cedula }}</td>
                        <td>{{ $encargado->nivelEstudios}}</td>
                        <td>
                            <a href="{{ route('encargados.edit', $encargado->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('encargados.delete', $encargado->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>


@endsection
