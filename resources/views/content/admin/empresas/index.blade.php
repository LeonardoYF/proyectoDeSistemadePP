@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Empresas')

@section('content')

@role('admin')
<div class="card">
  <h5 class="card-header">Listado Empresas</h5>
  <!--Search Form -->
  <div class="card-body">
    <form class="dt_adv_search" action="{{route('admin.estudiantes.index')}}" method="GET">
    @csrf
      <div class="row">
        <div class="col-12">
          <div class="row g-3">
            <div class="col-12 col-sm-6 col-lg-4">
              <label class="form-label">NOMBRE:</label>
              <input name="nombre" value="{{$nombreSearch}}" type="text" class="form-control dt-input dt-full-name" data-column=1 placeholder="Pepe Flores" data-column-index="0">
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
              <label class="form-label">Email:</label>
              <input name="email" value="{{$emailSearch}}" type="text" class="form-control dt-input" data-column=2 placeholder="xxxxxx@example.com" data-column-index="1">
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
              <label class="form-label">Fecha:</label>
              <div class="mb-0">
                <input type="text" class="form-control dt-date flatpickr-range dt-input" data-column="5" placeholder="StartDate to EndDate" data-column-index="4" name="dt_date" />
                <input type="hidden" class="form-control dt-date start_date dt-input" data-column="5" data-column-index="4" name="value_from_start_date" />
                <input type="hidden" class="form-control dt-date end_date dt-input" name="value_from_end_date" data-column="5" data-column-index="4" />
              </div>
            </div>
            
          </div>
        </div>
      </div>
      <div class="row">
        <div class="row g-3">
        <div class="col-12 col-sm-6 col-lg-4">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
            
        </div>
      </div>
    </form>
  </div>
  <hr class="mt-0">
<div class="card-datatable table-responsive">
<table class="dt-advanced-search table table-bordered">
    <thead>
        <tr>
            <th></th>
            <th>Name</th>
            <th>Email</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($empresas as $empresa)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $empresa->name }}</td>
            <td>{{ $empresa->email }}</td>
            <td>
                <!-- Formulario para la columna de estado -->
                <form action="{{ route('admin.empresas.update',$empresa->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <select class="form-select" name="estado" onchange="this.form.submit()">
                        <option value="APROBADO" {{ $empresa->estado == 'APROBADO' ? 'selected' : '' }}>Aprobado</option>
                        <option value="PENDIENTE" {{ $empresa->estado == 'PENDIENTE' ? 'selected' : '' }}>Pendiente</option>
                        <option value="RECHAZADO" {{ $empresa->estado == 'RECHAZADO' ? 'selected' : '' }}>Rechazado</option>
                    </select>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>TABLA DE ESTUDIANTES</th>
            
        </tr>
    </tfoot>
</table>
</div>
  </div>
@endrole
@endsection