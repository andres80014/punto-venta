@extends('layouts.admin')

@section('title','Registrar categorías')
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
                Registro Categorías
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                    <li class="breadcrumb-item"><a href="{{route('categories.index')}}">Categorías</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Registro Categorías</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <div class="d-flex justify-content-between">
                            <h4 class="card-title">Registro Categorías</h4>
                        </div>
                        {!! Form::open(['route' => 'categories.store','method'=>'POST']) !!}
                        @include('layouts.admin.category._form')
                        <button type="submit" class="btn btn-primary mr-2">Registrar</button>

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

