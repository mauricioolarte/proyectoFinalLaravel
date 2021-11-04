<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\ConfiguracionEmpresas;
use App\Models\Roles;


class CompromisosResponsabilidadesController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }



    public function index(){

        return view('compromisos.index');

    }

		public function info($id){
			$empresa = ConfiguracionEmpresas::where('id',$id)->first();

			return view('configuracionEmpresas.info', [
				'empresa' => $empresa
			]);
		}

    public function create(){

        return view('configuracionEmpresas.crear');

    }

    public function store(Request $request){


        //use Illuminate\Support\Facades\Hash;

        $request->validate([
            'nombre' => 'required',
            'nit' => 'required',
            'georre_longitude' => 'required',
            'georre_latitude' => 'required',
            'actividadEconomica' => 'required',
            'nivelRiesgo' => 'required',
            'cantidadEmpleado' => 'required',
            'email' => 'required|email',
            'naturalezaJuridica' => 'required',
            'tipoEmpresa' => 'required',
        ],[
            'nombre.required' => 'El nombre del usuario es requerido',
            'nit.required' => 'El nit es requerido',
            'georre_longitude.required' => 'La georre_longitude es requerida',
            'georre_latitude.required' => 'El télefono es requerido',
            'actividadEconomica.required' => 'El actividadEconomica es requerido',
            'nivelRiesgo.required' => 'La dirección es requerida',
            'cantidadEmpleado.required' => 'El rol es requerido',
            'email.required' => 'El email es requerido',
            'email.email' => 'El email es no tiene el formato correcto',
            'naturalezaJuridica.required' => 'naturaleza Juridica requerida',
						'tipoEmpresa.required'=> 'El tipo de empresa es requerido'
        ]

    );

        $ConfiguracionEmpresa = new ConfiguracionEmpresas;
        $ConfiguracionEmpresa->nombre = $request->nombre;
        $ConfiguracionEmpresa->nit = $request->nit;
        $ConfiguracionEmpresa->georre_longitude = $request->georre_longitude;
        $ConfiguracionEmpresa->georre_latitude = $request->georre_latitude;
        $ConfiguracionEmpresa->actividadEconomica = $request->actividadEconomica;
        $ConfiguracionEmpresa->nivelRiesgo = $request->nivelRiesgo;
        $ConfiguracionEmpresa->cantidadEmpleado = $request->cantidadEmpleado;
        $ConfiguracionEmpresa->naturalezaJuridica = $request->naturalezaJuridica;
        $ConfiguracionEmpresa->telefonos = $request->telefonos;
        $ConfiguracionEmpresa->email = $request->email;
        $ConfiguracionEmpresa->tipoEmpresa = $request->tipoEmpresa;



        $ConfiguracionEmpresa->save();


        return back();

        // return redirect('/usuarios');

    }

    public function edit($id){

        $roles = Roles::get();

        $configuracionEmpresa = ConfiguracionEmpresas::where('id',$id)->first();

        return view('configuracionEmpresas.edit',[
            'roles' => $roles,
            'configuracionEmpresa' => $configuracionEmpresa,
        ]);

    }

    public function update(Request $request, $id){


        $request->validate([
            'nombre' => 'required',
            'nit' => 'required',
            'georre_longitude' => 'required',
            'georre_latitude' => 'required',
            'actividadEconomica' => 'required',
            'nivelRiesgo' => 'required',
            'cantidadEmpleado' => 'required',
            'email' => 'required|email',
            'naturalezaJuridica' => 'required',
            'tipoEmpresa' => 'required',
        ],[
            'nombre.required' => 'El nombre del usuario es requerido',
            'nit.required' => 'El nit es requerido',
            'georre_longitude.required' => 'La georre_longitude es requerida',
            'georre_latitude.required' => 'El télefono es requerido',
            'actividadEconomica.required' => 'El actividadEconomica es requerido',
            'nivelRiesgo.required' => 'La dirección es requerida',
            'cantidadEmpleado.required' => 'El rol es requerido',
            'email.required' => 'El email es requerido',
            'email.email' => 'El email es no tiene el formato correcto',
            'naturalezaJuridica.required' => 'naturaleza Juridica requerida',
						'tipoEmpresa.required'=> 'El tipo de empresa es requerido'
        ]

    );


        $configuracionEmpresa = ConfiguracionEmpresas::where('id',$id)->update([
            'nombre' => $request->nombre,
            'nit' => $request->nit,
            'georre_longitude' => $request->georre_longitude,
            'georre_latitude' => $request->georre_latitude,
            'actividadEconomica' => $request->actividadEconomica,
            'nivelRiesgo' => $request->nivelRiesgo,
            'cantidadEmpleado' => $request->cantidadEmpleado,
						'naturalezaJuridica'=> $request->naturalezaJuridica,
			 			'telefonos'=> $request->telefonos,
						'email'=> $request->email,
						'tipoEmpresa'=> $request->tipoEmpresa

        ]);

        // return back();
        return redirect('/empresas/info/'.$id);



    }

    public function delete($id){

        ConfiguracionEmpresas::where('id',$id)->delete();

        return back();

    }

}
