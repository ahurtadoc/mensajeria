<?php

namespace App\Http\Controllers;

use App\Personal;
use App\Vehiculo;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $personal = Personal::all();
        $vehiculos = Vehiculo::all();

        return view('welcome',compact('personal','vehiculos'));
    }

}
