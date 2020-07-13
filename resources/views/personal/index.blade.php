@extends('layout.app')

@section('title', 'Personal Disponible')


@section('content')
    <div class="row">
            <div class="col-md-9">
                <h2>Personal Disponible</h2>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Cedula</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($personal as $persona)
                        <tr>
                            <th scope="row">{{$persona->nombre}}</th>
                            <td>{{$persona->cedula}}</td>


                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>



        <div class="col-md ">
            <a href={{route('personal.create')}}>
                <input type="button" class="btn btn-outline-primary"
                       value="Agregar miembro">
            </a>
        </div>
    </div>



@endsection
