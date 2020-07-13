@extends('layout.app')

@section('title', 'Vehiculos')


@section('content')
    <div class="row">
        <div class="col-md-9">
            <h2>Vehiculos disponibles</h2>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Tipo</th>
                    <th scope="col">Matricula</th>

                </tr>
                </thead>
                <tbody>
                @foreach($vehiculos as $vehiculo)
                    <tr>
                        <th scope="row">{{$vehiculo->tipo}}</th>
                        <td>{{$vehiculo->matricula}}</td>


                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
        <div class="col-md ">
            <a href={{route('vehiculo.create')}}>
                <input type="button" class="btn btn-outline-primary"
                       value="Agregar Vehiculo">
            </a>
        </div>
    </div>



@endsection
