@extends('layouts/contentNavbarLayout')

@section('title', 'Mi Perfil')

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

<div class="col-lg-12 mb-4 order-0">
    <div class="card">
        <div class="d-flex align-items-end row">
            <div class="col-sm-12">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <h4 class="card-title text-primary">Datos Personales</h4>
                        <button class="btn btn-sm btn-outline-primary" type="button" id="cardOpt1" data-bs-toggle="modal" data-bs-target="#modalCenter">
                            <i class="bx bx-pencil"></i>Editar
                        </button>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="{{asset('assets/img/illustrations/man-with-laptop-light.png')}}" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
                            </div>

                        </div>
                        <div class="col-sm-8">
                            <p class="card-text">
                                {{ __('Mario Leonardo Yarleque Farfan') }}
                            </p>
                            <p class="card-text">
                                {{ __('leonardoyarleque.21@gmail.com') }}
                            </p>
                            <p class="card-text">
                                {{ __('926444798') }}
                            </p>
                            <p class="card-text">
                                {{ __('Ingeniero Informatico') }}
                            </p>
                            <p class="card-text">
                                {{ __('Castilla,Piura') }}
                            </p>
                            
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-6">

                        <div class="mt-3">
                            <!-- Button trigger modal -->


                            <!-- Modal -->
                            <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalCenterTitle">Datos Personales</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col mb-1">
                                                    <label for="nombres" class="form-label">Nombres</label>
                                                    <input type="text" id="nombres" class="form-control" placeholder="Nombres">
                                                </div>
                                                <div class="col mb-1">
                                                    <label for="apellidos" class="form-label">Apellidos</label>
                                                    <input type="text" id="apellidos" class="form-control" placeholder="Apellidos">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-1">
                                                    <label for="celular" class="form-label">Celular</label>
                                                    <input type="text" id="celular" class="form-control" placeholder="12345..">
                                                </div>
                                                <div class="col mb-1">
                                                    <label for="nameWithTitle" class="form-label">Genero</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Selecciona</option>
                                                        <option value="1">MASCULINO</option>
                                                        <option value="2">FEMENINO</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-1">
                                                    <label for="nameWithTitle" class="form-label">Tipo de Documento</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Selecciona</option>
                                                        <option value="1">DNI</option>
                                                        <option value="2">CARNET DE EXTRANJERIA</option>
                                                    </select>
                                                </div>
                                                <div class="col mb-1">
                                                    <label for="nameWithTitle" class="form-label">Numero de Documento</label>
                                                    <input type="text" id="nameWithTitle" class="form-control" placeholder="Enter Name">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-1">
                                                    <label for="nameWithTitle" class="form-label">Region</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Selecciona</option>
                                                        <option value="1">DNI</option>
                                                        <option value="2">CARNET DE EXTRANJERIA</option>
                                                    </select>
                                                </div>
                                                <div class="col mb-1">
                                                    <label for="nameWithTitle" class="form-label">Provincia</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Selecciona</option>
                                                        <option value="1">DNI</option>
                                                        <option value="2">CARNET DE EXTRANJERIA</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col mb-1">
                                                    <label for="emailWithTitle" class="form-label">Email</label>
                                                    <input type="text" id="emailWithTitle" class="form-control" placeholder="xxxx@xxx.xx">
                                                </div>
                                                <div class="col mb-1">
                                                    <label for="dobWithTitle" class="form-label">DOB</label>
                                                    <input type="text" id="dobWithTitle" class="form-control" placeholder="DD / MM / YY">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            <button type="button" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="col-lg-12 mb-4 order-0">
    <div class="card">
        <div class="d-flex align-items-end row">
            <div class="col-sm-12">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <h4 class="card-title text-primary">Experiencias Laborales</h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-2 order-0">
                            <div class="card">
                                <div class="d-flex align-items-end row">
                                    <div class="col-sm-12">
                                        <div class="card-body">
                                            <div class="card-title d-flex align-items-start justify-content-between">
                                                <h5 class="fw-semibold d-block mb-1">Empresa</h5>
                                                
                                                <button class="btn btn-sm btn-outline-primary" type="button" id="cardOpt1" data-bs-toggle="modal" data-bs-target="#modalExperiencia">
                                                    <i class="bx bx-pencil"></i>Editar
                                                </button>
                                            </div>
                                            <h6>Puesto</h6>
                                            <h6>Descripcion</h6>
                                            <h6>Periodo</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">

                                        <div class="mt-3">
                                            <!-- Button trigger modal -->


                                            <!-- Modal -->
                                            <div class="modal fade" id="modalExperiencia" tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalExperienciaTitle">Experiencias Laborales</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col mb-1">
                                                                    <label for="nombrePuesto" class="form-label">Nombre del Puesto</label>
                                                                    <input type="text" id="nombrePuesto" class="form-control" placeholder="Puesto">
                                                                </div>
                                                                <div class="col mb-1">
                                                                    <label for="empresa" class="form-label">Empresa</label>
                                                                    <input type="text" id="empresa" class="form-control" placeholder="Empresa">
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col mb-1">
                                                                    <label for="jerarquia" class="form-label">Jerarquia</label>
                                                                    <select class="form-select" aria-label="Default select example">
                                                                        <option selected>Selecciona</option>
                                                                        <option value="1">MASCULINO</option>
                                                                        <option value="2">FEMENINO</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col mb-1">
                                                                    <label for="areaPuesto" class="form-label">Area del Puesto</label>
                                                                    <select class="form-select" aria-label="Default select example">
                                                                        <option selected>Selecciona</option>
                                                                        <option value="1">DNI</option>
                                                                        <option value="2">CARNET DE EXTRANJERIA</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col mb-1">
                                                                    <label for="descripcion" class="form-label">Descripcion</label>
                                                                    <input type="text" id="descripcion" class="form-control" placeholder="Nombres">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col mb-1">
                                                                    <label for="fechaInicio" class="form-label">Fecha Inicio</label>
                                                                    <input type="date" id="fechaInicio" class="form-control" placeholder="xxxx@xxx.xx">
                                                                </div>
                                                                <div class="col mb-1">
                                                                    <label for="fechaFinal" class="form-label">Fecha Final</label>
                                                                    <input type="date" id="fechaFinal" class="form-control" placeholder="DD / MM / YY">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                            <button type="button" class="btn btn-primary">Guardar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <a href="javascript:;" class="btn btn-sm btn-primary">Añadir</a>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="col-lg-12 mb-4 order-0">
    <div class="card">
        <div class="d-flex align-items-end row">
            <div class="col-sm-12">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <h4 class="card-title text-primary">Estudios</h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-2 order-0">
                            <div class="card">
                                <div class="d-flex align-items-end row">
                                    <div class="col-sm-12">
                                        <div class="card-body">
                                            <div class="card-title d-flex align-items-start justify-content-between">
                                                <h5 class="fw-semibold d-block mb-1">Grado</h5>
                                                <button class="btn btn-sm btn-outline-primary" type="button" id="cardOpt1" data-bs-toggle="modal" data-bs-target="#modalEstudios">
                                                    <i class="bx bx-pencil"></i>Editar
                                                </button>
                                            </div>
                                            <h6>Centro de estudio</h6>
                                            <h6>Periodo</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">

                                        <div class="mt-3">
                                            <!-- Button trigger modal -->


                                            <!-- Modal -->
                                            <div class="modal fade" id="modalEstudios" tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalExperienciaTitle">Estudios</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col mb-1">
                                                                    <label for="areaPuesto" class="form-label">Nivel de Educacion</label>
                                                                    <select class="form-select" aria-label="Default select example">
                                                                        <option selected>Selecciona</option>
                                                                        <option value="1">UNIVERSITARIO</option>
                                                                        <option value="2">CURSO/TALLER</option>
                                                                        <option value="2">CERTIFICACIÓN</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col mb-1">
                                                                    <label for="areaPuesto" class="form-label">Grado</label>
                                                                    <select class="form-select" aria-label="Default select example">
                                                                        <option selected>Selecciona</option>
                                                                        <option value="1">BACHILLER</option>
                                                                        <option value="2">EGRESADO</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col mb-1">
                                                                    <label for="nombrePuesto" class="form-label">Centro de Estudio</label>
                                                                    <input type="text" id="nombrePuesto" class="form-control" placeholder="Puesto">
                                                                </div>
                                                            </div>


                                                            <div class="row">
                                                                <div class="col mb-1">
                                                                    <label for="fechaInicio" class="form-label">Fecha Inicio</label>
                                                                    <input type="date" id="fechaInicio" class="form-control" placeholder="xxxx@xxx.xx">
                                                                </div>
                                                                <div class="col mb-1">
                                                                    <label for="fechaFinal" class="form-label">Fecha Final</label>
                                                                    <input type="date" id="fechaFinal" class="form-control" placeholder="DD / MM / YY">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                            <button type="button" class="btn btn-primary">Guardar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="javascript:;" class="btn btn-sm btn-primary">Añadir</a>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="col-lg-12 mb-4 order-0">
    <div class="card">
        <div class="d-flex align-items-end row">
            <div class="col-sm-12">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <h4 class="card-title text-primary">Conocimientos</h4>
                        <button class="btn btn-sm btn-outline-primary" type="button" id="cardOpt1" data-bs-toggle="modal" data-bs-target="#modalConocimientos">
                            <i class="bx bx-pencil"></i>Editar
                        </button>
                    </div>
                    <div class="row">

                        <div class="col-sm-12">
                            <p class="card-text">
                                {{ __('Mario Leonardo Yarleque Farfan') }}
                            </p>
                            <p class="card-text">
                                {{ __('leonardoyarleque.21@gmail.com') }}
                            </p>
                            <p class="card-text">
                                {{ __('926444798') }}
                            </p>
                            
                        </div>

                    </div>
                    <div class="mt-3">
                        <!-- Button trigger modal -->


                        <!-- Modal -->
                        <div class="modal fade" id="modalConocimientos" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalExperienciaTitle">Estudios</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col mb-1">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <td>Conocimiento</td>
                                                                <td>Nivel</td>
                                                                <td>Opciones</td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Excel</td>
                                                                <td>
                                                                    BASICO
                                                                </td>
                                                                <td>

                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col mb-1">
                                                <label for="fechaInicio" class="form-label">Conocimientos</label>
                                                <input type="text" id="fechaInicio" class="form-control" placeholder="Conocimiento">
                                            </div>
                                            <div class="col mb-1">
                                                <label for="fechaInicio" class="form-label">Nivel</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Selecciona</option>
                                                    <option value="1">BASICO</option>
                                                    <option value="2">INTERMEDIO</option>
                                                    <option value="2">AVANZADO</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary">AGREGAR</button>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-primary">Guardar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>

        </div>
    </div>
