<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Lapangan - Ramos Badminton Center</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{URL::asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        @include('layouts.navbar')
        <div class="container-xxl py-5 bg-dark hero-header mb-5">
            <div class="container text-center my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Gallery</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Gallery</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
        <!-- Navbar & Hero End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Our Gallery</h5>
                    <h1 class="mb-5">Explore Our Gallery</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <video class="img-fluid mb-3" controls style="max-height: 150px; width:100%; object-fit:cover;">
                                <source src="{{ asset('storage/video/video_lapangan.mp4') }}" type="video/mp4">
                                Browser Anda tidak mendukung pemutaran video.
                            </video>
                            <div class="p-4">
                                <h5>Lapangan Berkualitas</h5>
                                <p>Nikmati pengalaman bermain badminton terbaik dengan lapangan yang memenuhi standar profesional. Kami menyediakan fasilitas lengkap untuk kenyamanan dan performa maksimal. 🔗 Pesan Lapangan Sekarang</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <img class="img-fluid mb-3" src="{{ asset('img/lapangan7.jpg') }}" alt="Lapangan Berkualitas" style="max-height: 150px; width:100%; object-fit:cover;">
                            <div class="p-4">
                                <h5>Lapangan Berkualitas</h5>
                                <p>Pesan lapangan dengan mudah dan cepat melalui sistem online kami! Tidak perlu antre atau datang langsung—cukup pilih jadwal dan bayar secara online.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <img class="img-fluid mb-3" src="{{ asset('img/lapangan7.jpg') }}" alt="Lapangan Berkualitas" style="max-height: 150px; width:100%; object-fit:cover;">
                            <div class="p-4">
                                <h5>Lapangan Berkualitas</h5>
                                <p>Tidak membawa perlengkapan? Tenang! Kami menyediakan layanan penyewaan raket dan shuttlecock berkualitas untuk pengalaman bermain terbaik.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <img class="img-fluid mb-3" src="{{ asset('img/bg.lapangan1.jpg') }}" alt="Lapangan Berkualitas" style="max-height: 150px; width:100%; object-fit:cover;">
                            <div class="p-4">
                                <h5>Lapangan Berkualitas</h5>
                                <p>Main badminton kapan saja tanpa batasan waktu! Kami siap melayani pemesanan dan pertanyaanmu sepanjang hari.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <img class="img-fluid mb-3" src="{{ asset('img/lapangan7.jpg') }}" alt="Lapangan Berkualitas" style="max-height: 150px; width:100%; object-fit:cover;">
                            <div class="p-4">
                                <h5>Lapangan Berkualitas</h5>
                                <p>Nikmati kenyamanan sebelum dan sesudah bermain di ruang tunggu yang nyaman dengan fasilitas lengkap.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <img class="img-fluid mb-3" src="{{ asset('img/bg.lapangan1.jpg') }}" alt="Lapangan Berkualitas" style="max-height: 150px; width:100%; object-fit:cover;">
                            <div class="p-4">
                                <h5>Lapangan Berkualitas</h5>
                                <p>Nikmati area tunggu yang nyaman dengan berbagai fasilitas untuk pemain dan pengunjung.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <img class="img-fluid mb-3" src="{{ asset('img/lapangan7.jpg') }}" alt="Lapangan Berkualitas" style="max-height: 150px; width:100%; object-fit:cover;">
                            <div class="p-4">
                                <h5>Lapangan Berkualitas</h5>
                                <p>Dapatkan perlengkapan badminton berkualitas dan merchandise eksklusif hanya di tempat kami.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <img class="img-fluid mb-3" src="{{ asset('img/bg.lapangan1.jpg') }}" alt="Lapangan Berkualitas" style="max-height: 150px; width:100%; object-fit:cover;">
                            <div class="p-4">
                                <h5>Lapangan Berkualitas</h5>
                                <p>Abadikan setiap momen seru di lapangan dengan koleksi foto dan video terbaik dari permainanmu.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>        <!-- Service End -->


        <!-- Footer Start -->
        @include('layouts.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{URL::asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{URL::asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{URL::asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{URL::asset('lib/counterup/counterup.min.js')}}"></script>
    <script src="{{URL::asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{URL::asset('lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{URL::asset('lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{URL::asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{URL::asset('js/main.js')}}"></script>
</body>

</html>
