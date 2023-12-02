@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Home')

@section('content')

@role('admin')
<h4>Este contenido es solo para admin</h4>
@endrole
@role('empresa')
<h4>Este contenido es solo para la empresa</h4>
@endrole
@endsection
