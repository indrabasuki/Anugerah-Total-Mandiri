@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <section class="h-100 ">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9 mt-5">
                    <div class="text-center my-5">
                        <img src="{{ asset('images/logo_atm.png') }}" alt="logo" width="100">
                    </div>
                    <div class="card shadow-lg mt-5">
                        <div class="card-body p-5">
                            <p class="m-0"
                               style="color: #1143D8; font-size: 32px;text-align:center; letter-spacing: 4px;">
                                <b>LOGIN</b>
                            </p>
                            @include('messages.alert')
                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="username" style="font-size: 16px;">{{ __('Username') }}</label>
                                    <input id="username" type="username"
                                           class="form-control @error('username') is-invalid @enderror" name="username"
                                           value="{{ old('username') }}" required autocomplete="username" autofocus
                                           placeholder="Username">

                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group mt-3 mb-4">
                                    <label for="">{{ __('Password') }}</label>
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="current-password" placeholder="******">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>

                                {{-- <div class="col-md-12"> {!! htmlFormSnippet() !!} </div> --}}

                                <button class="form-control mt-2"
                                        style="background-color:#3761DE;color: white;border-radius:4px;"
                                        type="submit"><b>{{ __('LOGIN') }}</b>
                                </button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
