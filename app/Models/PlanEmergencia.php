<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanEmergencia extends Model
{
    use HasFactory;

    protected $table = "plan_emergencia";

    protected $fillable = [
       'id','nombreDoc'];
}
