@extends('layout.app')

@section('title','Añadir vehiculo')

@section('content')

    <div class="card ">
        <b class="card-header">Nuevo vehículo</b>
        <div class="card-body p-md-4">
            <form name="guardar"
                  action="{{route('vehiculo.store')}}" method="POST">
                @csrf
                <div class="form-group ">
                    <label for="matricula">
                        Matricula
                    </label>
                    <input type="text" class="form-control" id="matricula" name="matricula" >

                </div>
                <label for="tipo">
                    Seleccione el tipo de Vehiculo
                </label>
                <div class="form-group">
                    <select class="form-control" id="tipo" name="tipo">
                        <option>Moto</option>
                        <option>Carro</option>
                        <option>Camion</option>
                    </select>
                </div>


                <button type="submit" class="btn btn-secondary " >
                    Registrar
                </button>


            </form>
        </div>

    </div>

@endsection
