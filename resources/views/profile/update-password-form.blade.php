<link href="ST.css" rel="stylesheet" type="text/css">
<x-jet-form-section submit="updatePassword">
    <x-slot name="title">
        {{ __('Обновление пароля') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Вы можете изменить пароль, если думаете что кто-то мог получить доступ к аккаунту и украсть вашу конфидециальную информацию') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="current_password" value="{{ __('Текущий пароль') }}" />
            <input id="current_password" type="password" class="mt-1 block w-full" wire:model.defer="state.current_password" autocomplete="current-password" />
            <x-jet-input-error for="current_password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password" value="{{ __('Новый пароль') }}" />
            <input id="password" type="password" class="mt-1 block w-full" wire:model.defer="state.password" autocomplete="new-password" />
            <x-jet-input-error for="password" class="mt-2" />

        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password_confirmation" value="{{ __('Подтверждение пароля') }}" />
            <input id="password_confirmation" type="password" class="mt-1 block w-full" wire:model.defer="state.password_confirmation" autocomplete="new-password" />
            <x-jet-input-error for="password_confirmation" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Измененеия успешно сохранены.') }}
        </x-jet-action-message>

        <x-jet-button>
            {{ __('Сохранить') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
