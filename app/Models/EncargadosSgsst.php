<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EncargadosSgsst extends Model
{
    use HasFactory;

    protected $table = "encargados_sgsst";

    protected $fillable = [
       'id','nombreEncargado','apellidoEncargado','cedula', 'nivelEstudios',
			 'hojaVida', 'diploma', 'certificadoCurso50h', 'certificadoSeccionalSalud'
    ];
}
