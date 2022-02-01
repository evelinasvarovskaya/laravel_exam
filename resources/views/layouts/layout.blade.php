<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Project</title>
    <link rel="stylesheet" href="{{ URL::asset("css/style.css") }}">
</head>
<body align="center">
    <nav class="navigation">
        <ul class="navigation_main">

            <li><a href="/" class="@main active @endmain navigation_link">Главная</a></li>
            @if(Auth::guest())
                <li><a href="/login"  class="@login active @endlogin navigation_link">Вход </a></li>
                <li><a href="/registration" class="@reg active @endreg navigation_link">Регистрация</a></li>
            @else
                <li><a href="/things" class="@things active @endthings navigation_link">Вещи</a></li>
                <li><a href="/places" class="@places active @endplaces navigation_link">Места</a></li>
                <li><a href="/uses" class="@uses active @enduses navigation_link">Использование</a></li>
                <li><a href="/logout" class="navigation_link">Выйти</a></li>
                <li>Ваш идентификатор: {{auth()->user()->id}}</li>
            @endif
        </ul>
        <br><br>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>

</html>
