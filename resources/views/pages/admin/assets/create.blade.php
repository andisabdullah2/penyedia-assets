@extends('layouts.admin')

@section('title')
Assets
@endsection

@section('content')
<!-- Section Content -->
<div class="section-content section-dashboard-home" data-aos="fade-up">

  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Assets</h2>
      <p class="dashboard-subtitle">
        Tambah Assets
      </p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
          <form action="{{ route('assets.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card">
              <div class="card-body">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="nama_assets">Nama Assets</label>
                    <input type="text" class="form-control" name="nama_assets">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="owners">Nama Owner</label>
                    <input type="text" class="form-control" name="owners">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="kriterias_id">Kriteria</label>
                    <select name="kriterias_id" required class="form-control">
                      <option value="">Pilih Kriteria</option>
                      @foreach ($kriteria as $kriteria)
                      <option value="{{ $kriteria->id }}">
                        {{ $kriteria->jenis_kriteria }}
                      </option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select name="kategori" required class="form-control">
                      <option value="">Pilih Kategori</option>
                      <option value="2D">2D</option>
                      <option value="3D">3D</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="harga">harga</label>
                    <input type="number" class="form-control" name="harga">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="harga">Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="foto">Image</label>
                    <input type="file" class="form-control" name="foto[]" multiple>
                  </div>
                </div>

                <div class="row">
                  <div class="col text-right">
                    <button type="submit" class="btn btn-success px-5">
                      Save Now
                    </button>
                  </div>
                </div>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

