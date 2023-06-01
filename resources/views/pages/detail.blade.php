@extends('layouts.app')

@section('title', 'Detail Assets')

@section('content')
<!-- Main -->

<!-- Product section-->
<div class="super_container">
	<div class="container single_product_container">
        <div class="container d-flex justify-content-center">
            <div class="form-pencarian-detail "  style="border-radius:20px; width:80%;">
                <div class="section-title text-center pt-3" data-aos="fade-up">
                    <h1 style="font-weight:bold;"></h1>
                </div>
                <form action="{{ route('search') }}" method="GET" class="form-cari col-6 d-flex mx-auto pb-3 ">
                    <input class="form-control text-center"  type="search" placeholder="Cari Assets"
                        name="search" value=""{{ request('search') }} aria-label="Search">
                        <span>&nbsp; </span>
                    <div class="d-grid gap-2 col-2 mx-auto">
                        <button class="btn btn-secondary btn-mobil" type="submit">Temukan</button>
                    </div>
                </form>
            </div>
        </div>
		<div class="row">
			<div class="col-lg-7">
				<div class="single_product_pics">
					<div class="row">
						<div class="col-lg-3 thumbnails_col order-lg-1 order-2">
							<div class="single_product_thumbnails">
								<ul>
                                    @foreach(array_slice(explode(',', $item->foto), 0, 4) as $foto)
                                    <li><img src="{{ Storage::url($foto) }}" alt="" data-image="{{ Storage::url($foto) }}"></li>

                                    @endforeach

								</ul>
							</div>
						</div>
						<div class="col-lg-9 image_col order-lg-2 order-1">
							<div class="single_product_image">
                                @foreach(array_slice(explode(',', $item->foto), 0, -1) as $foto)
								<div class="single_product_image_background" style="background-image:url({{ Storage::url($foto) }}"></div>
                                @endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="product_details">
					<div class="product_details_title">
						<h2>{{ $item->nama_assets }}</h2>
						<p>Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut...</p>
					</div>

					<div class="free_delivery d-flex flex-row align-items-center justify-content-center" style="background: {{ $item->kriterias->jenis_kriteria === 'FREE' ? 'green' : 'red' }};">
                        <span>{{ $item->kriterias->jenis_kriteria }}</span>
                    </div>


                    <br>
                    <div class="product_price" style="color: {{ $item->harga == 0 ? 'green' : 'inherit' }}">Rp.{{ $item->harga }}</div>

					<!-- <ul class="star_rating">
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
					</ul> -->
					<div class="product_color">
						<span>By : {{$item->owners->nama_owner}}</span>
					</div>
                    <div class="quantity">
                        @if ($item->harga == 0)
                            <div class="green_button add_to_cart_button"><a href="#">Download</a></div>
                        @else
                            <div class="red_button add_to_cart_button"><a href="#">Buy For Download</a></div>
                        @endif
                    </div>
				</div>
			</div>
		</div>
        @if ($items->count())
    <div id="team" class="layanan-mobil mb-5">
        <div class="container">
            <div class="section-title">
                <h2>Assets</h2>
                <p>Terkait</p>
                <br>
            </div>
            <div class="row">
                @php $counter = 0 @endphp
                @foreach ($items as $item)
                    @if ($counter < 4)
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-mobil" style="border-radius:20px;" height=>
                                <div class="pic">
                                    <img src="{{ Storage::url(explode(',', $item->foto)[0]) }}"  class="card-img-top" style="height: 18rem;" alt="">
                                </div>
                                <div class="member-info">
                                    <h4>{{ $item->nama_assets }}</h4>
                                    <p>
                                        <span class="rute-1">{{ $item->owners->nama_owner }}</span>
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
	</div>

</div>

<!-- Akhir Main -->
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{ url('FrontEnd/libraries/xzoom/xzoom.css') }}" />