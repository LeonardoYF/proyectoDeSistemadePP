@php
$configData = Helper::appClasses();
$customizerHidden = 'customizer-hide';
@endphp

@extends('layouts/blankLayout')

@section('title', 'Register Page')

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset(mix('assets/vendor/css/pages/page-auth.css')) }}">
@endsection

@section('content')

<div class="container align-items-center justify-content-center" >
        <div class="row">
            <form action="{{route('elegir-user')}}" method="POST">
            @csrf
                <div class="col col-md-4 mx-auto">
                    <div class="card border-info mb-1">
                        <div class="card-header">Postulantes</div>
                        <input name="type" value="postulante" hidden>
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">
                                    Acceder
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            
            <form action="{{route('elegir-user')}}" method="POST">
            @csrf
                <div class="col col-md-4 mx-auto">
                    <div class="card border-info mb-1">
                        <div class="card-header">Empresas</div>
                        <input name="type" value="empresa" hidden>
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">
                                    Acceder
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <form action="{{route('elegir-user')}}" method="POST">
            @csrf
                <div class="col col-md-4 mx-auto">
                    <div class="card border-info mb-1">
                        <div  class="card-header">Administrador</div>
                        <input name="type" value="admin" hidden>
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">
                                    Acceder
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection