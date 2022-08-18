@extends('layout.base')
@section('main')
    <v-container fluid class="fill-height">
        @error('AuthError')
            <v-alert type="error">{{ $message }}</v-alert>
        @enderror
        <v-row justify="center" align="center">
            <v-col align="center" cols="12">
                <v-card border width="600" class="mt-12 pb-4">
                    <v-form action="{{ route('sign_up') }}" method="post">
                        @csrf
                        <v-card-title color="primary">
                            <div class="text-center">Sign Up</div>
                            <v-divider class="my-4"></v-divider>
                        </v-card-title>
                        <v-card-text>
                            <v-text-field
                                name="name"
                                variant="outlined"
                                label="Name"
                                placeholder="Your name..."
                                prepend-icon="mdi-account"
                                @error('name')
                                    error-messages="{{ $message }}"
                                @enderror
                            ></v-text-field>
                            <v-text-field
                                name="email"
                                variant="outlined"
                                label="Email"
                                placeholder="example@example.com"
                                prepend-icon="mdi-email"
                                @error('email')
                                    error-messages="{{ $message }}"
                                @enderror
                            ></v-text-field>
                            <v-text-field
                                name="password"
                                variant="outlined"
                                label="Password"
                                type="password"
                                prepend-icon="mdi-key"
                                @error('password')
                                    error-messages="{{ $message }}"
                                @enderror
                            ></v-text-field>
                            <v-text-field
                                name="password_confirmation"
                                variant="outlined"
                                label="Password Confirm"
                                type="password"
                                prepend-icon="mdi-key"
                                @error('password_confirmation')
                                    error-messages="{{ $message }}"
                                @enderror
                            ></v-text-field>
                        </v-card-text>
                        <v-card-actions>
                            <v-btn type="submit" variant="elevated" block color="primary" size="large">
                                登録
                            </v-btn>
                        </v-card-actions>
                    </v-form>
                    <v-divider class="my-4"></v-divider>
                    <v-card-actions>
                        <v-btn variant="elevated" href="{{ route('login') }}" block color="secondary" size="large">
                            戻る
                        </v-btn>
                    </v-card-actions>
                </v-card>
            </v-col>
        </v-row>
    </v-container>
@endsection
