@extends('layouts.admin')

@section('title')
    Transaksi
@endsection

@section('content')
<!-- Main -->
<!-- Product section-->
<section class="py-5">
    <div class="container-fluid">
    <div class="row">
        <div class="card-body">
            <center><h2>Status Transaksi Mobil Penumpang</h2> </center>
            <br>
            <div class="table-responsive">
                <table class="table-bordered text-center" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Penumpang</th>
                            <th>Alamat Penjemputan</th>
                            <th>Alamat pengantaran</th>
                            <th>Jumlah Penumpang</th>
                            <th>Nama Driver</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($item as $item)
                        <tr>
                            <td>{{ $item->name_penumpang }}</td>
                            <td>{{ $item->alamat_jemput }}</td>
                            <td>{{ $item->alamat_antar }}</td>
                            <td>{{ $item->jumlah_penumpang }}</td>
                            <td>{{ $item->name_driver }}</td>
                            <td>
                                @if ($item->status == 1)
                                    <span class="status-waiting">Menunggu Konfirmasi</span>
                                @elseif ($item->status == 2)
                                    <span class="status-in-progress">Dalam Perjalanan</span>
                                @elseif ($item->status == 3)
                                    <span class="status-completed">Selesai</span>
                                @endif
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-6">
                                        <form action="{{ route('update-transaksi.update', $item->orders_penumpang_id) }}" method="post"
                                        class="d-inline">
                                            <input type="hidden" name="id" value="{{ $item->orders_penumpang_id}}">
                                            <input type="hidden" name="penumpang_id" value="{{ $item->penumpang_id}}">
                                            <input type="hidden" name="driver_id" value="{{ $item->driver_id}}">
                                            <input type="hidden" name="services_penumpang_id" value="{{ $item->services_penumpang_id}}">
                                            <input type="hidden" name="status" value="2">
                                            <input type="hidden" name="name_driver" value="{{ $item->name_driver}}">
                                            <input type="hidden" name="name_penumpang" value="{{ $item->name_penumpang}}">
                                            @csrf
                                            @method('PUT') 
                                            <button class="btn btn-primary">
                                                Konfirmasi
                                            </button>
                                        </form>
                                    </div>
                                    <div class="col-md-6">
                                    <form action="{{  route('update-transaksi.update', $item->orders_penumpang_id) }}" method="post"
                                        class="d-inline">
                                        <input type="hidden" name="id" value="{{ $item->orders_penumpang_id}}">
                                        <input type="hidden" name="penumpang_id" value="{{ $item->penumpang_id}}">
                                        <input type="hidden" name="driver_id" value="{{ $item->driver_id}}">
                                        <input type="hidden" name="services_penumpang_id" value="{{ $item->services_penumpang_id}}">
                                        <input type="hidden" name="status" value="3">
                                        <input type="hidden" name="name_driver" value="{{ $item->name_driver}}">
                                        <input type="hidden" name="name_penumpang" value="{{ $item->name_penumpang}}">
                                        @csrf
                                        @method('PUT') 
                                        <button class="btn btn-danger">
                                            selesai
                                        </button>
                                    </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">Data Kosong</td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card-body">
            <center><h2>Status Pemesanan Mobil Barang</h2> </center>
            <br>
            <div class="table-responsive">
                <table class="table-bordered text-center" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Pengirim</th>
                            <th>Alamat Penjemputan</th>
                            <th>Alamat pengantaran</th>
                            <th>Jenis Barang</th>
                            <th>Nama Driver</th>
                            <th>Nama Barang</th>
                            <th>No Hp Penerima</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($item2 as $items)
                        <tr>
                            
                            <td>{{ $items->name_penumpang }}</td>
                            <td>{{ $items->alamat_jemput }}</td>
                            <td>{{ $items->alamat_antar }}</td>
                            <td>{{ $items->jenis_barang }}</td>
                            <td>{{ $items->name_driver }}</td>
                            <td>{{ $items->nama_barang }}</td>
                            <td>{{ $items->nohp_penerima }}</td>

                            <td>
                                @if ($items->status == 1)
                                    <span class="status-waiting">Menunggu Konfirmasi</span>
                                @elseif ($items->status == 2)
                                    <span class="status-in-progress">Dalam Perjalanan</span>
                                @elseif ($items->status == 3)
                                    <span class="status-completed">Selesai</span>
                                @endif
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-6">
                                        <form action="{{ route('update-transaksi-barang.update', $items->orders_barang_id) }}" method="post"
                                            class="d-inline">
                                            <input type="hidden" name="id" value="{{ $items->orders_barang_id}}">
                                            <input type="hidden" name="penumpang_id" value="{{ $items->penumpang_id}}">
                                            <input type="hidden" name="driver_id" value="{{ $items->driver_id}}">
                                            <input type="hidden" name="services_barang_id" value="{{ $items->services_barang_id}}">
                                            <input type="hidden" name="status" value="2">
                                            <input type="hidden" name="name_driver" value="{{ $items->name_driver}}">
                                            <input type="hidden" name="name_penumpang" value="{{ $items->name_penumpang}}">
                                            @csrf
                                            @method('PUT') 
                                            <button class="btn btn-primary">
                                                Konfirmasi
                                            </button>
                                        </form>
                                    </div>
                                    <div class="col-md-6">
                                        <form action="{{ route('update-transaksi-barang.update', $items->orders_barang_id) }}" method="post"
                                            class="d-inline">
                                            <input type="hidden" name="id" value="{{ $items->orders_barang_id}}">
                                            <input type="hidden" name="penumpang_id" value="{{ $items->penumpang_id}}">
                                            <input type="hidden" name="driver_id" value="{{ $items->driver_id}}">
                                            <input type="hidden" name="services_barang_id" value="{{ $items->services_barang_id}}">
                                            <input type="hidden" name="status" value="3">
                                            <input type="hidden" name="name_driver" value="{{ $items->name_driver}}">
                                            <input type="hidden" name="name_penumpang" value="{{ $items->name_penumpang}}">
                                            @csrf
                                            @method('PUT') 
                                            <button class="btn btn-danger">
                                                Selesai
                                            </button>
                                        </form>
                                    </div>
                                </div>

                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">Data Kosong</td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Related items section-->
{{-- <section>
    <div class="container px-4 px-lg-5">
        <div id="team" class="layanan-mobil mb-5">
            <div class="container">
                <div class="section-title">
                    <h2>layanan</h2>
                    <p>Temukan Mobil</p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <a href="http://">
                            <div class="card card-mobil">
                                <div class="pic"><img src="Frontend/images/driver.png" class="img-fluid" alt="">
                                </div>
                                <div class="member-info">
                                    <h4>Walter White</h4>
                                    <p><span class="rute-1">Bantaeng</span><span> - </span><span
                                            class="rute-2">Bantaeng</span></p>
                                    <div class="detail-mobil mb-2">
                                        <a href="#" class="btn-detail-mobil">Lihat Detail</i></a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- Akhir Main -->
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{ url('FrontEnd/libraries/xzoom/xzoom.css') }}" />
<style>
    .status-waiting {
    color: red;
}

.status-in-progress {
    color: blue;
}

.status-completed {
    color: green;
}
</style>