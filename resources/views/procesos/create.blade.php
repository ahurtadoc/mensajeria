@extends('layout.app')

@section('title','Crear proceso')

@section('content')

    <div class="card ">
        <b class="card-header">Generando proceso </b>
        <div class="card-body p-md-4">
            <form name="guardar"
                  action="{{route('proceso.store')}}" method="POST">
                @csrf
                <div class="form-group ">
                    <label for="cedula">
                        Escriba su cedula
                    </label>
                    <input type="text" class="form-control" id="cedula"
                           name="persona_cc" >

                </div>
                <div class="form-group">
                    <label for="paquetes">Seleccione el codigo del paquete</label>
                    <select multiple class="form-control" id="paquetes" name="paquete_id" >
                        @foreach($paquetes as $paquete)
                            <option>{{$paquete->id}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tipos">Seleccione cualquier tipo de carro disponible</label>
                    <select multiple class="form-control" id="tipos" name="tipo" >
                        @foreach($vehiculos as $vehiculo)
                            <option>{{$vehiculo->tipo}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-secondary " >
                    Crear Proceso
                </button>


            </form>
        </div>

    </div>

@endsection