</div>
<div class="col-lg-12 mb-4 order-0">
    <div class="card">
        <div class="d-flex align-items-end row">
            <div class="col-sm-12">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <h4 class="card-title text-primary">Links Adicionales</h4>
                        <button class="btn btn-sm btn-outline-primary" type="button" id="cardOpt1" data-bs-toggle="modal" data-bs-target="#modalLinks">
                            <i class="bx bx-pencil"></i>Editar
                        </button>
                    </div>
                    <div class="row">

                        <div class="col-sm-12">
                            <p class="card-text">
                                {{ __('LINK 1') }}
                            </p>
                            
                            
                        </div>

                    </div>
                    <div class="mt-3">
                        <!-- Button trigger modal -->


                        <!-- Modal -->
                        <div class="modal fade" id="modalLinks" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalExperienciaTitle">Estudios</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col mb-1">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <td>Link</td>       
                                                                <td>Opciones</td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Excel</td>
                                                                
                                                                <td>

                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col mb-1">
                                                <label for="fechaInicio" class="form-label">Link</label>
                                                <input type="text" id="fechaInicio" class="form-control" placeholder="Link">
                                            </div>
                                            
                                        </div>
                                        <button type="button" class="btn btn-primary">AGREGAR</button>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-primary">Guardar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>

        </div>
    </div>
</div>
@endsection