@extends('layouts.app')
    <!DOCTYPE html>
<html lang="pl-PL">
<body>
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h1>{{ __('Weryfikacja Adresu e-mail') }}</h1></div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('Link weryfikacyjny został wysłany na Twój adres e-mail.') }}
                            </div>
                        @endif

                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                        </form>
                    </div>
                    <div style="clear: both;"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
</body>
</html>

