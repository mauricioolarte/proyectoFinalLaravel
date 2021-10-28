@extends('layouts.app')

@section('content')

    <form action="{{ route('encargados.update', $encargado->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
				@method('put')
        <div class="row">

            <div class="col-4">
                <label for="nombre" class="form-label">Nombre del encargado del SG-SST</label>
                <input type="text" class="form-control" name="nombreEncargado" id="nombreEncargado"
                    value={{$encargado->nombreEncargado}}>
                @if ($errors->has('nombreEncargado'))
                    <p class="text-danger">{{ $errors->first('nombreEncargado') }}</p>
                @endif
            </div>
            <div class="col-4">
                <label for="apellido" class="form-label">Apellido del encargado del SG-SST</label>
                <input type="text" class="form-control" name="apellidoEncargado" id="apellidoEncargado"
                    value={{$encargado->apellidoEncargado}}>
                @if ($errors->has('apellidoEncargado'))
                    <p class="text-danger">{{ $errors->first('apellidoEncargado') }}</p>
                @endif
            </div>
            <div class="col-4">
                <label for="cedula" class="form-label">Cedula del encargado del SG-SST</label>
                <input type="text" class="form-control" name="cedula" id="cedula"
                    value={{$encargado->cedula}}>
                @if ($errors->has('cedula'))
                    <p class="text-danger">{{ $errors->first('cedula') }}</p>
                @endif
            </div>
            <div class="col-4">
                <label for="nivelEstudios" class="form-label">Nivel de estudios</label>
                <input type="text" class="form-control" name="nivelEstudios" id="nivelEstudios"
                    value={{$encargado->nivelEstudios}}>
                @if ($errors->has('nivelEstudios'))
                    <p class="text-danger">{{ $errors->first('nivelEstudios') }}</p>
                @endif
            </div>

            <div class="col-3">
                <label for="hojaVida" class="form-label">hoja de Vida</label>
                <input type="file" class="form-control" name="hojaVida" id="hojaVida" >
                <input type="hidden" class="form-control" name="hojaVida" id="hojaVida" value={{$encargado->hojaVida}} >

                @if ($errors->has('hojaVida'))
                    <p class="text-danger">{{ $errors->first('hojaVida') }}</p>
                @endif
            </div>
						<div class="col-3">
                <label for="diploma" class="form-label">diploma</label>
                <input type="file" class="form-control" name="diploma" id="diploma" >
                @if ($errors->has('diploma'))
                    <p class="text-danger">{{ $errors->first('diploma') }}</p>
                @endif
            </div>
						 <div class="col-3">
                <label for="certificadoCurso50h" class="form-label">certificadoCurso50h</label>
                <input type="file" class="form-control" name="certificadoCurso50h" id="certificadoCurso50h" >
                @if ($errors->has('certificadoCurso50h'))
                    <p class="text-danger">{{ $errors->first('certificadoCurso50h') }}</p>
                @endif
            </div>
						<div class="col-3">
                <label for="certificadoSeccionalSalud" class="form-label">certificadoSeccionalSalud</label>
                <input type="file" class="form-control" name="certificadoSeccionalSalud" id="certificadoSeccionalSalud" >
                @if ($errors->has('certificadoSeccionalSalud'))
                    <p class="text-danger">{{ $errors->first('certificadoSeccionalSalud') }}</p>
                @endif
            </div>

            <br><br><br><br>
            <button type="submit" class="btn btn-success">Enviar</button>

        </div>



    </form>

@endsection
