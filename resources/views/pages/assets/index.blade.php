@extends('layouts.app')

@section('title', 'Uploads Assets')

@section('content')
<!-- Section Content -->
<!-- Begin Page Content -->
<br><br><br><br><br><br>
<div class="container">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Assets</h1>
        <a href="{{ route('assets.create') }}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fa fa-plus fa-sm text-white-50"></i> Tambah Assets
        </a>
    </div>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table-bordered text-center" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Assets</th>
                            <th>Nama Owner</th>
                            <th>Kriteria</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th>Foto </th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $items)
                        <tr>
                            <td>{{ $items->id }}</td>
                            <td>{{ $items->nama_assets }}</td>
                            <td>{{ $items->owners}}</td>
                            <td>{{ $items->kriterias->jenis_kriteria }}</td>
                            <td>{{ $items->kategori }}</td>
                            <td>{{ $items->harga }}</td>
                            <td>{{ $items->deskripsi }}</td>
                            <td>
                             <img src="{{ Storage::url(explode(',', $items->foto)[0]) }}" alt="gambar" style="width: 150px" class="img-thumbnail">
                            </td>
                            <td>
                                <a href="{{ route('assets.edit', $items->id) }}" class="btn btn-info">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('assets.destroy', $items->id) }}" method="post"
                                    class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="12" class="text-center">Data Kosong</td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection