@extends('layouts.main')

@section('content')


                    <form class="log_form" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="log_form-login">
                            <label for="login" >{{ __('Адрес электронной почты:') }}</label>

                            <div class="lgm">
                                <input id="email" type="email" class="log_form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off">

                                @error('email')
                                    <span class="" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="log_form-password">
                            <label for="password" class="lgm">{{ __('Пароль:') }}</label>

                            <div class="lgm">
                                <input id="password" type="password" class="log_form-input @error('password') is-invalid @enderror" name="password" required autocomplete="off">

                                @error('password')
                                    <span class="" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="log_form-btn">

                                <button type="submit" class="log_form-btn-btn">
                                    {{ __('Войти') }}
                                </button>

                        </div>

                        <div class="log_form-forgot">
                            @if (Route::has('password.request'))
                                <a class="" href="{{ route('password.request') }}">
                                    {{ __('Забыли пароль?') }}
                                </a>
                            @endif
                        </div>
                    </form>


@endsection
