@php
$containerNav = $containerNav ?? 'container-fluid';
@endphp

<!-- Navbar -->
<nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
  <div class="{{$containerNav}}">

    <!--  Brand demo (display only for navbar-full and hide on below xl) -->
    @if(isset($navbarFull))
    <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
      <a href="{{url('/')}}" class="app-brand-link gap-2">
        <span class="app-brand-logo demo">
          @include('_partials.macros')
        </span>
        <span class="app-brand-text demo menu-text fw-bold">{{config('variables.templateName')}}</span>
      </a>

      @if(isset($menuHorizontal))
      <!-- Display menu close icon only for horizontal-menu with navbar-full -->
      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
        <i class="bx bx-x bx-sm align-middle"></i>
      </a>
      @endif
    </div>
    @endif

    <!-- ! Not required for layout-without-menu -->
    @if(!isset($navbarHideToggle))
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0{{ isset($menuHorizontal) ? ' d-xl-none ' : '' }} {{ isset($contentNavbar) ?' d-xl-none ' : '' }}">
      <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
        <i class="bx bx-menu bx-sm"></i>
      </a>
    </div>
    @endif

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

      <!-- Style Switcher -->
      <div class="navbar-nav align-items-center">
        <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
          <i class='bx bx-sm'></i>
        </a>
      </div>
      @role('admin')

      <!--/ prueba-->
      <ul class="navbar-nav flex-row align-items-center ms-auto">
        <!-- User -->
        @php
        $pendientesInfo = app('App\Http\Controllers\Admin\EstudiantesController')->countPendientes();
        $totalPendientesEstudiantes = $pendientesInfo['totalPendientes'];
        $estudiantesPendientes = $pendientesInfo['pendientes'];
        @endphp

        <!-- NOTIFICACIONES DE ESTUDIANTES -->
        <li class="nav-item navbar-dropdown dropdown-user dropdown">
          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
            <div class="d-flex align-items-start position-relative">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-badge-fill" viewBox="0 0 16 16">
                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6m5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1z" />
              </svg>
              @if ($totalPendientesEstudiantes > 0)
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                {{ $totalPendientesEstudiantes }}
                <span class="visually-hidden">unread messages</span>
              </span>
              @endif
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li class="d-flex align-items-center justify-content-center">
              <span class="align-middle fw-bold">Estudiantes</span>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            @foreach ($estudiantesPendientes as $estudiante)
            <li class="d-flex align-items-center mx-2">
              <a class="dropdown-item" href="#">{{ $estudiante->email }}</a>
              <form action="{{ route('admin.estudiantes.update',$estudiante->id) }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="estado" value="APROBADO">
                <button type="submit" class="btn btn-success btn-sm mx-2">Aceptar</button>
              </form>
              <form action="{{ route('admin.estudiantes.update',$estudiante->id) }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="estado" value="RECHAZADO">
                <button class="btn btn-danger btn-sm" >Rechazar</button>
              </form>
              
            </li>
            @endforeach
          </ul>
        </li>
        <!-- NOTIFICACIONES DE EMPRESAS -->
        @php
        $pendientesInfo = app('App\Http\Controllers\Admin\EmpresasController')->countPendientes();
        $totalPendientesEmpresas = $pendientesInfo['totalPendientes'];
        $empresasPendientes = $pendientesInfo['pendientes'];
        @endphp
        <li class="nav-item navbar-dropdown dropdown-user dropdown">
          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
            <div class="d-flex align-items-start position-relative">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                <path d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z" />
                <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1zm11 0H3v14h3v-2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15h3z" />
              </svg>
              @if ($totalPendientesEmpresas > 0)
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                {{ $totalPendientesEmpresas }}
                <span class="visually-hidden">unread messages</span>
              </span>
              @endif
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li class="d-flex align-items-center justify-content-center">
              <span class="align-middle fw-bold">Empresas</span>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            @foreach ($empresasPendientes as $empresa)
            <li class="d-flex align-items-center mx-2">
              <a class="dropdown-item" href="#">{{ $empresa->name }} - {{ $empresa->email }}</a>
              <form action="{{ route('admin.empresas.update',$empresa->id) }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="estado" value="APROBADO">
                <button type="submit" class="btn btn-success btn-sm mx-2">Aceptar</button>
              </form>
              <form action="{{ route('admin.empresas.update',$empresa->id) }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="estado" value="RECHAZADO">
                <button class="btn btn-danger btn-sm" >Rechazar</button>
              </form>
            </li>
            @endforeach
          </ul>
        </li>
        <!-- NOTIFICACIONES DE AVISOS -->
        <li class="nav-item navbar-dropdown dropdown-user dropdown">
          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
            <div class="d-flex align-items-start position-relative">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-file-text" viewBox="0 0 16 16">
                <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5M5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1z" />
                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1" />
              </svg>
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                99+
                <span class="visually-hidden">unread messages</span>
              </span>
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li class="d-flex align-items-center justify-content-center">
              <span class="align-middle fw-bold">Avisos</span>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>

          </ul>
        </li>
        <!--/ User -->
      </ul>

      @endrole

      <!-- prueba-->
      <!--/ Style Switcher -->

      <ul class="navbar-nav flex-row align-items-center @if(!auth()->user()->hasRole('admin')) ms-auto @endif">

        <!-- User -->
        <li class="nav-item navbar-dropdown dropdown-user dropdown">
          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
            <div class="avatar avatar-online">
              @if(Auth::user() && Auth::user()->profile_photo_path)
              <img src="{{ asset('storage/' . Auth::user()->profile_photo_path) }}" alt class="rounded-circle">
              @else
              <img src="{{ asset('assets/img/avatars/1.png') }}" alt class="rounded-circle">
              @endif
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item" href="{{ Route::has('profile.show') ? route('profile.show') : 'javascript:void(0);' }}">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar avatar-online">
                      @if(Auth::user() && Auth::user()->profile_photo_path)
                      <img src="{{ asset('storage/' . Auth::user()->profile_photo_path) }}" alt class="rounded-circle">
                      @else
                      <img src="{{ asset('assets/img/avatars/1.png') }}" alt class="rounded-circle">
                      @endif
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <span class="fw-semibold d-block">
                      @if (Auth::check())
                      {{ Auth::user()->name }}
                      @else
                      John Doe
                      @endif
                    </span>
                    @php
                    $user = auth()->user();

                    if ($user) {
                    // Obtener el primer rol del usuario
                    $roles = $user->roles;

                    if (!empty($roles)) {
                    $primerRol = $roles[0]->name;
                    // $primerRol ahora contiene el nombre del primer rol del usuario

                    }
                    }
                    @endphp
                    <small class="text-muted">{{$primerRol}}</small>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <li>
              <a class="dropdown-item" href="{{ Route::has('profile.show') ? route('profile.show') : 'javascript:void(0);' }}">
                <i class="bx bx-user me-2"></i>
                <span class="align-middle">Mi Cuenta</span>
              </a>
            </li>

            <li>
              <div class="dropdown-divider"></div>
            </li>
            @if (Auth::check())
            <li>
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class='bx bx-power-off me-2'></i>
                <span class="align-middle">Salir</span>
              </a>
            </li>
            <form method="POST" id="logout-form" action="{{ route('logout') }}">
              @csrf
            </form>
            @else
            <li>
              <a class="dropdown-item" href="{{ Route::has('login') ? route('login') : 'javascript:void(0)' }}">
                <i class='bx bx-log-in me-2'></i>
                <span class="align-middle">Login</span>
              </a>
            </li>
            @endif
          </ul>
        </li>
        <!--/ User -->
      </ul>

    </div>

  </div>
</nav>
<!-- / Navbar -->