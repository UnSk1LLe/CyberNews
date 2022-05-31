<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Новости СНГ киберспорта</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="ST.css" rel="stylesheet" type="text/css">
    <link href="csgoCSS.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="background-object">




    <header class="fixed-top" id="header">
        <div class=" Header_inner">
            <a class="top" href="/MainPage" id="mainRef">
                Узнавай новости первым!
            </a>
            <p><input maxlength="25" id="searchField" placeholder="Поиск..." class="textField"></p>
            <a class="pl1">
                <buttonA type="button" class="btn btn-info" ><img id="searchButton" src="search-icon.png" height="15px" width="15px"></buttonA>
            </a>
            <nav class="nav" id="nav">
                <a class="nav_link" href="/CSGO">CS:GO</a>
                <a class="nav_link" href="/Dota2">DOTA 2</a>
                <a class="nav_link" href="/VAL">VALORANT</a>
                <a class="nav_link" id="logIn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">ВОЙТИ</a>

                <div id="id01" class="modal">

                    <form class="modal-content animate" action="#" method="post" style="width: 40%;" >
                        <div class="imgcontainer">
                            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        </div>

                        <div class="container">

                            <x-jet-authentication-card>
                                <x-slot name="logo">

                                </x-slot>

                                <x-jet-validation-errors class="mb-4" />

                                @if (session('status'))
                                    <div class="mb-4 font-medium text-sm text-green-600">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <!---Routing to login page--->
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="mt-4">
                                        <!---Login input--->
                                        <x-jet-label for="email" value="{{ __('Логин') }}" />
                                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                                    </div>
                            <!---Password input--->
                            <div class="mt-4">
                                <x-jet-label for="password" value="{{ __('Пароль') }}" />
                                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                            </div>

                            <warning id="warn"></warning>

                                <label for="remember_me" class="flex items-center">
                                    <x-jet-checkbox id="remember_me" name="remember" />
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Запомнить меня') }}</span>
                                </label>
                                <div class="flex items-center justify-end mt-4">
                                    @if (Route::has('password.request'))
                                        <!---Routing to password request page--->
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                            {{ __('Забыли пароль?') }}
                                        </a>
                                    @endif

                                    <!---Sign in--->
                                    <x-jet-button class="ml-4">
                                        {{ __('Войти') }}
                                    </x-jet-button>
                                </div>

                                </form></x-jet-authentication-card></div>

                        <div class="container" style="background-color:#f1f1f1">
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="background-color: indianred;">Назад</button>
                        </div>
                        <span class="psw">Ещё нет аккаунта?<a href="/Regis" style="margin-left: 1%;">Создайте</a></span>
                    </form>
                </div>

            </nav>
        </div>
    </header>

    <div class="text_grid">
        <div class="row">
            <div class="col">


                "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
            </div>
            <div class="col">

                <!-- Trigger the Modal -->
                <img id="myImg" src="dota2-main.jpg" alt="Dota 2" style="width:100%;">

                <!-- The Modal -->
                <div id="myModalImg" class="modalImg">

                    <!-- The Close Button -->
                    <span class="closeImg">&times;</span>

                    <!-- Modal Content (The Image) -->
                    <img class="modalImg-content" id="img01">

                    <!-- Modal Caption (Image Text) -->
                    <div id="captionImg">Dota 2</div>
                </div>
            </div>
        </div>

        <div class="row">
            "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
        </div>

        <div class="row">
            "   Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
        </div>
    </div>

</div>


</div>

<div class="footer">
    <buttonA onclick="topFunction()" id="scrollTop" onmouseover="changeColor(1)" onmouseout="changeColor(0)">Top</buttonA>
    <div> <span>Developed by Tsoy Pavel</div>
</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="csgoJS.js"></script>
</body>



</html>
