@extends('layouts.app')

@section('title', 'PNUP')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero">

<svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
            <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
        </defs>
        <g class="wave1">
            <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
        </g>
        <g class="wave2">
            <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
        </g>
        <g class="wave3">
            <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
        </g>
    </svg>


</section>
<!-- End Hero -->

<main id="main">

<br><br>
    <!-- div pencarian Tampilan Baru-->
    <div class="container d-flex justify-content-center">
        <div class="form-pencarian "  style="border-radius:20px; width:80%;">
            <div class="section-title text-center pt-5" data-aos="fade-up">
                 <h1 style="font-weight:bold;">WELCOME</h1>
                 <h6>Find And Download All The Assets 2D And 3D</h6>
            </div>
            <form action="{{ route('search') }}" method="GET" class="form-cari col-6 d-flex mx-auto pb-5 ">
                <input class="form-control text-center"  type="search" placeholder="Cari Assets"
                    name="search" value=""{{ request('search') }} aria-label="Search">
                <div class="d-grid gap-2 col-2 mx-auto">
                    <button class="btn btn-secondary btn-mobil" type="submit">Temukan</button>
                </div>
            </form>
        </div>
    </div>


    <!-- koleksi Assets -->
    @if ($items->count())
    <div id="team" class="layanan-mobil mb-5">
        <div class="container">
            <div class="section-title">
                <h2>Assets</h2>
                <p>Terbaru</p>
            </div>
            <div class="row">
                @php $counter = 0 @endphp
                @foreach ($items as $item)
                    @if ($counter < 16)
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-mobil" style="border-radius:20px;" height=>
                                <div class="pic">
                                    <img src="{{ Storage::url(explode(',', $item->foto)[0]) }}"  class="card-img-top" style="height: 18rem;" alt="">
                                </div>
                                <div class="member-info">
                                    <h4>{{ $item->nama_assets }}</h4>
                                    <p>
                                        <span class="rute-1">{{ $item->owners }}</span>
                                        <span> - </span>
                                        <span class="rute-2">{{ $item->kriterias->jenis_kriteria }}</span>
                                        <span> - </span>
                                        <span class="rute-2">{{ $item->kategori }}</span>
                                    </p>
                                    <div class="detail-mobil mb-2">
                                        <a href="{{ route('detail-assets', $item->id) }}" class="btn-detail-mobil">Lihat
                                            Detail</i></a>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                        @php $counter++ @endphp
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@else
    <p class="text-center fs-4">No Post Found.</p>    
@endif


</main><!-- End #main -->

@endsection