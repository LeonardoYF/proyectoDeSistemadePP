@extends('layouts/contentNavbarLayout')

@section('title', 'Convocatorias')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>
@endsection

@section('content')
<form >
    <div class="col-lg-12 col-md-12 col-12 mb-4">
        <div class="card">
            <div class="d-flex align-items-end row">
                <div class="col-sm-12">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Búsqueda</h5>
                        <div class="col-lg-12 col-md-12 col-12 mb-2">
                            <div class="align-items-start">
                                <div class="nav-item d-flex align-items-center">
                                    <i class="menu-icon tf-icons bx bx-briefcase"></i>
                                    <input type="text" name="text" class="form-control border-0 shadow-none" placeholder="Buscar Cargo/Categoria..." aria-label="Search...">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12 mb-3">
                            <div class="nav-item d-flex align-items-center">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Ordenar</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                </select>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Fecha</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                </select>
                            </div>
                        </div>
                        <a href="javascript:;" class="btn btn-xxl btn-outline-primary">Buscar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


<div class="card">
    <div class="d-flex align-items-end row">
        <div class="col-sm-12">
            <div class="card-body">
                <h5 class="card-title text-primary">Convocatoria</h5>
                <p class="mb-4">You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in your profile.</p>
                <a href="javascript:;" class="btn btn-xxl btn-outline-primary">Postular</a>
            </div>
        </div>
    </div>
</div>
@endsection