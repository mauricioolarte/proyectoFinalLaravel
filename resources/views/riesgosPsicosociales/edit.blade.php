@extends('layouts.app')

@section('content')

    <!-- <a href="{{ route('usuarios.create') }}" class="btn btn-success">Crear Usuario</a> -->

    <div class="row">
			<div>
				<h1 class="m-3">
					Riesgos Psicosociales
				</h1>
			</div>
			<form action="{{ route('riesgospsicosociales.update', $documento->id) }}" method="POST" enctype="multipart/form-data">
				@csrf
				@method('put')
				<div class="col-9">
						<label for="nombreDoc" class="form-label">Cargar documento Riesgos Psicosociales</label>
						<input type="file" class="form-control" name="nombreDoc" id="nombreDoc" >
						@if ($errors->has('foto'))
								<p class="text-danger">{{ $errors->first('foto') }}</p>
						@endif
				</div>

				<br><br><br><br>
				<button type="submit" class="btn btn-success">Enviar</button>

			</form>
			
			
			
    </div>


@endsection
