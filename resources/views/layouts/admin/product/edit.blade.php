@extends('layouts.admin')

@section('title','Editar proveedor')
@section('styles')
    <style type="text/css">
        .unstyled-button {
            border: none;
            padding: 0;
            background: none;
        }
    </style>

@endsection

@section('create')
    <li class="nav-item d-none d-lg-flex">
        <a class="nav-link" href="{{route('providers.create')}}">
            <span class="btn btn-primary">Crear Nuevo</span>
        </a>
    </li>
@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Editar Proveedor
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                    <li class="breadcrumb-item"><a href="{{route('providers.index')}}">Proveedores</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Editar Proveedor</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <div class="d-flex justify-content-between">
                            <h4 class="card-title">Editar Proveedor</h4>
                        </div>
                        {!! Form::model($provider,['route' => ['providers.update',$provider],'method'=>'PUT']) !!}
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Nombre"
                                   value="{{$provider->name}}" required>
                        </div>


                        <div class="form-group">
                            <label for="description">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="ejemplo@gmail.com"
                                   value="{{ $provider->email }}" required>
                        </div>

                        <div class="form-group">
                            <label for="name">RUC</label>
                            <input type="number" name="ruc_number" id="ruc_number" class="form-control" placeholder="RUC"
                                   value = "{{ $provider->ruc_number }}" required>
                        </div>

                        <div class="form-group">
                            <label for="name">Direccion</label>
                            <input type="text" name="address" id="address" class="form-control" placeholder="Direccion"
                                   value = "{{ $provider->address }}" required>
                        </div>

                        <div class="form-group">
                            <label for="name">Telefono</label>
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Telefono"
                                   value = "{{ $provider->phone }}" required>
                        </div>



                        <button type="submit" class="btn btn-primary mr-2">Actualizar</button>

                        <a href="{{route('providers.index')}}" class="btn btn-light mr-2">Cancelar</a>
                        {!! Form::close() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    {!! Html::script('melody/js/data-table.js') !!}
@endsection


