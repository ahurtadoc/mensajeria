@extends('layout.app')


@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                Personal de la empresa
            </div>

            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Cedula</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Ubicacion</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($personal as $persona)
                        <tr>
                            <th scope="row">{{$persona->cedula}}</th>
                            <td>{{$persona->nombre}}</td>
                            <td>{{$persona->estado}}</td>
                            <td>{{$persona->ubicacion}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

        <div class="col">
            <div class="card">
                <div class="card-header">
                    Vehiculos de la empresa
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Matricula</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Ubicacion</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($vehiculos as $vehiculo)
                            <tr>
                                <th scope="row">{{$vehiculo->matricula}}</th>
                                <td>{{$vehiculo->tipo}}</td>
                                <td>{{$vehiculo->estado}}</td>
                                <td>{{$vehiculo->ubicacion}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
</div>

@endsection
