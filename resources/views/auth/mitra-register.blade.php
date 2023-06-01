    @extends('layouts.login')

@section('content')
<section class="login-container">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-12 col-md-6">
                <img src="Frontend/images/bg-login.png" class="img-fluid w-70 d-sm-flex" alt="Phone image">
            </div>
            <div class="col-md-6 col-lg-5 d-md-block">
                <div class="card" style="background-color: #e7e5d5; border-radius: 1rem;">
                    <div class="card-body card-login p-4">
                        <img src="Frontend/images/logo.png" alt="" class="w-50 mb-4 mx-auto d-block" />

                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama Lengkap</label>
                                <input type="name" class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="username" class="form-control" @error('username') is-invalid @enderror"
                                    name="username" value="{{ old('username') }}" required autocomplete="username"
                                    autofocus>

                                @error('username')
                                <span class="invalid-feedback" role="alert">username
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">email
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="no_hp">Nomor HP</label>
                                <input type="text" class="form-control @error('no_hp') is-invalid @enderror"
                                    name="no_hp" value="{{ old('no_hp') }}" required autocomplete="no_hp" autofocus>

                                @error('no_hp')
                                <span class="invalid-feedback" role="alert">no_hp
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                    name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus>

                                @error('alamat')
                                <span class="invalid-feedback" role="alert">alamat
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password-confirm">Konfirmasi Password</label>
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="d-grid gap-2 mt-2">
                                <button class="btn btn-danger btn-login-login"
                                    style="background-color: #FFDE00; border: 0; color: #0e0e16; font-weight: 700;"
                                    type="submit">Daftar</button>
                            </div>
                            <p class="mb-5 pt-3" style="color: #0e0e16;">SudahPunya Akun? <a href="{{ route('login') }}"
                                    style="color: #121ec7;">Masuk Sekarang</a></p>
                            <a href="#!" class="small text-muted">Terms of use.</a>
                            <a href="#!" class="small text-muted">Privacy policy</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection