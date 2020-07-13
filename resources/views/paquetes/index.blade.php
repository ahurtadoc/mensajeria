@extends('layout.app')

@section('title', 'Paquetes pendientes')


@section('content')
    <div class="row">
        <div class="col-md-9">
            <h2>Paquetes en espera</h2>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Codigo Paquete</th>
                    <th scope="col">Direccion Origen</th>

                </tr>
                </thead>
                    <tbody>
                    @foreach($paquetes as $paquete)
                    <tr>
                        <th scope="row">{{$paquete->id}}</th>
                        <td>{{$paquete->origen}}</td>


                    </tr>
                    @endforeach
                    </tbody>
                </table>

        </div>
        <div class="col-md-1 ">
            <div class="input-group">
                <a href={{route('paquete.create')}}>
                    <input type="button" class="btn btn-outline-primary"
                    value="Generar orden de recogida de paquete">
                </a>

                <a href="{{route('proceso.create')}}" >
                    <input type="button" class="btn btn-outline-secondary"
                           value="Recoger paquete">
                </a>

            </div>


        </div>

    </div>



@endsection
