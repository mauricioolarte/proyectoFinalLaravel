@extends('layouts.app')

@section('content')

    <!-- <a href="{{ route('usuarios.create') }}" class="btn btn-success">Crear empresa</a> -->

    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Campo</th>
                    <th scope="col">Valor</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <th scope="row">NIT</th>
                        <td>{{ $empresa->nit }}</td>
                    </tr>
										<tr>
                        <th scope="row">Nombre</th>
                        <td>{{ $empresa->nombre }}</td>
                    </tr>
										<tr>
                        <th scope="row">Actividad Económica</th>
                        <td>{{ $empresa->actividadEconomica }}</td>
                    </tr>
										<tr>
                        <th scope="row">Nivel de riesgo</th>
                        <td>{{ $empresa->nivelRiesgo }}</td>
                    </tr>
										<tr>
                        <th scope="row">Cantidad de trabajadores</th>
                        <td>{{ $empresa->cantidadEmpleado }}</td>
                    </tr>
										<tr>
                        <th scope="row">Naturaleza jurídica de la empresa</th>
                        <td>{{ $empresa->naturalezaJuridica }}</td>
                    </tr>
										<tr>
                        <th scope="row">Teléfonos de contacto</th>
                        <td>{{ $empresa->telefonos }}</td>
                    </tr>
										<tr>
                        <th scope="row">Correo electrónico</th>
                        <td>{{ $empresa->email }}</td>
                    </tr>
										<tr>
                        <th scope="row">Tipo de empresa</th>
                        <td>{{ $empresa->tipoEmpresa }}</td>
                    </tr>
										<tr>

                        <td>
													  <a href="{{ route('empresas.info', $empresa->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('empresas.info', $empresa->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
												</td>
                    </tr>
            </tbody>
        </table>

    </div>


@endsection
