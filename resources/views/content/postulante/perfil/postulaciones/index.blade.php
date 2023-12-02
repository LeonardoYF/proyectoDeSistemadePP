@extends('layouts/contentNavbarLayout')

@section('title', 'Postulaciones')

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
<div class="col-12 mb-4">
    <div class="card">
        <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
                <span class="fw-bold d-block mb-0">Consultor de Ventas PROMART</span>
                <div class="dropdown">
                    <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="cardOpt1">
                        <a class="dropdown-item" href="javascript:void(0);">Visualizar</a>
                        <a class="dropdown-item" href="javascript:void(0);">Eliminar</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">

                    <span class="fw-semibold d-block mb-1">Titulo empresa</span>
                    <span class="fw-semibold d-block mb-1">Fecha Postulacion</span>
                </div>
                <div class="col-sm-4">
                    <span class="fw-semibold d-block mb-1">Estado</span>
                </div>
            </div>
            <a href="javascript:;" class="btn btn-sm btn-outline-primary">Visualizar</a>
        </div>
    </div>
</div>
@endsection