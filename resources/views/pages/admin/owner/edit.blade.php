@extends('layouts.admin')

@section('title')
Owner
@endsection

@section('content')
<!-- Section Content -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Owner</h2>
      <p class="dashboard-subtitle">
        Edit "{{ $item->nama_owner }}" Owner
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
          <form action="{{ route('owner.update', $item->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Nama Owner</label>
                      <input type="text" class="form-control" name="nama_owner" required value="{{ $item->nama_owner}}"/>
                    </div>
                    <div class="form-group">
                      <label>Instagram</label>
                      <input type="text" class="form-control" name="instagram" required value="{{ $item->instagram}}"/>
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" class="form-control" name="email" required value="{{ $item->email}}"/>
                    </div>
                    <div class="form-group">
                      <label>Phone</label>
                      <input type="number" class="form-control" name="phone" required value="{{ $item->phone}}"/>
                    </div>
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