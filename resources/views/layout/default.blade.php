@extends('layout.base')
@section('main')
    <navigation-drawer user-name="{{ session('userName') }}"></navigation-drawer>
    <v-app-bar app>
        <v-app-bar-title>{{ config('app.name') }}</v-app-bar-title>
        <template v-slot:append>
            <v-form action="{{ route('logout') }}" method="post">
                @csrf
                <v-btn type="submit" icon="mdi-logout"></v-btn>
            </v-form>
        </template>
    </v-app-bar>
    <v-main>
        <v-container fluid>
            @yield('contents')
        </v-container>
    </v-main>
@endsection
