<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>


<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-sm navbar-dark custom-header">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="" width="40px" height="40px"><br>
                    <span class="txt-logo">Doa +</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <nav class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        @if (Auth::check())
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('dashboard.index') }}">Dashboard</a>
                            </li>
                            <li class="nav-item logout mt-2" style="color: black">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')" class="text-decoration-none"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        {{ __('Sair') }}
                                    </x-dropdown-link>
                                </form>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="#">Como doar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contatos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Depoimentos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Entrar</a>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </nav>
    </header>

    <section>
        @yield('content')
    </section>

    <footer>

    </footer>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
