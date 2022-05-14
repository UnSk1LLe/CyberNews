<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Новости СНГ киберспорта</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="ST.css" rel="stylesheet" type="text/css">
    <link href="valCSS.css" rel="stylesheet" type="text/css">
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

                            <label for="uname"><b>Логин</b></label>
                            <input type="text" maxlength="20" placeholder="Введите имя пользователя" name="uname" required>

                            <label for="psw"><b>Пароль</b></label>
                            <input type="password" maxlength="25" id="password" placeholder="Введите пароль" name="psw" required>
                            <warning id="warn"></warning>

                            <button type="submit" style="background-color: blue">Войти</button>
                            <label>
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Запомнить меня
                                </label>
                                <span class="psw"><a href="#" style="margin-left: 280px;">Забыли пароль?</a></span>
                            </label>
                        </div>

                        <div class="container" style="background-color:#f1f1f1">
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="background-color: indianred;">Назад</button>
                        </div>
                        <span class="psw">Ещё нет аккаунта?<a href="/Regis" style="margin-left: 1%;">Создайте</a></span>
                    </form>
                </div>

            </nav>
        </div>
    </header>

    <c class="textcontent">
        <h2>История игры VALORANT</h2>
        <h2>Самые важные даты с момента выхода игры</h2>
    </c>
    <mgrid class="timelineGrid" id="tlgrid">
        <col1>

            <div class="contentGrid">
                <img src="val-anounce.jpg" class="imageTL">
            </div>
            <div class="contentGrid">
                2020 7 Апреля: Начало закрытого Бета-теста игры.
            </div>
            <div class="contentGrid">
                <img src="val-beta-finish.jpg" class="imageTL"></img>
            </div>

            <div class="contentGrid">
                2020 4 Августа: Добавление нового агента Killjoy(Sentinal).
            </div>
            <div>

            </div>
            <div class="contentGrid">
                <img src="val-kayo.png" class="imageTL"></img>
            </div>

            <div class="contentGrid">
                2021 16 Ноября: Добавление нового агента Chamber(Sentinal).
            </div>
            <div>

            </div>
            <div class="contentGrid">
                <img src="val-neon.jpg" class="imageTL"></img>
            </div>

        </col1>
        <col2>
            <div class="timeline" id="tline"></div>
            <div class="timelinedots" id="tldots">
                <tldot>•</tldot>
                <tldot>•</tldot>
                <tldot>•</tldot>
                <tldot>•</tldot>
                <tldot>•</tldot>
                <tldot>•</tldot>
                <tldot>•</tldot>
            </div>
            <div class="emptyBox"></div>

        </col2>

        <col3>
            <div class="contentGrid">
                2019 официальный анонс игры
            </div>

            <div class="contentGrid">
                <img src="val-beta.jpg" class="imageTL"></img>
            </div>

            <div class="contentGrid">
                2020 2 Июня: Окончание Бета-теста и официальный запуск игры.
            </div>

            <div class="contentGrid">
                <img src="val-killjoy.jpg" class="imageTL"></img>
            </div>
            <div>

            </div>
            <div class="contentGrid">
                2020 4 Августа: Добавление нового агента KAY-O(Initiator).
            </div>

            <div class="contentGrid">
                <img src="val-chamber.png" class="imageTL"></img>
            </div>

            <div class="contentGrid">
                2022 11 Января: Добавление нового агента Neon(Duelist).
            </div>
        </col3>
    </mgrid>


</div>


</div>

<div class="footer">
    <buttonA onclick="topFunction()" id="scrollTop" onmouseover="changeColor(1)" onmouseout="changeColor(0)">Top</buttonA>
    <div> <span>Developed by Tsoy Pavel</div>
</div>

</div>

<script src="jQuery-3.6.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="valJS.js"></script>
</body>



</html>
