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
        Assets
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
          <form action="{{ route('assets.update', $item->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card">
              <div class="card-body">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="nama_assets">Nama Assets</label>
                    <input type="text" class="form-control" name="nama_assets"  value="{{$item->nama_assets}}">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="owners_id">Nama Owner</label>
                    <div class="form-group">
                      <label for="owners">Nama Owner</label>
                      <input type="text" class="form-control" name="owners" value="{{$item->owners}}">
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="kriterias_id">Kriteria</label>
                    <select name="kriterias_id" required class="form-control">
                      <option value="{{ $item->kriterias_id }}">{{$item->kriteria->jenis_kriteria}}</option>
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
                      <option value="{{$item->kategori}}">{{$item->kategori}}</option>
                      <option value="2D">2D</option>
                      <option value="3D">3D</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="harga">harga</label>
                    <input type="number" class="form-control" name="harga" value="{{$item->harga}}">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="foto">Image</label>
                    <input type="file" class="form-control" name="foto[]" value="{{$item->foto}}" multiple>
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