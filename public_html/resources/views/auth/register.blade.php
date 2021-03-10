@extends('layouts.main')

@section('content')

                    <form class="reg_form"  method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="log_form-login">
                            <label for="login" >{{ __('Название фирмы') }}</label>

                            <div class="lgm">
                                <input id="login" type="text" class="log_form-input @error('login') is-invalid @enderror" name="login" value="{{ old('login') }}" required autocomplete="off" autofocus>

                                @error('login')
                                <span class="" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="log_form-login">
                            <label for="name" class="lgm">{{ __('Имя') }}</label>

                            <div class="lgm">
                                <input id="name" type="text" class="log_form-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="off" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="log_form-login">
                            <label for="tel_number"class="lgm" >{{ __('Телефон') }}</label>

                            <div class="lgm">
                                <input id="tel_number" type="text" class="log_form-input @error('tel_number') is-invalid @enderror" name="tel_number" value="{{ old('tel_number') }}" required autocomplete="off" autofocus>

                                @error('tel_number')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="log_form-login">
                            <label for="adress" class="lgm">{{ __('Адрес') }}</label>

                            <div class="lgm">
                                <input id="adress" type="text" class="log_form-input @error('adress') is-invalid @enderror" name="adress" value="{{ old('adress') }}" required autocomplete="off" autofocus>

                                @error('adress')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="log_form-login">
                            <label for="inn" class="lgm">{{ __('ИНН') }}</label>

                            <div class="lgm">
                                <input id="inn" type="text" class="log_form-input @error('inn') is-invalid @enderror" name="inn" value="{{ old('inn') }}" required autocomplete="off" autofocus>

                                @error('inn')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="log_form-login">
                            <label for="email" class="lgm">{{ __('Адрес электронной почты') }}</label>

                            <div class="lgm">
                                <input id="email" type="email" class="log_form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="log_form-login">
                            <label for="password" class="lgm">{{ __('Пароль') }}</label>

                            <div class="lgm">
                                <input id="password" type="password" class="log_form-input @error('password') is-invalid @enderror" name="password" required autocomplete="off">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="log_form-login">
                            <label for="password-confirm" class="lgm">{{ __('Повторите пароль') }}</label>

                            <div class="lgm">
                                <input id="password-confirm" type="password" class="log_form-input" name="password_confirmation" required autocomplete="off">
                            </div>
                        </div>


                            <div class="log_form-btn">
                                <button type="submit" class="log_form-btn-btn">
                                    {{ __('Зарегистрироваться') }}
                                </button>
                            </div>

                    </form>

@endsection
