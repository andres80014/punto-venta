@extends('layouts.admin')

@section('title','Editar Productos')
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
        <a class="nav-link" href="{{route('products.create')}}">
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
                Edicion Productos
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                    <li class="breadcrumb-item"><a href="{{route('products.index')}}">Productos</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Registro Productos</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <div class="d-flex justify-content-between">
                            <h4 class="card-title">Edicion Productos</h4>
                        </div>
                        
                        {!! Form::model($product,['route' => ['products.update',$product],'method'=>'PUT','files' => true]) !!}
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{$product->name}}" placeholder="Nombre" required>
                        </div>

                        <div class="form-group">
                            <label for="sell_price">Precio de Venta</label>
                            <input type="number" name="sell_price" id="sell_price" class="form-control" value="{{$product->sell_price}}" placeholder="Precio" required>
                        </div>

                        <div class="form-group">
                            <label for="category_id">Categoria</label>
                            <select class="form-control" id="category_id" name="category_id">
                                <option selected>Seleccione</option>
                                @foreach($categories as $category)
                                    @if($category->id === $product->category_id)
                                        <option value="{{$category->id}}" selected>{{$category->name}}</option>
                                    @else
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                     @endif


                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="category_id">Proveedor</label>
                            <select class="form-control" id="provider_id"  name="provider_id">
                                <option selected>Seleccione</option>
                                @foreach($providers as $provider)
                                    @if($category->id === $product->category_id)
                                        <option value="{{$provider->id}}" selected>{{$provider->name}}</option>
                                    @else
                                        <option value="{{$provider->id}}">{{$provider->name}}</option>
                                    @endif

                                @endforeach
                            </select>
                        </div>



                        <div class="card-body">
                            <h4 class="card-title d-flex">Imagen de producto
                                <small class="ml-auto align-self-end">
                                    <a href="dropify.html" class="font-weight-light" target="_blank">Seleccionar Archivo</a>
                                </small>
                            </h4>
                            <input type="file" class="dropify"  name="image" id="image"/>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Registrar</button>

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

