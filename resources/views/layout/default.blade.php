<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.ts'])
</head>

<body>
    <div id="app" v-cloak>
        <nav class="navbar" style="border-bottom: 1px solid #ccc">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="{{ route('home') }}">
                        {{ config('app.name') }}
                    </a>
                </div>
                <div id="navbarMenu" class="navbar-menu">
                    <div class="navbar-end">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button
                                class="navbar-item is-size-5 button is-success is-inverted has-text-weight-semibold">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container">
            @yield('contents')
        </div>
    </div>
</body>

</html>
