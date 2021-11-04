<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\RiesgosPsicosociales;
use App\Models\Roles;


class RiesgosPsicosocialesController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }



    public function index(){
			$documento = RiesgosPsicosociales::get();
			if (count($documento) > 0){
				return view('riesgosPsicosociales.index',[
            'documento' => $documento[0],
        ]);
			} else {
				return view('riesgosPsicosociales.create');
			}
    }

    public function create(){

        return view('riesgosPsicosociales.create');

    }

    public function store(Request $request){


        //use Illuminate\Support\Facades\Hash;

        
        $documento = new RiesgosPsicosociales;

        if ($request->hasFile("nombreDoc")) {
           $file = $request->file("nombreDoc");

           $nombre = "documentoRiegoPsicosociales".time().".".$file->guessExtension();

           $ruta = public_path("riesgosPsicosociales/".$nombre);

           copy($file, $ruta);

           $documento->nombreDoc = $nombre;

        }

        $documento->save();


        return redirect('/riesgospsicosociales');

    }

    public function edit($id){
			$documento = RiesgosPsicosociales::where('id',$id)->first();
			// dd($documento);
      return view('riesgosPsicosociales.edit', [
				'documento'=>$documento,
			]);
    }

    public function update(Request $request, $id){

				$documento = RiesgosPsicosociales::where('id',$id)->first();
        if ($request->hasFile("nombreDoc")) {
           $file = $request->file("nombreDoc");

           $nombre = "documentoRiegoPsicosociales".time().".".$file->guessExtension();

           $ruta = public_path("riesgosPsicosociales/".$nombre);

           copy($file, $ruta);

           $documento->nombreDoc = $nombre;

        }

        $documento->save();


        return redirect('/riesgospsicosociales');
    }

    public function delete($id){

        ConfiguracionEmpresas::where('id',$id)->delete();

        return back();

    }

}
