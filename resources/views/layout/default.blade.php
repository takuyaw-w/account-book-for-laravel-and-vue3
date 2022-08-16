@extends('layout.base')
@section('main')
    <navigation-drawer user-name="{{ config('app.name') }}"></navigation-drawer>
    <v-app-bar app>
        <v-app-bar-title>{{ config('app.name') }}</v-app-bar-title>
    </v-app-bar>
    <v-main>
        <v-container fluid>
            @yield('contents')
        </v-container>
    </v-main>
@endsection
