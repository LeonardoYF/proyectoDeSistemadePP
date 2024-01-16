<x-jet-form-section submit="updateProfileInformation">
  <x-slot name="title">
    {{ __('Información del perfil') }}
  </x-slot>

  <x-slot name="description">
    {{ __('Actualice la información del perfil y la dirección de correo electrónico de su cuenta.') }}
  </x-slot>

  <x-slot name="form">

    <x-jet-action-message on="saved">
      {{ __('Saved.') }}
    </x-jet-action-message>

    <!-- Profile Photo -->
    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
    <div class="mb-3" x-data="{photoName: null, photoPreview: null}">
      <!-- Profile Photo File Input -->
      <input type="file" hidden wire:model="photo" x-ref="photo" x-on:change=" photoName = $refs.photo.files[0].name; const reader = new FileReader(); reader.onload = (e) => { photoPreview = e.target.result;}; reader.readAsDataURL($refs.photo.files[0]);" />

      <!-- Current Profile Photo -->
      <div class="mt-2" x-show="! photoPreview">

        @if(Auth::user() && Auth::user()->profile_photo_path)
        <img src="{{ asset('storage/' . Auth::user()->profile_photo_path) }}" alt class="rounded-circle" height="80px" width="80px">
        @else
        <img src="{{ asset('assets/img/avatars/1.png') }}" alt class="rounded-circle" height="80px" width="80px">
        @endif
      </div>

      <!-- New Profile Photo Preview -->
      <div class="mt-2" x-show="photoPreview">
        <img x-bind:src="photoPreview" class="rounded-circle" width="80px" height="80px">
      </div>

      <x-jet-secondary-button class="mt-2 me-2" type="button" x-on:click.prevent="$refs.photo.click()">
        {{ __('Seleccionar una nueva foto') }}
      </x-jet-secondary-button>

      @if ($this->user->profile_photo_path)
      <button type="button" class="btn btn-danger text-uppercase mt-2" wire:click="deleteProfilePhoto">
        {{ __('Eliminar foto') }}
      </button>
      @endif

      <x-jet-input-error for="photo" class="mt-2" />
    </div>
    @endif

    <!-- Name -->
    <div class="mb-3">
      <x-jet-label class="form-label" for="name" value="{{ __('Name') }}" />
      <x-jet-input id="name" type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" wire:model.defer="state.name" autocomplete="name" />
      <x-jet-input-error for="name" />
    </div>

    <!-- Email -->
    <div class="mb-3">
      <x-jet-label class="form-label" for="email" value="{{ __('Email') }}" />
      <x-jet-input id="email" type="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" wire:model.defer="state.email" />
      <x-jet-input-error for="email" />
    </div>
  </x-slot>

  <x-slot name="actions">
    <div class="d-flex align-items-baseline">
      <x-jet-button>
        {{ __('Guardar') }}
      </x-jet-button>
    </div>
  </x-slot>
</x-jet-form-section>