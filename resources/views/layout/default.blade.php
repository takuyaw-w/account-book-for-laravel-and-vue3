@extends('layout.base')
@section('main')
    <v-app-bar app absolute>
        <v-app-bar-title>{{ config('app.name') }}</v-app-bar-title>

        {{-- <v-btn icon>
            <v-icon>mdi-cog-outline</v-icon>
        </v-btn> --}}

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
