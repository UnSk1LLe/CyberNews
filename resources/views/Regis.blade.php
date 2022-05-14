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
<form class="row g-2" id="regForm">
    <descr id="mainDescr">Регистрация</descr>
    <div>
        <descr id="dLogin">Логин</descr>
        <div>
            <input type="text" maxlength="20" id="login" placeholder="Введите логин" required>
        </div>

        <div class="row">

            <div class="col">
                <descr id="dSurname">Имя</descr>
                <div>
                    <x-jet-input type="text" maxlength="20" id="surname" placeholder="Введите фамилию" :value="old('name')" required autofocus autocomplete="name"/>
                </div>
            </div>

            <div class="col">
                <descr id="dName">Имя</descr>
                <div>
                    <input type="text" maxlength="20" id="name" placeholder="Введите имя" required>
                </div>
            </div>
        </div>


    </div>
    <div>
        <descr id="dPassword">Пароль</descr>
        <div>

            <x-jet-input type="text" maxlength="25" id="password" name="password" placeholder="Введите пароль" oninput="passwordComplexityCheck()" required><button type="button" class="btn btn-light" id="showPass" onmousedown="showPassword(1)" onmouseup="showPassword(0)"><img src="eye-icon.png" style="width: 100%;"></button><button type="button" class="btn btn-light popup" style="width: 10%; height: 55px; margin-left: 1%; margin-top: 5px; background-color: lightgrey; font-size: 20px;" onmouseover="showInfo(1)" onmouseout="showInfo(0)">?

                <span class="popuptext" id="myPopup">
                </span></button></x-jet-input>

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
    <div>
        <descr id="gender">Пол</descr>
        <div>
            <descr><input class="form-check-input" id="man" type="radio" onclick="radioCheck(1)">Мужской</descr>
            <descr><input class="form-check-input" id="woman" type="radio" onclick="radioCheck(0)">Женский</descr>
        </div>
    </div>
    <div>
        <descr id="dBirthday">Дата Рождения</descr>
        <div class="row g-1">
            <div class="col">
                <input type="number" maxlength="2" id="dDate" placeholder="День">
            </div>
            <div class="col">
                <select class="form-select" id="mDate" style="width: inherit;">
                    <option selected id="m0">Месяц</option>
                    <option id="m1">Январь</option>
                    <option id="m2">Февраль</option>
                    <option id="m3">Март</option>
                    <option id="m4">Апрель</option>
                    <option id="m5">Май</option>
                    <option id="m6">Июнь</option>
                    <option id="m7">Июль</option>
                    <option id="m8">Август</option>
                    <option id="m9">Сентябрь</option>
                    <option id="m10">Октябрь</option>
                    <option id="m11">Ноябрь</option>
                    <option id="m12">Декабрь</option>
                </select>
            </div>
            <div class="col">
                <input type="number" maxlength="4" id="yDate"placeholder="Год">
            </div>
        </div>
    </div>
    </div>


    <div>
        <descr id="dEmail" required>Адрес элетронной почты</descr>
        <div>
            <input type="text" maxlength="35" id="email" placeholder="Email...">
        </div>
    </div>
    <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
        <label class="form-check-label" for="flexSwitchCheckChecked">Получать рассылки с новостями</label>
    </div>
    <div>
        <button id="registrate" onclick="isFilled()"></button><a id="haveAcc" href="/MainPage">Уже есть аккаунт?</a>
    </div>
</form>

<script src="jQuery-3.6.0.js"></script>
<script src="regisJS.js"></script>
</body>




</html>
