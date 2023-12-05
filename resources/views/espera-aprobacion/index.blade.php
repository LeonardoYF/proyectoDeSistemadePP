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
  <div class="authentication-inner row m-0">

    <!-- /Left Text -->
    <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center">
      <div class="flex-row text-center mx-auto">
        
        <div class="mx-auto">
          
          <h3>¡Estimado Usuario, 
    
          @if(Auth::check() && Auth::user()->estado == 'PENDIENTE')
              <h3>Hemos enviado su solicitud de aprobación!</h3>
              <p>
                  Esté pendiente de su bandeja de entrada, ya que se le enviará un correo cuando haya sido aprobado. Gracias.
              </p>
              @if (Route::has('login'))
                <form method="POST" action="{{route('logout')}}">
                  @csrf
                  <button class="btn btn-primary d-grid w-20" type="submit">Volver al Login</button>
                </form>
              @endif
          @elseif(Auth::check() && Auth::user()->estado == 'RECHAZADO')
              <h3>Su solicitud ha sido rechazada</h3>
              <p>
                  Lamentamos informarle que su solicitud ha sido rechazada. Puede comunicarse con el soporte para obtener más información.
              </p>
              @if (Route::has('login'))
                <form method="POST" action="{{route('logout')}}">
                  @csrf
                  <button class="btn btn-primary d-grid w-20" type="submit">Volver al Login</button>
                </form>
              @endif
          @else
              <p>
                  Usted ya ha sido aceptado
              </p>
              @if (Route::has('login'))
              <form method="GET" action="{{route('pages-home')}}">
                @csrf
                <button class="btn btn-primary d-grid w-20" type="submit">Home</button>
              </form>
          @endif
          @endif
          
         
        </div>
      </div>
    </div>
    <!-- /Left Text -->
    
          
         
    
  </div>
</div>
@endsection