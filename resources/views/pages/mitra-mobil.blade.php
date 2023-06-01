@extends('layouts.sukses')

@section('title', 'Go ACT')

@section('content')

<!-- Main -->
<main>

    <!-- section header -->
    <section class="section-details-header">
        <div class="container text-center">
            
        </div>
    </section>

    <!-- div pencarian Tampilan Baru-->
    <div class="container d-flex justify-content-center">
        <div class="form-pencarian "  style="border-radius:20px; width:80%;">
            <div class="section-title text-center pt-5" data-aos="fade-up">
                 <h1 style="font-weight:bold;">WELCOME</h1>
                 <h6>Find And Download All The Assets 2D And 3D</h6>
            </div>
            <form action="/layanan-mobil" method="GET" class="form-cari col-6 d-flex mx-auto pb-5 ">
                <input class="form-control text-center"  type="search" placeholder="Cari Assets"
                    name="search" value=""{{ request('search') }} aria-label="Search">
                <div class="d-grid gap-2 col-2 mx-auto">
                    <button class="btn btn-secondary btn-mobil" type="submit">Temukan</button>
                </div>
            </form>
        </div>
    </div>


    <!-- koleksi mobil -->
    
         <div id="team" class="layanan-mobil mb-5">
        <div class="container">
            <div class="section-title">
                <h2>Assets</h2>
                <p>Terbaru</p>
            </div>
            <div class="row">
               
                <div class="col-lg-3 col-md-6">
                    <div class="card card-mobil" height=>
                        <div class="pic"><img src="" class="card-img-top" style="height: 18rem;" alt="">
                        </div>
                        <div class="member-info">
                            <h4></h4>
                            <p><span class="rute-1"></span><span> - </span><span
                                    class="rute-2"></span>
                            </p>
                            <div class="detail-mobil mb-2">
                                <a href="" class="btn-detail-mobil">Lihat
                                    Detail</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   

</main>
<!-- Akhir Main -->

@endsection