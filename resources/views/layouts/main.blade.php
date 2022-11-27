<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Ticketoria</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/x-icon" href="{{asset('images/icon.png')}}">
    <!-- SCRIPTS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>
<body background="{{asset('images/pattern.jpg')}}">

<!--NAV-->
<nav class="navbar navbar-expand-lg navbar-light bg-light bg-gradient sticky-top border-bottom border-dark font-monospace">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('tickets.index')}}">
            <img src="{{asset('images/icon.png')}}" width="30" height="30" class="d-inline-block align-top" alt="Icon">
            Ticketoria</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('tickets.index')}}">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('tickets.reserve')}}">Резервирование</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="true">
                        О нас
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('tickets.about')}}">FAQ</a></li>
                        <li><a class="dropdown-item" href="{{route('tickets.contacts')}}">Контакты</a></li>
                    </ul>
                </li>
                @if(!Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="/login">Войти</a>
                </li>
                @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="true">
                        {{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        @if(Auth::user()->role == 'admin')
                        <li><a class="dropdown-item" href="{{route('tickets.admin')}}">Админ</a></li>
                        @endif
                        <li><a class="dropdown-item" href="{{route('tickets.lk')}}">Личный кабинет</a></li>
                        <li><a class="dropdown-item" href="{{route('tickets.cart')}}">Корзина</a></li>
                        <li><a class="dropdown-item" href="{{route('tickets.logout')}}">Выйти</a></li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<!--MAIN-->
@yield('content')

<!--FOOTER-->
<footer class="card-footer border-top border-dark bg-light bg-gradient">
    <div class="d-flex flex-row justify-content-between">
        <div class="m-auto">
            <a class="text-black" style="text-decoration: none" href="https://github.com/1499maxawergy">
                <img src="{{asset('images/github.png')}}" width="30" height="30" class="d-inline-block align-top" alt="Github icon">
                ГитХаб
            </a>
        </div>
        <div class="m-auto">
            <a class="text-black" style="text-decoration: none" href="https://t.me/maxawergy">
                <img src="{{asset('images/tg-icon.png')}}" width="30" height="30" class="d-inline-block align-top" alt="Telegram icon">
                Телеграм
            </a>
        </div>
        <div class="m-auto">
            <a class="text-black" style="text-decoration: none" href="https://vk.com/maxawergy">
                <img src="{{asset('images/vk-icon.png')}}" width="30" height="30" class="d-inline-block align-top" alt="VK icon">
                Вконтакте
            </a>
        </div>
    </div>
</footer>

</body>
</html>
