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
        <h1 class="h3 mb-0 text-gray-800">User</h1>
        <a href="{{ route('user-table.create') }}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fa fa-plus fa-sm text-white-50"></i> Tambah User
        </a>
    </div>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table-bordered text-center" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Nomor HP</th>
                            <th>Alamat</th>
                            <th>Roles</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $items)
                        <tr>
                            <td>{{ $items->id }}</td>
                            <td>{{ $items->name }}</td>
                            <td>{{ $items->username }}</td>
                            <td>{{ $items->email }}</td>
                            <td>{{ $items->no_hp }}</td>
                            <td>{{ $items->alamat }}</td>
                            <td>{{ $items->roles }}</td>
                            <td>
                                <a href="{{ route('user-table.edit', $items->id) }}" class="btn btn-info">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('user-table.destroy', $items->id) }}" method="post"
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
</div>
@endsection