<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $table = 'personals';
    protected $primaryKey = 'cedula';

    protected $keyType = 'string';
    protected $guarded = [];


}
