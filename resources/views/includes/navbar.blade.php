<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            <nav id="navbar" class="navbar">
                <ul class="nav">
                    <li><a href="{{ route('home') }}" class="logo me-auto"><img src="{{ url('Frontend/images/logo.png') }}" alt="" class="img-fluid"></a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">FREE</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('searchdropdown', ['jenis_kriteria' => 'free', 'kategori' => '2D']) }}">2D</a>
                            <a class="dropdown-item" href="{{ route('searchdropdown', ['jenis_kriteria' => 'free', 'kategori' => '3D']) }}">3D</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">PREMIUM</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('searchdropdown', ['jenis_kriteria' => 'premium', 'kategori' => '2D']) }}">2D</a>
                            <a class="dropdown-item" href="{{ route('searchdropdown', ['jenis_kriteria' => 'premium', 'kategori' => '3D']) }}">3D</a>
                        </div>
                    </li>
                </ul>
            </nav>


        </div>

        <nav id="navbar" class="navbar">
            <ul class="nav">
                <li><a class="nav-link scrollto active" href="{{ route('home') }}">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>

            </ul>
            @guest
                {{-- Mobile Button --}}
                <form class="form-inline d-sm-block d-md-none">
                    <button class="btn btn-login my-2 my-sm-0" type="button"
                        onClick="event.preventDefault(); window.location = '{{ url('login') }}';">Masuk</button>
                </form>
                {{-- dekstop button --}}
                <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                    <button class="btn btn-login mx-3 my-sm-0" type="button"
                        onClick="event.preventDefault(); window.location = '{{ url('login') }}';">Masuk</button>
                </form>
            @endguest

            @auth 
                @if(\Auth::user()->roles =='USER')
                {{-- Mobile Button --}}
                
                <form class="form-inline my-2 d-sm-block d-md-none" action="{{ url('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-login my-2 my-sm-0" type="submit">Hai {{ Auth::user()->name }} <i class="bi bi-box-arrow-right"></i></i></button>
                </form>
                {{-- dekstop button --}}
                <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-logout mx-3 my-sm-0" type="submit">Hai {{ Auth::user()->name }} <i class="bi bi-box-arrow-right"></i></i></button>
                </form>
                <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ route('create-mitra') }}" method="GET">
                    @csrf
                    <button class="btn btn-login my-sm-0" type="submit">Account</button>
                </form>
                @endif
                @if(\Auth::user()->roles =='KONTRIBUTOR')
                {{-- Mobile Button --}}
                
                <form class="form-inline my-2 d-sm-block d-md-none" action="{{ url('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-login my-2 my-sm-0" type="submit">Hai {{ Auth::user()->name }} <i class="bi bi-box-arrow-right"></i></i></button>
                </form>
                {{-- dekstop button --}}
                <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-logout mx-3 my-sm-0" type="submit">Hai {{ Auth::user()->name }} <i class="bi bi-box-arrow-right"></i></i></button>
                </form>
                <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="" method="GET">
                    @csrf
                    <a href="{{ route('uploads') }}" class="btn btn-login my-sm-0">Uploads</a>
                </form>
                <span>&nbsp;</span>
                <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="" method="GET">
                    @csrf
                    <button class="btn btn-login my-sm-0" type="submit">Account</button>
                </form>

                @endif
                @if(\Auth::user()->roles =='ADMIN')
                {{-- Mobile Button --}}
                
                <form class="form-inline my-2 d-sm-block d-md-none" action="{{ url('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-login my-2 my-sm-0" type="submit">Daftar Mitra</button>
                </form>
                <form class="form-inline my-2 d-sm-block d-md-none" action="{{ url('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-login my-2 my-sm-0" type="submit">Hai {{ Auth::user()->name }} <i
                            class="bi bi-box-arrow-right"></i></i></button>
                </form>
                {{-- dekstop button --}}
                <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-logout mx-3 my-sm-0" type="submit">Hai {{ Auth::user()->name }} <i
                            class="bi bi-box-arrow-right"></i></i></button>
                </form>
                <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ route('dashboard') }}" method="GET">
                    @csrf
                    <button class="btn btn-login my-sm-0" type="submit">Admin</button>
                </form>
                @endif
            @endauth

            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
    
</header>
<!-- End Header -->