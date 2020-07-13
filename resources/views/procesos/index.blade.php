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
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($personal as $persona)
                    <tr>
                        <th scope="row">{{$persona->nombre}}</th>
                        <td>{{$persona->cedula}}</td>
                        <td>
                            <a class="btn btn-secondary" href="{{route('proceso.index')}}">
                                Recoger
                            </a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>

    </div>



@endsection
