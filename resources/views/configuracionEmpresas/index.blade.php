@extends('layouts.app')

@section('content')

    <a href="{{ route('empresas.create') }}" class="btn btn-success">Crear empresa</a>

    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">NIT</th>
                    <th scope="col">Nombre</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empresas as $empresa)
                    <tr>

                        <th scope="row">{{ $empresa->nit }}</th>
                        <td>{{ $empresa->nombre }}</td>
                        <td>
                            <a href="{{ route('empresas.info', $empresa->id) }}" class="btn btn-warning">Ver</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>


@endsection
