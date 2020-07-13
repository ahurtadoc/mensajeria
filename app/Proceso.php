<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proceso extends Model
{
    protected $table = 'procesos';
    protected $primaryKey = 'id';

    protected $guarded = [];
}
