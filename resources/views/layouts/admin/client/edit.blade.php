@extends('layouts.admin')

@section('title','Editar Clientes')
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
        <a class="nav-link" href="{{route('clients.create')}}">
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
                Edicion Clientes
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                    <li class="breadcrumb-item"><a href="{{route('clients.index')}}">Clientes</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Registro Clientes</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <div class="d-flex justify-content-between">
                            <h4 class="card-title">Edicion Clientes</h4>
                        </div>

                        {!! Form::model($client,['route' => ['clients.update',$client],'method'=>'PUT','files' => true]) !!}
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{$client->name}}" placeholder="Nombre" required>
                        </div>

                        <div class="form-group">
                            <label for="dni">DNI</label>
                            <input type="text" name="dni" id="sell_price" class="form-control" placeholder="DNI" value="{{$client->dni}}" required>
                        </div>

                        <div class="form-group">
                            <label for="ruc">RUC</label>
                            <input type="text" name="ruc" id="ruc" class="form-control" placeholder="RUC" value="{{$client->ruc}}" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Telefono</label>
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Telefono" value="{{$client->phone}}" required>
                        </div>

                        <div class="form-group">
                            <label for="address">Direccion</label>
                            <input type="text" name="address" id="address" class="form-control" placeholder="Direccion" value="{{$client->address}}" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Correo" value="{{$client->email}}" required>
                        </div>


                        <button type="submit" class="btn btn-primary mr-2">Editar</button>

                        <a href="{{route('products.index')}}" class="btn btn-light mr-2">Cancelar</a>
                        {!! Form::close() !!}
                    </div>
                    {{--  <div class="card-footer text-muted">
                        {{$categories->render()}}
                    </div>  --}}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    {!! Html::script('melody/js/data-table.js') !!}
    {!! Html::script('melody/js/dropify.js') !!}
@endsection

