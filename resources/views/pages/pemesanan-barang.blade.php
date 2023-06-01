@extends('layouts.sukses')

@section('title', 'Detail Travel')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-12 text-center my-4">
            <h2>Detail Pemesanan Barang</h2>
        </div>
        <div class="col-md-6 text-center">
            <div class="card">
                <div class="card-body"><img src="Frontend/images/bg-barang.png" width="80%" height="280px"
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
                    <td>Alamat Pengambilang Barang</td>
                    <td> : </td>
                    <td> {{$item->alamat_penjemputan}}</td>
                </tr>
                <tr>
                    <td>Alamat Pengantaran Barang</td>
                    <td> : </td>
                    <td> {{$item->alamat_pengantaran}}</td>
                </tr>
                <tr>
                    <td>Jenis Layanan</td>
                    <td> : </td>
                    <td>  Barang</td>
                </tr>
                <tr>
                    <td>Nama Barang</td>
                    <td> : </td>
                    <td>  {{$item->nama_barang}}</td>
                </tr>
                <tr>
                    <td>Jenis Barang</td>
                    <td> : </td>
                    <td>  {{$item->jenis_barang}}</td>
                </tr>
                <tr>
                    <td>Nama Penerima</td>
                    <td> : </td>
                    <td> {{$item->nama_penerima}}</td>
                </tr>
                <tr>
                    <td>Nomor Penerima</td>
                    <td> : </td>
                    <td> {{$item->nohp_penerima}}</td>
                </tr>
                
            </table>
            <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ route('submit-order-barang.store')}}" method="POST">
                    <input type="text" name="driver_id" value="{{$item->driver_id}}">
                    <input type="text" name="name_driver" value="{{$item->name_driver}}">
                    <input type="text" name="name_penumpang" value="{{$item->name_penumpang}}">
                    <input type="text" name="penumpang_id" value="{{$item->penumpang_id}}">
                    <input type="text" name="status" value="1">
                    <input type="text" name="services_barang_id" value="{{$item->id}}">
                @csrf
                <div class="d-grid gap-2 mt-3">
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