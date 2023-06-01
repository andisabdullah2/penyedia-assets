<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <a href="{{ route('home') }}" class="logo me-auto"><img src="{{ url('Frontend/images/logo.png') }}" alt="" class="img-fluid"></a>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="{{ route('home') }}">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#features">Features</a></li>
                <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
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
                {{-- Mobile Button --}}
                
                <form class="form-inline my-2 d-sm-block d-md-none" action="{{ url('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-login my-2 my-sm-0" type="submit">Liat Orderan</button>
                </form>
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
                    <button class="btn btn-login my-sm-0" type="submit">Liat Orderan</button>
                </form>
            @endauth
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header>
<!-- End Header -->