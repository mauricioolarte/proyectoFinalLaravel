<?php

use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//GET, POST, PUT, DELETE
Route::get('/usuarios', [App\Http\Controllers\UsuariosController::class, 'index'])->name('usuarios.index')->middleware('perfil:1');
Route::get('/usuarios/create', [App\Http\Controllers\UsuariosController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios/store', [App\Http\Controllers\UsuariosController::class, 'store'])->name('usuarios.store');
Route::get('/usuarios/edit/{id}', [App\Http\Controllers\UsuariosController::class, 'edit'])->name('usuarios.edit');
Route::put('/usuarios/update/{id}', [App\Http\Controllers\UsuariosController::class, 'update'])->name('usuarios.update');
Route::delete('/usuarios/delete/{id}', [App\Http\Controllers\UsuariosController::class, 'delete'])->name('usuarios.delete');


//routes documents
Route::get('/encargados', [App\Http\Controllers\EncargadosSgsstController::class, 'index'])->name('encargados.index');
Route::get('/encargados/create', [App\Http\Controllers\EncargadosSgsstController::class, 'create'])->name('encargados.create');
Route::post('/encargados/store', [App\Http\Controllers\EncargadosSgsstController::class, 'store'])->name('encargados.store');
Route::get('/encargados/edit/{id}', [App\Http\Controllers\EncargadosSgsstController::class, 'edit'])->name('encargados.edit');
Route::put('/encargados/update/{id}', [App\Http\Controllers\EncargadosSgsstController::class, 'update'])->name('encargados.update');
Route::delete('/encargados/delete/{id}', [App\Http\Controllers\EncargadosSgsstController::class, 'delete'])->name('encargados.delete');

// routes configuracion empresa
Route::get('/empresas', [App\Http\Controllers\ConfiguracionEmpresasController::class, 'index'])->name('empresas.index');
Route::get('/empresas/info/{id}', [App\Http\Controllers\ConfiguracionEmpresasController::class, 'info'])->name('empresas.info');
Route::get('/empresas/create', [App\Http\Controllers\ConfiguracionEmpresasController::class, 'create'])->name('empresas.create');
Route::post('/empresas/store', [App\Http\Controllers\ConfiguracionEmpresasController::class, 'store'])->name('empresas.store');
Route::get('/empresas/edit/{id}', [App\Http\Controllers\ConfiguracionEmpresasController::class, 'edit'])->name('empresas.edit');
Route::put('/empresas/update/{id}', [App\Http\Controllers\ConfiguracionEmpresasController::class, 'update'])->name('empresas.update');
Route::delete('/empresas/delete/{id}', [App\Http\Controllers\ConfiguracionEmpresasController::class, 'delete'])->name('empresas.delete');


// routes compromisos y responsabilidades del gerente y empleados

Route::get('/compromisosresponsabilidades', [App\Http\Controllers\CompromisosResponsabilidadesController::class, 'index'])->name('compromisos.index');


// riesgos Psicosociales

Route::get('/riesgospsicosociales', [App\Http\Controllers\RiesgosPsicosocialesController::class, 'index'])->name('riesgospsicosociales.index');
Route::get('/riesgospsicosociales/create', [App\Http\Controllers\RiesgosPsicosocialesController::class, 'create'])->name('riesgospsicosociales.create');
Route::post('/riesgospsicosociales/store', [App\Http\Controllers\RiesgosPsicosocialesController::class, 'store'])->name('riesgospsicosociales.store');
Route::get('/riesgospsicosociales/edit/{id}', [App\Http\Controllers\RiesgosPsicosocialesController::class, 'edit'])->name('riesgospsicosociales.edit');
Route::put('/riesgospsicosociales/update/{id}', [App\Http\Controllers\RiesgosPsicosocialesController::class, 'update'])->name('riesgospsicosociales.update');

// plan Emergencia

Route::get('/planemergencia', [App\Http\Controllers\PlanEmergenciaController::class, 'index'])->name('planemergencia.index');
Route::get('/planemergencia/create', [App\Http\Controllers\PlanEmergenciaController::class, 'create'])->name('planEmergencia.create');
Route::post('/planemergencia/store', [App\Http\Controllers\PlanEmergenciaController::class, 'store'])->name('planEmergencia.store');
Route::get('/planemergencia/edit/{id}', [App\Http\Controllers\PlanEmergenciaController::class, 'edit'])->name('planEmergencia.edit');
Route::put('/planemergencia/update/{id}', [App\Http\Controllers\PlanEmergenciaController::class, 'update'])->name('planEmergencia.update');
