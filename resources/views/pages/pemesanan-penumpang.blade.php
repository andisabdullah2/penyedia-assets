@extends('layouts.sukses')

@section('title', 'Detail Travel')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-12 text-center my-4">
            <h2>Detail Pemesanan Penumpang</h2>
        </div>
        <div class="col-md-6 text-center">
            <div class="card">
                <div class="card-body"><img src="Frontend/images/bg-penumpang.png" width="90%" height="280px"
                        alt="Phone image">
                </div>

            </div>

        </div>
        <div class="col-md-6">
            <div class="card "></div>
            <table class="table table-borderless">
                <tr>
                    <td>Nama </td>
                    <td> : </td>
                    <td> {{ Auth::user()->name }}</td>
                </tr>
                <tr>
                    <td>Nomor HP </td>
                    <td> : </td>
                    <td> {{ Auth::user()->no_hp }}</td>
                </tr>
                <tr>
                    <td>Alamat Penjemputan</td>
                    <td> : </td>
                    <td>{{$items->alamat_penjemputan}}</td>
                </tr>
                <tr>
                    <td>Alamat Pengantaran</td>
                    <td> : </td>
                    <td>{{$items->alamat_pengantaran}}</td>
                </tr>
                <tr>
                    <td>Jenis Layanan</td>
                    <td> : </td>
                    <td>Penumpang</td>
                </tr>
                {{-- <tr>
                    <td>Rute</td>
                    <td> : </td>
                    <td> $Lokasi - $Tujuan</td>
                </tr>
                <tr>
                    <td>Nama Driver</td>
                    <td> : </td>
                    <td> Diisi nama driver</td>
                </tr> --}}
            </table>
            <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ route('submit-order-penumpang.store')}}" method="POST">
                @csrf
                <div class="d-grid gap-2 mt-3">
                    <input type="hidden" name="driver_id" value="{{$items->driver_id}}">
                    <input type="hidden" name="name_driver" value="{{$items->name_driver}}">
                    <input type="hidden" name="name_penumpang" value="{{$items->name_penumpang}}">
                    <input type="hidden" name="penumpang_id" value="{{$items->penumpang_id}}">
                    <input type="hidden" name="status" value="1">
                    <input type="hidden" name="services_penumpang_id" value="{{$items->id}}">
                    <button class="btn btn-danger btn-login-login"
                        style="background-color: #FFDE00; color: #011B3E;border: 1px solid #011B3E;"
                        type="submit">Selesai</button>
                </div>
            </form>
            <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url()->previous() }}" method="GET">
                @csrf
                <div class="d-grid gap-2 mt-3">
                    <button class="btn btn-danger btn-login-login"
                        style="background-color: #011b30; color: #ffffff ;border: 1px solid #FFDE00;"
                        type="submit">Batalkan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

