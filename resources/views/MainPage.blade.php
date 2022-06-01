<!DOCTYPE html>
<html>



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости СНГ киберспорта</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="ST.css" rel="stylesheet" type="text/css">
</head>

<body>

<st class="breakpoints">
    <div class="background-object">




        <header class="fixed-top" id="header">
            <div class=" Header_inner">
                <a class="top" href="/MainPage" id="mainRef">
                    Узнавай новости первым!
                </a>
                <p><input maxlength="25" id="searchField" placeholder="Поиск..." class="textField"></p>
                <a class="pl1">
                    <buttonA type="button" class="btn btn-info" style="margin-left: 0px"><img id="searchButton" src="search-icon.png" height="15px" width="15px"></buttonA>
                </a>
                <nav class="nav" id="nav">
                    <a class="nav_link" id="csgoRef" href="/CSGO">CS:GO</a>
                    <a class="nav_link" href="/Dota2">DOTA 2</a>
                    <a class="nav_link" href="/VAL">VALORANT</a>
                    @guest
                        @if (Route::has('login'))
                            <a id="show-login" href="#" onclick="document.getElementById('id01').style.display='block'" >{{ ('Войти') }}</a>
                            @endif

                    @else
                        <a href="/user/profile">{{ Auth::user()->name }}</a>
                    @endguest
                            <!---<a class="nav_link" id="logIn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">ВОЙТИ</a>--->

                    <div id="id01" class="modal">

                        <form class="modal-content animate" action="#" method="post" style="width: 40%;" >
                            <x-jet-authentication-card>
                                <x-slot name="logo">

                                </x-slot>
                                <div class="imgcontainer">
                                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                </div>

                                <div class="container">


                                    <x-jet-validation-errors class="mb-4" />

                                    @if (session('status'))
                                        <div class="mb-4 font-medium text-sm text-green-600">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    <!---Routing to login page--->
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <label for="email"><b>Логин</b></label>
                                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

                                        <label for="psw"><b>Пароль</b></label>
                                        <warning id="warn"></warning>
                                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />


                                        <button type="submit" style="background-color: blue">Войти</button>
                                        <label>
                                            <input class="form-check-input" type="checkbox">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Запомнить меня
                                            </label>
                                            @if (Route::has('password.request'))
                                                <span class="psw"><a href="{{ route('password.request') }}" style="margin-left: 280px;">Забыли пароль?</a></span>
                                            @endif
                                        </label>



                                        <div class="container" style="background-color:#f1f1f1">
                                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="background-color: indianred;">Назад</button>
                                        </div>
                                        <span class="psw" style="margin-left: -32px">Ещё нет аккаунта?<a href="/Regis" style="margin-left: 1%;">Создайте</a></span>

                                    </form>
                                </div>
                            </x-jet-authentication-card>
                        </form>
                    </div>

                </nav>
            </div>
        </header>

        <div class="down">
            <div class = "news_grid">

                <div class = "box">
                    <h class="nbox">

                        <b class="title"><span>  NAVI CS:GO выигрывают Super Major Stockholm 2021 на 2.000.000$</span></b>
                        <img src="navi_major.jpg" href="/comments">
                    </h>
                </div>

                <div class = "box">
                    <h class="nbox">
                        <b class="title"><span> Российская команда Team Spirit DOTA 2 одержала победу в финале International</span></b>
                        <img src="team-spirit-international.jpg">
                    </h>
                </div>

                <div class = "box">
                    <h class="nbox">
                        <b class="title"><span> GAMBIT заняли 2-ое место на крупнейшем турнире по VALORANT</span></b>
                        <img src="gambit-valorant-champions.jpg">
                    </h>
                </div>

                <div class = "box">
                    <h class="nbox">
                        <b class="title" ><span> flamie покидает состав Natus Vincere CS:GO</span></b>
                        <img src="flamie-leaves-navi.jpeg">
                    </h>
                </div>

                <div class = "box">
                    <h class="nbox">
                        <b class="title"><span> Radar-hack на про-сцене: Akuma подозревается в использовании читов</span></b>
                        <img src="radar-hack.jpg">
                    </h>
                </div>

                <div class = "box">
                    <h class="nbox">
                        <b class="title top2"><span> Чего ждать от СНГ киберспорта после Нового Года?</span></b>
                        <img src="new-year.jpg">
                    </h>
                </div>
            </div>

            </back>
        </div>

        <div class="footer">
            <buttonA onclick="topFunction()" id="scrollTop" onmouseover="changeColor(1)" onmouseout="changeColor(0)">Top</buttonA>
            <div> <span>Developed by Tsoy Pavel</span></div>
        </div>

    </div>
</st>
<script src="11.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>



</html>
