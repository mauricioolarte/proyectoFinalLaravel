@extends('layouts.app')

@section('content')

    <!-- <a href="{{ route('usuarios.create') }}" class="btn btn-success">Crear Usuario</a> -->

		<div class="row">
			<div>
				<h1 class="m-3">
					Compromisos y responsabilidades de la gerencia
				</h1>
			</div>
			<iframe width="400" height="400" src="{{asset('riesgosPsicosociales/'.$documento->nombreDoc)}}" frameborder="0"></iframe>
    </div>

		<div class="row">
			<a href="{{ route('riesgospsicosociales.edit', $documento->id) }}" class="btn btn-success">Cambiar Archivo</a>
		</div>


@endsection
