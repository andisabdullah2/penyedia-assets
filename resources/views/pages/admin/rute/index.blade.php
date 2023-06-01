@extends('layouts.admin')

@section('title')
    Rute Lokasi Dashboard
@endsection

@section('content')
<!-- Section Content -->
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Rute Lokasi</h1>
        <a href="{{ route('rute-driver.create') }}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fa fa-plus fa-sm text-white-50"></i> Tambah Rute Lokasi
        </a>
    </div>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table-bordered text-center" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Lokasi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $items)
                        <tr>
                            <td>{{ $items->id }}</td>
                            <td>{{ $items->rute_driver }}</td>
                            <td>
                                <a href="{{ route('rute-driver.edit', $items->id) }}" class="btn btn-info">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('rute-driver.destroy', $items->id) }}" method="post"
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
                            <td colspan="7" class="text-center">Data Kosong</td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

