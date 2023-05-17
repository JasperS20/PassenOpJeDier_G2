<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://kit.fontawesome.com/a8715871d0.js" crossorigin="anonymous" defer></script>
</head>
<body>
    <section class="dashboard">
        <nav>
            <ul>
                <a class="logo" href="{{ route('dashboard.index') }}"><img src="/img/logo.png" style="height: 50px;"></a>
                @if(Auth::check())
                    <li class="logo">
                        <form method="POST" action="/logout">
                            @csrf
                            <button class="logout-btn" type="submit">
                                <i class="fa-solid fa-door-closed"></i> Logout
                            </button>
                        </form>
                    </li>
                    <li class="logo"><a href="{{ route('account-view') }}">Mijn Account</a></li>
                    <li class="logo"><a href="{{ route('diensten') }}">Mijn Diensten</a></li>
                    <li class="logo"><a href="{{ route('advertenties') }}">Mijn Advertenties</a></li>
                @endif
                @if(!Auth::check())
                    <li class="logo"><a href="{{ route('login') }}">Inloggen</a></li>
                    <li class="logo"><a href="{{ route('registratie') }}">Registreren</a></li>
                @endif
            </ul>
        </nav>

        <!-- additional navbar -->
        @yield('additional-navbar')

        <!-- content -->
        @yield('content')

    </section>
    <footer>
        <x-flash-message />
    </footer>
</body>
</html>