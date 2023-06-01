@extends('layouts.login')


@section('content')

<section class="login-container">
    <div class="container">
        <div class="row d-flex d-flex align-items-center justify-content-center">
            <div class="col-md-12 col-lg-5 d-md-block">

                <div class="card" style="background-color: #e7e5d5; border-radius: 1rem;">
                    <div class="card-body card-login p-4">
                        <img src="Frontend/images/pnup-logo.png" alt="" class="w-50 mb-4 mx-auto d-block" />

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Alamat Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="current-password" id="password" />
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <br>
                            <div class="d-grid gap-2 mt-2">
                                <button class="btn  btn-login-login"
                                    style="background-color: #FFDE00; border: 0; color: #0e0e16; font-weight: 700;"
                                    type="submit">Masuk</button>
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                            <p class="mb-5 pt-3" style="color: #0e0e16;">Belum Punya Akun? <a
                                    href="{{ route('register') }}" style="color: #121ec7;">Daftar Sekarang</a>
                            </p>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection