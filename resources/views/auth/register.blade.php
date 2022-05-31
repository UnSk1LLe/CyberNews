<x-guest-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <x-jet-authentication-card>
        <x-slot name="logo">

        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Имя пользователя') }}" style="font-size: 18px"/>
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" style="font-size: 18px"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" style="font-size: 18px"/>
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required style="font-size: 18px"/>
            </div>

            <div class="mt-4">
                <warning id="warn"></warning>
                <x-jet-label for="password" value="{{ __('Пароль') }}" style="font-size: 18px"/>
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" style="font-size: 18px"/>
                <button type="button" class="btn btn-light" id="showPass" onmousedown="showPassword(1)" onmouseup="showPassword(0)"><img src="eye-icon.png" style="width: 100%;"></button><button type="button" class="btn btn-light popup" style="width: 10%; height: 55px; margin-left: 1%; margin-top: 5px; background-color: lightgrey; font-size: 20px;" onmouseover="showInfo(1)" onmouseout="showInfo(0)">?
                    <span class="popuptext" id="myPopup">
                </span></button>
                    <div class="row">
                    <div class="col-auto">
                        <div class="progress passInd">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100" id="passwordIndicator" style="width: 0%;"></div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div id="passwordStatus">Нет пароля</div>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Подтвердите пароль') }}" style="font-size: 18px"/>
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" style="font-size: 18px"/>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">

                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Уже есть аккаунт?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Зарегистрироваться') }}
                </x-jet-button>
            </div>
        </form>
        <script src="jQuery-3.6.0.js"></script>
        <script src="register.js"></script>
    </x-jet-authentication-card>
</x-guest-layout>
