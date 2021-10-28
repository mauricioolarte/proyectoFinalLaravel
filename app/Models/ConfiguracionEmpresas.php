<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfiguracionEmpresas extends Model
{
    use HasFactory;

    protected $table = "configuracion_empresas";

    protected $fillable = [
       'id','nombre','nit','georre_longitude', 'georre_latitude',
			 'actividadEconomica', 'nivelRiesgo', 'cantidadEmpleado', 'naturalezaJuridica',
			 'telefonos', 'email', 'tipoEmpresa'
    ];
}
