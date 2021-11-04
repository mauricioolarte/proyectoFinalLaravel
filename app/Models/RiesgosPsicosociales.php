<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiesgosPsicosociales extends Model
{
    use HasFactory;

    protected $table = "riesgos_psicosociales";

    protected $fillable = [
       'id','nombreDoc'];
}
