@extends('layouts.app-mitra')

@section('title', 'PNUP Assets')

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero">

    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                <div data-aos="zoom-out">
                    <h1><span>PNUP Assets</span></h1>
                    <h2>Aplikasi Pemesanan Mobil Antar Daerah dan Pengiriman Barang dengan <strong>Aman, Cepat dan
                            Terpercaya</strong></h2>
                    <div class="text-center text-lg-start">
                        <a href="#about" class="btn-get-started scrollto">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                <img src="Frontend/images/heroo_image.png" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

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

</section><!-- End Hero -->

<main id="main">


    <!-- ======= Features Section ======= -->
    <section id="features" class="features ">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Layanan</h2>
                <p>Layanan yang Disediakan</p>
            </div>

            <div class="row justify-content-center" data-aos="fade-left">
                <div class="col-lg-5 col-md-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
                        <i class="bi bi-file-earmark-person" style="color: #011B3E;"></i>
                        <h3 class="feature-link py-5"><a href="{{ route('layanan-mobil') }}">Penumpang</a></h3>
                    </div>
                </div>
                <div class="col-lg-5 col-md-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                        <i class="bi bi-box-seam" style="color: #011B3E;"></i>
                        <h3 class="feature-link py-5"><a href="{{ route('layanan-mobil') }}"
                                class="feature-link">Pengiriman Barang</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Features Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container-fluid ">

            <div class="row">
                <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch"
                    data-aos="fade-right">
                </div>

                <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5"
                    data-aos="fade-left">
                    <h3>Tentang Kami</h3>
                    <p>Go ACT adalah aplikasi pelayanan jasa yang bergerak di bidang transportasi darat.
                        Aplikasi ini merupakan solusi atas permasalahan yang terjadi di masyarakat
                        yang ingin melakukan perjalanan dan pengiriman barang lintas wilayah atau daerah.</p>

                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon"><i class="bx bx-fingerprint"></i></div>
                        <h4 class="title"><a href="">VISI</a></h4>
                        <p class="description">Memberi kemudahan untuk para sopir dan
                            juga masyarakat dalam melaksanakan kegiatan seperti bepergian,
                            pengiriman dokumen penting atau belanja yang
                            menggunakan layanan di bidang transportasi dengan berorientasi
                            kepada kenyamanan dan kepuasan pelanggan.</p>
                    </div>

                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon"><i class="bx bx-gift"></i></div>
                        <h4 class="title"><a href="">MISI</a></h4>
                        <ol class="description">
                            <li>Memberikan pelayanan prima kepada pelanggan</li>
                            <li>Memberikan solusi dalam penyewaan/rental mobil yang mudah serta nyaman untuk
                                kebutuhan bisnis, keluarga maupun kebutuhan
                                personal</li>
                            <li>Memiliki bisnis jangka panjang dengan mitra usaha berbagai perusahaan,
                                instansi pemerintah dan lain-lain</li>
                            <li>Lebih mengefisienkan waktu untuk sopir dan penumpang ketika ingin bepergian</li>
                        </ol>
                    </div>
                </div>
            </div>
    </section><!-- End About Section -->
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container ">
            <div class="section-title" data-aos="fade-up">
                <h2>Diagram</h2>
                <p>Jumlah Pengguna dan Mitra </p>
            </div>
            <div class="row justify-content-center" data-aos="fade-up">

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-people"></i>
                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Pengguna</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="bi bi-car-front-fill"></i>
                        <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Mitra Sopir</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Counts Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>F.A.Q</h2>
                <p>Pertanyaan Seputar Aplikasi GO ACT</p>
            </div>

            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                            data-bs-target="#faq-list-1">Apa syarat-syarat mendaftar sebagai mitra supir?<i
                                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                            <p>
                                Syarat untuk mendaftar sebagai mitra supir yaitu sudah memiliki SIM,STNK mobil,dan sehat
                                jasmani serta rohani.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-2" class="collapsed">Layanan apa saja yang ada didalam website
                            GoAct? <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                            <p>Layanan yang disediakan dalam website Go ACT yaitu layanan untuk pemesanan mobil untuk
                                penumpang dan pengiriman barang.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-3" class="collapsed">Jenis barang apa yang bisa dikirim?<i
                                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Adapun jenis barang yang dapat dikirim yaitu semua jenis barang kecuali barang yang
                                terlarang seperti narkoba,ganja,dll.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-4" class="collapsed">.Siapa saja yang bisa melakukan pemesanan di
                            website GoAct?<i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Yang dapat melakukan pemesanan yaitu semua orang yang sudah mendaftar dan mempunyai akun
                                di website Go ACT.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Kontak</h2>
                <p>Hubungi Kami</p>
            </div>

            <div class="row">

                <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
                    <div class="info">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.4276947353537!2d119.48280981585164!3d-5.19526404352871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee3c06a555185%3A0xa2ddefcdaeccac05!2sLorong%20Karaeng%20Makkawari%20II%2C%20Samata%2C%20Kec.%20Somba%20Opu%2C%20Kabupaten%20Gowa%2C%20Sulawesi%20Selatan%2090235!5e0!3m2!1sid!2sid!4v1658220006809!5m2!1sid!2sid"
                            frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                        <div class="address mt-3">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Lokasi:</h4>
                            <p>Kelurahan Samata, Kecamatan Somba Opu Kabupaten Gowa</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>goact.id@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Hubungi</h4>
                            <a aria-label="Chat on WhatsApp"
                                href="https://wa.me/6285796578508?text=Saya%20Ingin%20in%20Memesan%20Mobil">
                                <img alt="Chat on WhatsApp" src="Frontend/images/wa.png" width="120px" /> </a>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

@endsection