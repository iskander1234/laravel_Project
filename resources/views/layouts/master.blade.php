<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Админка: @yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('index')}}">Интернет Магазин</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li ><a href="{{route('index')}}">Все товары</a></li>
                <li ><a href="{{route('categories')}}">Категории</a>
                </li>
                <li ><a href="{{route('basket')}}">В корзину</a></li>
                <li><a href="{{route('index')}}">Сбросить проект в начальное состояние</a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                @guest
                    <li><a href="{{route('login')}}">Панель администраци </a></li>
                @endguest

                @auth
                    <li><a href="{{route('home')}}">Панель администраци </a></li>
                     <li><a href="{{'logout'}}">Выйти</a></li>
                @endauth
            </ul>

        </div>
    </div>
</nav>

<div class="container">
    <div class="starter-template">
        @if(session()->has('success'))
            <p class="alert alert-success">{{session()->get('success')}}</p>
        @endif

        @if(session()->has('warning'))
            <p class="alert alert-warning">{{session()->get('warning')}}</p>
        @endif
        @yield('content')
    </div>
</div>
</body>
</html>