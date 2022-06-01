<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход/Регистрация</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="ST.css" rel="stylesheet" type="text/css">
</head>

<body class="background-object">
<form method="POST" action="{{ route('register') }}" id="regForm">
    @csrf

    <x-jet-authentication-card>
        <x-slot name="logo">

        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <descr id="mainDescr">Регистрация</descr>
            <div>

                <div class="row">

                    <div>
                        <x-jet-label for="name" value="{{ __('Имя пользователя') }}" style="font-size: 18px"/>
                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" style="font-size: 18px"/>
                    </div>
                </div>

                <div class="mt-4">
                    <x-jet-label for="email" value="{{ __('Email') }}" style="font-size: 18px"/>
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required style="font-size: 18px"/>
                </div>

            </div>
            <div>

                <div>
                    <x-jet-label for="email" value="{{ __('Пароль') }}" style="font-size: 18px"/>
                </div>

                <x-jet-input type="text" maxlength="25" id="password" name="password" oninput="passwordComplexityCheck()" required style="width: 300px">
                </x-jet-input>
                <button type="button" class="btn btn-light" id="showPass" onmousedown="showPassword(1)" onmouseup="showPassword(0)">
                    <img src="eye-icon.png" style="width: 100%"></button>
                <button type="button" class="btn btn-light popup" style="width: 3.3%; height: 55px; margin-top: 7px; background-color: lightgrey; font-size: 20px; position: absolute;" onmouseover="showInfo(1)" onmouseout="showInfo(0);">?
                    <span class="popuptext" id="myPopup">
                </span></button>

                <warning id="warn"></warning>
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
            </div>
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Подтвердите пароль') }}" style="font-size: 18px"/>
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" style="font-size: 18px"/>
            </div>

            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                <label class="form-check-label" for="flexSwitchCheckChecked">Получать рассылки с новостями</label>
            </div>
            <div>
                <x-jet-button id="registrate" class="btn btn-primary" style="margin-top: 30px; margin-bottom: 30px; height: 60px">
                    {{ __('Зарегистрироваться') }}
                </x-jet-button>    </div>
            <a id="haveAcc" href="/MainPage">Уже есть аккаунт?</a>
        </form>

        <script src="jQuery-3.6.0.js"></script>
        <script src="regisJS.js"></script>
    </x-jet-authentication-card></form></body>




</html>
