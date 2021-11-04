@extends('layouts.app')

@section('content')

    <form action="{{ route('empresas.update',$configuracionEmpresa->id) }}" method="POST">
        @csrf
				@method('put')
        <div class="row">

            <div class="col-4">
                <label for="nombre" class="form-label">Nombre de la empresa</label>
                <input type="text" class="form-control" name="nombre" id="nombre"
                    value="{{$configuracionEmpresa->nombre}}">
                @if ($errors->has('nombre'))
                    <p class="text-danger">{{ $errors->first('nombre') }}</p>
                @endif
            </div>
            <div class="col-4">
                <label for="nit" class="form-label">NIT</label>
                <input type="text" class="form-control" name="nit" id="nit"
                    value="{{$configuracionEmpresa->nit}}">
                @if ($errors->has('nit'))
                    <p class="text-danger">{{ $errors->first('nit') }}</p>
                @endif
            </div>
            <div class="col-4">
                <label for="georre_longitude" class="form-label">Coordenada longitud</label>
                <input type="text" class="form-control" name="georre_longitude" id="georre_longitude"
                    value='{{$configuracionEmpresa->georre_longitude}}'>
                @if ($errors->has('georre_longitude'))
                    <p class="text-danger">{{ $errors->first('georre_longitude') }}</p>
                @endif
            </div>
            <div class="col-4">
                <label for="georre_latitude" class="form-label">Coordenada latitud|</label>
                <input type="text" class="form-control" name="georre_latitude" id="georre_latitude"
                    value="{{$configuracionEmpresa->georre_latitude}}">
                @if ($errors->has('georre_latitude'))
                    <p class="text-danger">{{ $errors->first('georre_latitude') }}</p>
                @endif
            </div>

            <div class="col-4">
                <label for="actividadEconomica" class="form-label">Actividad economica de la empresa</label>
                <input type="text" class="form-control" name="actividadEconomica" id="actividadEconomica"
                    value="{{$configuracionEmpresa->actividadEconomica}}">
                @if ($errors->has('actividadEconomica'))
                    <p class="text-danger">{{ $errors->first('actividadEconomica') }}</p>
                @endif
            </div>

            <div class="col-4">
                <label for="nivelRiesgo" class="form-label">Nivel de riesgo de la empresa</label>
                <input type="text" class="form-control" name="nivelRiesgo" id="nivelRiesgo"
                    value="{{$configuracionEmpresa->nivelRiesgo}}">
                @if ($errors->has('nivelRiesgo'))
                    <p class="text-danger">{{ $errors->first('nivelRiesgo') }}</p>
                @endif
            </div>

            <div class="col-3">
                <label for="cantidadEmpleado" class="form-label">cantidad de Empleados</label>
                <input type="text" class="form-control" name="cantidadEmpleado" id="cantidadEmpleado"
                    value="{{$configuracionEmpresa->cantidadEmpleado}}">
                @if ($errors->has('cantidadEmpleado'))
                    <p class="text-danger">{{ $errors->first('cantidadEmpleado') }}</p>
                @endif
            </div>
						<div class="col-3">
                <label for="naturalezaJuridica" class="form-label">naturalezaJuridica</label>
                <input type="text" class="form-control" name="naturalezaJuridica" id="naturalezaJuridica"
                    value="{{$configuracionEmpresa->naturalezaJuridica}}">
                @if ($errors->has('naturalezaJuridica'))
                    <p class="text-danger">{{ $errors->first('naturalezaJuridica') }}</p>
                @endif
						</div>
						<div class="col-3">
                <label for="telefonos" class="form-label">Telefonos</label>
                <input type="text" class="form-control" name="telefonos" id="telefonos"
                    value="{{$configuracionEmpresa->telefonos}}">
                @if ($errors->has('telefonos'))
                    <p class="text-danger">{{ $errors->first('telefonos') }}</p>
                @endif
            </div>
						<div class="col-3">
                <label for="email" class="form-label">email</label>
                <input type="text" class="form-control" name="email" id="email"
                   value="{{$configuracionEmpresa->email}}">
                @if ($errors->has('email'))
                    <p class="text-danger">{{ $errors->first('email') }}</p>
                @endif
            </div>
						<div class="col-3">
                <label for="tipoEmpresa" class="form-label">tipoEmpresa</label>
                <input type="text" class="form-control" name="tipoEmpresa" id="tipoEmpresa"
                    value='{{$configuracionEmpresa->tipoEmpresa}}'>
                @if ($errors->has('tipoEmpresa'))
                    <p class="text-danger">{{ $errors->first('tipoEmpresa') }}</p>
                @endif
            </div>


            <br><br><br><br>
            <button type="submit" class="btn btn-success">Enviar</button>

        </div>



    </form>



@endsection
