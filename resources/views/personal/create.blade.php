@extends('layout.app')

@section('title','Crear operador')

@section('content')

    <div class="card ">
        <b class="card-header">Nuevo miembro operativo</b>
        <div class="card-body p-md-4">
            <form name="guardar"
                  action="{{route('personal.store')}}" method="POST">
                @csrf
                <div class="form-group ">
                    <label for="nombre">
                        Nombre
                    </label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
                <div class="form-group ">
                    <label for="cedula">
                        Cedula
                    </label>
                    <input type="text" class="form-control" id="cedula"
                           name="cedula" aria-describedby="unique">
                    <small id="unique" class="form-text text-muted">
                        La cedula será su identificador
                    </small>
                </div>


                <button type="submit" class="btn btn-secondary" >
                    Registrar
                </button>


            </form>
        </div>

    </div>

@endsection
