@php
$configData = Helper::appClasses();
$customizerHidden = 'customizer-hide';
@endphp

@extends('layouts/blankLayout')

@section('title', 'Verify Email')

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
        <img src="{{asset('assets/img/pages/verify-email-'.$configData['style'].'.png')}}" alt="Auth Cover Bg color" width="520" class="img-fluid authentication-cover-img" data-app-light-img="pages/verify-email-light.png" data-app-dark-img="pages/verify-email-dark.png">
        <div class="mx-auto">
          <h3>¡Confirma tu CORREO !</h3>
          <p>
            Comprueba tu bandeja de entrada, y haz click en el enlace que te ha llegado.
          </p>
        </div>
      </div>
    </div>
    <!-- /Left Text -->

    <!--  Verify email -->
    <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-4 p-sm-5">
      <div class="w-px-400 mx-auto">
        <!-- Logo -->
        <div class="app-brand mb-4">
          <a href="{{url('/')}}" class="app-brand-link gap-2 mb-2">
            <span class="app-brand-logo demo">@include('_partials.macros')</span>
            <span class="app-brand-text demo h3 mb-0 fw-bold">{{ config('variables.templateName') }}</span>
          </a>
        </div>
        <!-- /Logo -->

        <h4 class="mb-3">Verifica tu correo electrónico</h4>

        @if (session('status') == 'verification-link-sent')
        <div class="alert alert-success" role="alert">
          <div class="alert-body">
          Se ha enviado un nuevo enlace de verificación a la dirección de correo electrónico que proporcionó durante el registro.
          </div>
        </div>
        @endif
        <p class="text-start">
        Enlace de activación de la cuenta enviado a su dirección de correo electrónico: <strong>{{Auth::user()->email}}</strong> Siga el enlace para continuar.
        </p>
        <div class="mt-4 d-flex justify-content-between">
          <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="btn btn-label-secondary">
            Haga clic aquí para solicitar otro
            </button>
          </form>

          <form method="POST" action="{{route('logout')}}">
            @csrf

            <button type="submit" class="btn btn-danger">
            Cerrar sesión
            </button>
          </form>
        </div>
      </div>
    </div>
    <!-- /Verify Email -->
  </div>
</div>
@endsection