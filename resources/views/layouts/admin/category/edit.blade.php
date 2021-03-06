@extends('layouts.admin')

@section('title','Editar categoría')
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
        <a class="nav-link" href="{{route('categories.create')}}">
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
                Editar Categoría
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                    <li class="breadcrumb-item"><a href="{{route('categories.index')}}">Categorías</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Editar Categoría</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <div class="d-flex justify-content-between">
                            <h4 class="card-title">Editar Categorías</h4>
                        </div>
                        {!! Form::model($category,['route' => ['categories.update',$category],'method'=>'PUT']) !!}

                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Nombre" value="{{$category->name}}" required>
                        </div>


                        <div class="form-group">
                            <label for="description">Descripcion</label>
                            <textarea class="form-control" name="description" id="description" rows="3">{{$category->description}}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Actualizar</button>

                        <a href="{{route('categories.index')}}" class="btn btn-light mr-2">Cancelar</a>
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
@endsection


