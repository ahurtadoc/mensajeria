@extends('layout.app')

@section('title','Crear orden de entrega')

@section('content')

<div class="card ">
    <b class="card-header">Registro de paquete</b>
    <div class="card-body p-md-4">
        <form name="guardar"
              action="{{route('paquete.store')}}" method="POST">
            @csrf
            <div class="form-group ">
                <label for="dirOrigen">
                    Direccion de origen
                </label>
                <input type="text" class="form-control" id="dirOrigen" name="origen">
            </div>

            <button type="submit" class="btn btn-primary" >
                Solicitud para recoger
            </button>


        </form>
    </div>

</div>

@endsection

