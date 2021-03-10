

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Yanone+Kaffeesatz:500&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('public/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/katalog.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/welcome.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/basket.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/about.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/account.css') }}" rel="stylesheet">

</head>
<body>

<header>
    <div class="title">
        <div class="title-logo">
            <a href="{{ url('/') }}" class="h1">Кайрос - К</a>
            <div class="logo-tel_number">+7 (4942) 667766</div>
        </div>
        <div class="title-user_status">
            @if (Route::has('login'))
                <div class="user_status">
                    @auth



                                <div class="user_status-ok" aria-labelledby="navbarDropdown">

                                    <ul class="topmenu">

                                        <li><a id="navbarDropdown" class="ok-name" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>
                                            <ul class="submenu">
                                                <li><a class="ok-acc" href="{{ route('account') }}">
                                                        {{ __('Личный кабинет') }}
                                                    </a></li>
                                                <li><a class="ok-aut" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                        {{ __('Выйти') }}
                                                    </a></li>
                                            </ul>
                                        </li>

                                    </ul>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>


                    @else
                        <a href="{{ route('login') }}">Войти</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Регистрация</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
    <div class="men_icon" >
        <div class="m_ic">&#9776</div>
        <nav>
            <a href="{{ url('/') }}">Главная</a>
            <a href="{{ route('katalog') }}">Каталог</a>
            <a href="{{ route('bascet') }}">Корзина</a>
            <a href="{{ route('about') }}">О нас</a>
        </nav>
    </div>

    <hr>
</header>
<main>
    <div class="container">
        @yield('content')
    </div>
</main>

<hr>

<footer>
    <div class="contacts">
        <div class="contacts-number">
            <p>телефон:&nbsp;</p>      <p>&nbsp; 8-999-900-34-23</p>
        </div>
        <div class="contacts-email">
           <p>email:&nbsp;</p>                 <p> kairos@list.ru</p>
        </div>
    </div>
    <div class="rights">
        © ООО «Кайрос-к», 2019-2020
    </div>
</footer>

<script src="{{ asset('public/js/Modal.js') }}"></script>
<script src="{{ asset('public/js/Form.js') }}"></script>
</body>
</html>



