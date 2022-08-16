@extends('layout.base')
@section('main')
    <v-container fluid class="fill-height">
        @error('AuthError')
            <v-alert type="error">{{ $message }}</v-alert>
        @enderror
        <v-row justify="center" align="center">
            <v-col align="center" cols="12">
                <v-card border width="600" class="mt-12 pb-4">
                    <v-form action="{{ route('sign_in') }}" method="post">
                        @csrf
                        <v-card-title color="primary">
                            <div class="text-center">{{ config('app.name') }}</div>
                            <v-divider class="my-4"></v-divider>
                        </v-card-title>
                        <v-card-text>
                            <v-text-field
                                name="email"
                                variant="outlined"
                                prepend-icon="mdi-email"
                                label="email"
                                placeholder="example@example.com"
                                @error('email')
                                    error-messages="{{ $message }}"
                                @enderror
                            ></v-text-field>
                            <v-text-field
                                name="password"
                                variant="outlined"
                                prepend-icon="mdi-lock"
                                label="password"
                                type="password"
                                @error('password')
                                    error-messages="{{ $message }}"
                                @enderror
                            ></v-text-field>
                        </v-card-text>
                        <v-card-actions>
                            <v-btn type="submit" variant="elevated" block color="primary" size="large">
                                ログイン
                            </v-btn>
                        </v-card-actions>
                    </v-form>
                    <v-divider class="my-4"></v-divider>
                    <v-card-actions>
                        <v-btn variant="elevated" href="https://google.com" block color="secondary" size="large">
                            新規登録
                        </v-btn>
                    </v-card-actions>
                </v-card>
            </v-col>
        </v-row>
    </v-container>
@endsection
