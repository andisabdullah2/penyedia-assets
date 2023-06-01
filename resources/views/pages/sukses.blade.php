@extends('layouts.sukses')

@section('title', 'Checkout Success')

@section('content')
<!-- Main -->
<main>
      <div class="section-success d-flex align-items-center">
        <div class="col text-center">
          <img src="{{ url ('FrontEnd/images/success.png') }}" alt="" />
          <h1>Yey! Success</h1>
          <p>
            Get the content and creative tools you need with an
            <br />
            All-in-One plan and your first month free
          </p>
          <a href="{{ route('home') }}" class="btn btn-home-page mt-3 px-5"
            >Home Page</a
          >
        </div>
      </div>
    </main>
<!-- Akhir Main -->
@endsection

