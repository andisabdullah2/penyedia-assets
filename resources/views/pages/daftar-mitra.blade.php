@extends('layouts.login')

@section('title')
Daftar Mitra
@endsection

@section('content')
<section class="login-container">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-12 col-md-6">
                <img src="Frontend/images/bg-login.png" class="img-fluid w-70 d-sm-flex" alt="Phone image">
            </div>
            <div class="col-md-6 col-lg-5 d-md-block">
                <div class="card" style="background-color: #e7e5d5; border-radius: 1rem;">
                    <div class="card-body card-login p-4"><a href="{{ route('home') }}"><img
                                src="Frontend/images/logo.png" alt="" class="w-50 mb-4 mx-auto d-block" /></a>

                        <form action="{{ url('submit-regist-mitra') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="users_id">User</label>
                                <select name="users_id" required
                                    class="form-control @error('users_id') is-invalid @enderror" required unique
                                    autocomplete="users_id" autofocus>
                                    <option value="{{ Auth::user()->id }}">{{ Auth::user()->name }}</option>
                                    {{-- @foreach ($user as $user)
                                    <option value="{{ $user->id }}">
                                        {{ $user->name }}
                                    </option>
                                    @endforeach --}}
                                </select>
                                @error('users_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="lokasi_rutes_id">Lokasi Rute</label>
                                <select name="lokasi_rutes_id" required class="form-control">
                                    <option value="">Pilih Lokasi Rute</option>
                                    @foreach ($lokasi_rute as $lokasi_rute)
                                    <option value="{{ $lokasi_rute->id }}">
                                        {{ $lokasi_rute->lokasi }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tujuan_rutes_id">Tujuan Rute</label>
                                <select name="tujuan_rutes_id" required class="form-control">
                                    <option value="">Pilih Tujuan Rute</option>
                                    @foreach ($tujuan_rute as $tujuan_rute)
                                    <option value="{{ $tujuan_rute->id }}">
                                        {{ $tujuan_rute->tujuan }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="waktu_berangkat">Jam Berangkat</label>
                                <input type="time" class="form-control" name="waktu_berangkat">
                            </div>
                            <div class="form-group">
                                <label for="waktu_pulang">Jam Pulang</label>
                                <input type="time" class="form-control" name="waktu_pulang">
                            </div>
                            <div class="form-group">
                                <label for="image_profil">Image Profil</label>
                                <input type="file" class="form-control" name="image_profil">
                            </div>
                            <div class="form-group">
                                <label for="image_ktp">Image KTP</label>
                                <input type="file" class="form-control" name="image_ktp">
                            </div>
                            <div class="form-group">
                                <label for="image_sim">Image SIM</label>
                                <input type="file" class="form-control" name="image_sim">
                            </div>
                            <div class="form-group">
                                <label for="image_stnk">Image STNK</label>
                                <input type="file" class="form-control" name="image_stnk">
                            </div>
                            <div class="d-grid gap-2 mt-2">
                                <button class="btn btn-danger btn-login-login"
                                    style="background-color: #FFDE00; border: 0; color: #0e0e16; font-weight: 700;"
                                    type="submit">Daftar Sekarang</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section Content -->
@endsection