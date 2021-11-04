<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\PlanEmergencia;
use App\Models\Roles;


class PlanEmergenciaController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }



    public function index(){
			$documento = PlanEmergencia::get();
			if (count($documento) > 0){
				return view('planEmergencia.index',[
            'documento' => $documento[0],
        ]);
			} else {
				return view('planEmergencia.create');
			}
    }

    public function create(){

        return view('planEmergencia.create');

    }

    public function store(Request $request){


        //use Illuminate\Support\Facades\Hash;

        
        $documento = new PlanEmergencia;

        if ($request->hasFile("nombreDoc")) {
           $file = $request->file("nombreDoc");

           $nombre = "documentoPlanEmergencia".time().".".$file->guessExtension();

           $ruta = public_path("planEmergencia/".$nombre);

           copy($file, $ruta);

           $documento->nombreDoc = $nombre;

        }

        $documento->save();


        return redirect('/planemergencia');

    }

    public function edit($id){
			$documento = PlanEmergencia::where('id',$id)->first();
			// dd($documento);
      return view('planEmergencia.edit', [
				'documento'=>$documento,
			]);
    }

    public function update(Request $request, $id){

				$documento = PlanEmergencia::where('id',$id)->first();
        if ($request->hasFile("nombreDoc")) {
           $file = $request->file("nombreDoc");

           $nombre = "documentoPlanEmergencia".time().".".$file->guessExtension();

           $ruta = public_path("planEmergencia/".$nombre);

           copy($file, $ruta);

           $documento->nombreDoc = $nombre;

        }

        $documento->save();


        return redirect('/planemergencia');
    }

    public function delete($id){

        ConfiguracionEmpresas::where('id',$id)->delete();

        return back();

    }

}
