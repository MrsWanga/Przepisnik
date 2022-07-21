<!DOCTYPE html>
<html lang="pl-PL">
@extends('layouts.app')
<body>
    @section('content')
            <div class="container">
            <div class="row justify-content-center">
                <div class="card">
                    <div class="card-header"><h1> {{ __('Logowanie') }}</h1>

                        <div id="right-panel">
                            <div class="option-right-panel">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">
                                        <img src="/Images/in.png" alt="" height="25px">
                                        Zarejestruj się
                                    </a>
                                @endif
                            </div>
                            <div class="option-right-panel">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Zapomniałeś hasła?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end"><p><b>{{ __('Email') }}</b></p></label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end"><p><b>{{ __('Hasło') }}</b></p></label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" >
                                        <label class="form-check-label" for="remember">
                                            <p>{{ __('Zapamiętaj mnie') }}</p>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <div class="log-in">
                                        <button type="submit">
                                            <b>
                                                {{ __('Zaloguj') }}
                                            </b>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div style="clear: both;"></div>
                </div>
            </div>
        </div>
    @endsection
</body>



