@php
$configData = Helper::appClasses();
$customizerHidden = 'customizer-hide';
@endphp

@extends('layouts/blankLayout')

@section('title', 'Espera-Aprobacion')

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset(mix('assets/vendor/css/pages/page-auth.css')) }}">
@endsection

@section('content')
<div class="authentication-wrapper authentication-cover">
        <div class="authentication-inner row m-0 justify-content-center align-items-center">
            <!-- Card -->
            <div class="card p-4 shadow rounded">
                <div class="card-body text-center">
                    
                <h3>Estimado, {{Auth::user()->name}}</h3>
                    @if(Auth::check() && Auth::user()->estado == 'PENDIENTE')
                        <h4>Hemos enviado su solicitud de aprobación!</h4>
                        <p>
                            Esté pendiente de su bandeja de entrada, ya que se le enviará un correo cuando haya sido aprobado. Gracias.
                        </p>
                        @if (Route::has('login'))
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="btn btn-primary mt-3" type="submit">Volver al Login</button>
                            </form>
                        @endif
                    @elseif(Auth::check() && Auth::user()->estado == 'RECHAZADO')
                        <h4>Su solicitud ha sido rechazada</h4>
                        <p>
                            Lamentamos informarle que su solicitud ha sido rechazada. Puede comunicarse con el soporte para obtener más información.
                        </p>
                        @if (Route::has('login'))
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="btn btn-primary mt-3" type="submit">Volver al Login</button>
                            </form>
                        @endif
                    @else
                        <p>
                            Usted ya ha sido aceptado
                        </p>
                        @if (Route::has('login'))
                            <form method="GET" action="{{ route('pages-home') }}">
                                @csrf
                                <button class="btn btn-primary mt-3" type="submit">Home</button>
                            </form>
                        @endif
                    @endif
                </div>
            </div>
            <!-- /Card -->
        </div>
    </div>
@endsection