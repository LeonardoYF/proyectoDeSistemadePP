<x-jet-action-section>
  <x-slot name="title">
    {{ __('Eliminar Cuenta') }}
  </x-slot>

  <x-slot name="description">
    {{ __('Elimina tu cuenta de forma permanente.') }}
  </x-slot>

  <x-slot name="content">
    <div>
      {{ __('Una vez que se elimine su cuenta, todos sus recursos y datos se eliminarán de forma permanente. Antes de eliminar su cuenta, descargue cualquier dato o información que desee conservar.') }}
    </div>

    <div class="mt-3">
      <x-jet-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
        {{ __('Eliminar Cuenta') }}
      </x-jet-danger-button>
    </div>

    <!-- Delete User Confirmation Modal -->
    <x-jet-dialog-modal wire:model="confirmingUserDeletion">
      <x-slot name="title">
        {{ __('Eliminar Cuenta') }}
      </x-slot>

      <x-slot name="content">
        {{ __('¿Estás seguro de que quieres eliminar tu cuenta? Una vez que se elimine su cuenta, todos sus recursos y datos se eliminarán de forma permanente. Ingrese su contraseña para confirmar que desea eliminar su cuenta de forma permanente.') }}

        <div class="mt-2" x-data="{}"
          x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
          <x-jet-input type="password" class="{{ $errors->has('password') ? 'is-invalid' : '' }}"
            placeholder="{{ __('Password') }}" x-ref="password" wire:model.defer="password"
            wire:keydown.enter="deleteUser" />

          <x-jet-input-error for="password" />
        </div>
      </x-slot>

      <x-slot name="footer">
        <x-jet-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
          {{ __('Cancelar') }}
        </x-jet-secondary-button>

        <x-jet-danger-button class="ms-1" wire:click="deleteUser" wire:loading.attr="disabled">
          {{ __('Eliminar Cuenta') }}
        </x-jet-danger-button>
      </x-slot>
    </x-jet-dialog-modal>
  </x-slot>

</x-jet-action-section>
