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
        <section class="hero is-fullheight">
            <div class="hero-body">
                <div class="container has-text-centered">
                    @yield('main')
                </div>
            </div>
        </section>
    </div>
</body>

</html>
