<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'vehiculos';
    protected $primaryKey = 'matricula';
    protected $keyType = 'string';


    protected $guarded = [];
}
