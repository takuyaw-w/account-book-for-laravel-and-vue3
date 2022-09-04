@extends('layout.base')
@section('main')
    <div class="column is-4 is-offset-4">
        <h3 class="title has-text-black">Sign Up</h3>
        <hr class="login-hr">
        <div class="box">
            <form action="{{ route('sign_up') }}" method="post">
                @csrf
                <div class="field">
                    <div class="control">
                        <input class="input is-large" name="name" value="{{ old('name') }}" type="text"
                            placeholder="Your Name" autofocus="">
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <input class="input is-large" name="email" value="{{ old('email') }}" type="email"
                            placeholder="Your Email" autofocus="">
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <input class="input is-large" name="password" type="password" placeholder="Your Password">
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <input class="input is-large" name="password_confirmation" type="password"
                            placeholder="Password Confirm">
                    </div>
                </div>

                <button class="button is-block is-info is-large is-fullwidth">Sign Up <i class="fa fa-sign-in"
                        aria-hidden="true"></i></button>
            </form>
        </div>
        <p class="has-text-grey">
            <a href="{{ route('login') }}">Return</a>
        </p>
    </div>
@endsection
