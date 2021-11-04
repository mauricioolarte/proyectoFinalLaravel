@extends('layouts.app')

@section('content')

    <!-- <a href="{{ route('usuarios.create') }}" class="btn btn-success">Crear Usuario</a> -->

    <div class="row">
			<div>
				<h1 class="m-3">
					Riesgos Psicosociales
				</h1>
			</div>
			<form action="{{ route('riesgospsicosociales.store') }}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="col-9">
						<label for="nombreDoc" class="form-label">Cargar documento Riesgos Psicosociales</label>
						<input type="file" class="form-control" name="nombreDoc" id="nombreDoc" >
						@if ($errors->has('nombreDoc'))
								<p class="text-danger">{{ $errors->first('nombreDoc') }}</p>
						@endif
				</div>

				<br><br><br><br>
				<button type="submit" class="btn btn-success">Enviar</button>

			</form>
			
			
			
    </div>


@endsection
