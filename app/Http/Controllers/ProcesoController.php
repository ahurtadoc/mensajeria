<?php

namespace App\Http\Controllers;

use App\Paquete;
use App\Personal;
use App\Proceso;
use App\Vehiculo;
use Illuminate\Http\Request;

class ProcesoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paquetes = Paquete::where('estado','esperando')->get();
        $vehiculos = Vehiculo::where('estado','disponible')->get();
        return view('procesos.create',compact('paquetes','vehiculos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehiculo = Vehiculo::where('tipo',$request->tipo)->first();
        $proceso = new Proceso;
        $proceso->persona_cc = $request->persona_cc;
        $proceso->paquete_id = $request->paquete_id;
        $proceso->vehiculo_mat = $vehiculo->matricula;
        $proceso->estado = 'recogiendo paquete';

        if($proceso->save()){
            Personal::where('cedula',$request->persona_cc)
                ->update([
                    'estado'=>'transitando hacia el paquete',
                    'ubicacion' => 'en carretera'
                    ]);
            $vehiculo->estado = 'ocupado';
            $vehiculo->ubicacion = 'carretera';
            $vehiculo->save();

            return redirect()->route('personal.index');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proceso = Proceso::where('persona_cc', $id)->get();

        return view('procesos.index',compact('proceso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
