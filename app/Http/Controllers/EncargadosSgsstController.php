<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Roles;
use App\Models\EncargadosSgsst;


class EncargadosSgsstController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }



    public function index(){

        $encargados = EncargadosSgsst::get();


        return view('encargadosSgsst.index',[
            'encargados' => $encargados,
        ]);

    }

    public function create(){


        return view('encargadosSgsst.crear');

    }

    public function store(Request $request){


        $request->validate([
            'nombreEncargado' => 'required',
            'apellidoEncargado' => 'required',
            'cedula' => 'required',
            'nivelEstudios' => 'required',
        	],[
            'nombreEncargado.required' => 'El nombre del usuario es requerido',
            'apellidoEncargado.required' => 'El apellido es requerido',
            'cedula.required' => 'La cedula es requerida',
            'nivelEstudios.required' => 'El nivel es requerido',
        	]
    		);

        $encargado = new EncargadosSgsst;
        $encargado->nombreEncargado = $request->nombreEncargado;
        $encargado->apellidoEncargado = $request->apellidoEncargado;
        $encargado->cedula = $request->cedula;
        $encargado->nivelEstudios = $request->nivelEstudios;
        

        if ($request->hasFile("hojaVida")) {
           $file = $request->file("hojaVida");

           $nombre = "hojaVida_".time().".".$file->guessExtension();

           $ruta = public_path("hojasVida/".$nombre);

           copy($file, $ruta);

           $encargado->hojaVida = $nombre;

        }

				if ($request->hasFile("diploma")) {
           $file = $request->file("diploma");

           $nombre = "diploma_".time().".".$file->guessExtension();

           $ruta = public_path("diplomas/".$nombre);

           copy($file, $ruta);

           $encargado->diploma = $nombre;

        }
				if ($request->hasFile("certificadoCurso50h")) {
           $file = $request->file("certificadoCurso50h");

           $nombre = "certificadoCurso50h_".time().".".$file->guessExtension();

           $ruta = public_path("certificadosCurso50h/".$nombre);

           copy($file, $ruta);

           $encargado->certificadoCurso50h = $nombre;

        }
				if ($request->hasFile("certificadoSeccionalSalud")) {
           $file = $request->file("certificadoSeccionalSalud");

           $nombre = "certificadoSeccionalSalud_".time().".".$file->guessExtension();

           $ruta = public_path("certificadoSeccionalSalud/".$nombre);

           copy($file, $ruta);

           $encargado->certificadoSeccionalSalud = $nombre;

        }
        $encargado->save();


        return back();

        // return redirect('/usuarios');

    }

    public function edit($id){

        $roles = Roles::get();

        $encargado = EncargadosSgsst::where('id',$id)->first();

        return view('encargadosSgsst.edit',[
            'encargado' => $encargado,
        ]);

    }

    public function update(Request $request, $id){


        $request->validate([
            'nombreEncargado' => 'required',
            'apellidoEncargado' => 'required',
            'cedula' => 'required',
            'nivelEstudios' => 'required',
        	],[
            'nombreEncargado.required' => 'El nombre del usuario es requerido',
            'apellidoEncargado.required' => 'El apellido es requerido',
            'cedula.required' => 'La cedula es requerida',
            'nivelEstudios.required' => 'El nivel es requerido',
        	]
    		);

				// $encargado = new EncargadosSgsst;

        $encargado = EncargadosSgsst::where('id',$id)->first();

        $encargado->nombreEncargado = $request->nombreEncargado;
        $encargado->apellidoEncargado = $request->apellidoEncargado;
        $encargado->cedula = $request->cedula;
        $encargado->nivelEstudios = $request->nivelEstudios;
        

        if ($request->hasFile("hojaVida")) {
           $file = $request->file("hojaVida");

           $nombre = "hojaVida_".time().".".$file->guessExtension();

           $ruta = public_path("hojasVida/".$nombre);

           copy($file, $ruta);

           $encargado->hojaVida = $nombre;

        } else {
					$encargado->hojaVida = $encargado->hojaVida;
				}

				if ($request->hasFile("diploma")) {
           $file = $request->file("diploma");

           $nombre = "diploma_".time().".".$file->guessExtension();

           $ruta = public_path("diplomas/".$nombre);

           copy($file, $ruta);

           $encargado->diploma = $nombre;

        } else {
					$encargado->diploma = $encargado->diploma;
				}
				if ($request->hasFile("certificadoCurso50h")) {
           $file = $request->file("certificadoCurso50h");

           $nombre = "certificadoCurso50h_".time().".".$file->guessExtension();

           $ruta = public_path("certificadosCurso50h/".$nombre);

           copy($file, $ruta);

           $encargado->certificadoCurso50h = $nombre;

        } else {
					$encargado->certificadoCurso50h = $encargado->certificadoCurso50h;
				}

				if ($request->hasFile("certificadoSeccionalSalud")) {
           $file = $request->file("certificadoSeccionalSalud");

           $nombre = "certificadoSeccionalSalud_".time().".".$file->guessExtension();

           $ruta = public_path("certificadoSeccionalSalud/".$nombre);

           copy($file, $ruta);

           $encargado->certificadoSeccionalSalud = $nombre;

        } else {
					$encargado->certificadoSeccionalSalud = $encargado->certificadoSeccionalSalud;
				}
        $encargado->save();

        return back();


    }

    public function delete($id){

        User::where('id',$id)->delete();

        return back();

    }

}
