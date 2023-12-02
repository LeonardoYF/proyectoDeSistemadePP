@extends('layouts/contentNavbarLayout')

@section('title', 'Aviso')

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
<div class="col-lg-12 col-md-12 col-12 mb-4">
    <button type="button" class="btn btn-primary btn-lg"><i class="menu-icon tf-icons bx bx-message-square-add"></i>Nuevo Aviso</button>
</div>
<div class="col-md-12 mb-4"  >
    <hr class="my-0">
</div>
<div class="col-lg-12 col-md-12 col-12 mb-4">
    <div class="card">
        <div class="d-flex align-items-end row">
            <div class="col-sm-12">
                <div class="card-body">
                    <h5 class="card-title text-primary">Buscar Aviso</h5>
                        
                        
                    <a href="javascript:;" class="btn btn-xxl btn-outline-primary">Buscar</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection