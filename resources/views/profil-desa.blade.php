<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Desa Batupute</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/logo/barru.png') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="{{asset('profile/vendor/bootstrap/css/bootstrap.min.css')}}"
      rel="stylesheet"
    />
    <link
      href="{{asset('profile/vendor/bootstrap-icons/bootstrap-icons.css')}}"
      rel="stylesheet"
    />
    <link href="{{asset('profile/vendor/aos/aos.css')}}" rel="stylesheet" />
    <link
      href="{{asset('profile/vendor/glightbox/css/glightbox.min.css')}}"
      rel="stylesheet"
    />
    <link href="{{asset('profile/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="{{asset('profile/css/main.css')}}" rel="stylesheet" />
    <style>
  .visitor-counter {
    position: fixed;
    bottom: 20px;
    left: 20px;
    z-index: 9999;
}

.visitor-counter .btn {
    background-color: #008374;
    border: none;
    font-weight: 600;
    color: #fff;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 8px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

.visitor-counter .btn:hover {
    background-color: #00a68e;
    transform: translateY(-2px);
}

/* Tooltip */
.tooltip-custom {
    display: none;
    position: absolute;
    bottom: 65px;
    left: 0;
    background: #ffffff;
    color: #212529;
    border-radius: 10px;
    padding: 10px 15px;
    font-size: 14px;
    min-width: 230px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    animation: fadeIn 0.3s ease;
}

/* Segitiga kecil di bawah tooltip */
.tooltip-custom::after {
    content: "";
    position: absolute;
    bottom: -8px;
    left: 20px;
    border-width: 8px 8px 0 8px;
    border-style: solid;
    border-color: #ffffff transparent transparent transparent;
}

.visitor-counter:hover .tooltip-custom {
    display: block;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Styling untuk tabel di tooltip */
.tooltip-custom .table {
    margin-bottom: 0;
}

.tooltip-custom .table td {
    padding: 5px 0;
    border: none;
}

.tooltip-custom .table-striped > tbody > tr:nth-of-type(odd) {
    background-color: #f8f9fa;
}

.tooltip-custom td:first-child {
    color: #495057;
}

.tooltip-custom td:last-child {
    text-align: right;
    font-weight: 600;
    color: #008374;
}

/* Mobile view — hanya tampil icon */
@media (max-width: 768px) {
    .visitor-counter .text-label {
        display: none;
    }

    .visitor-counter .btn {
        width: 50px;
        height: 50px;
        justify-content: center;
        border-radius: 50%;
        font-size: 20px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.25);
    }

    .tooltip-custom {
        bottom: 60px;
        left: 0px;
        width: 200px;
    }

    .tooltip-custom::after {
        left: 15px;
    }
}

</style>
  </head>

  <body class="index-page">
    <header id="header" class="header fixed-top">
      <x-navbar-profil></x-navbar-profil>
    </header>


    <main class="main">
    <!-- Page Title -->
    <div class="page-title">
        <div class="heading">
          <div class="container">
            <div class="row d-flex justify-content-center text-center">
              <div class="col-lg-8">
                <h1>Profil Desa</h1>
                <p class="mb-0">Berikut ini adalah sejarah singkat serta gambaran umum Desa Batupute dan wilayah administratifnya.</p>
              </div>
            </div>
          </div>
        </div>
        <nav class="breadcrumbs">
          <div class="container">
            <ol>
              <li><a href="/">Home</a></li>
              <li class="current">Profil Desa</li>
            </ol>
          </div>
        </nav>
      </div>
      <!-- End Page Title -->

      <!-- Portfolio Details Section -->
    <section class="portfolio-details section">
        <div class="container" data-aos="fade-up">
          <div class="portfolio-details-slider swiper init-swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "navigation": {
                  "nextEl": ".swiper-button-next",
                  "prevEl": ".swiper-button-prev"
                },
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                }
              }
            </script>
            <div class="swiper-wrapper align-items-center">
              <div class="swiper-slide">
                <a href="{{asset('profile/img/petadesa.png')}}" class="glightbox" >
                    <img src="{{asset('profile/img/petadesa.png')}}" class="img-fluid" alt="" />
                </a>
              </div>
              <div class="swiper-slide">
                <a href="{{asset('profile/img/batuputebersama.jpg')}}" class="glightbox" >
                    <img src="{{asset('profile/img/batuputebersama.jpg')}}" class="img-fluid" alt="" />
                </a>
              </div>
              <div class="swiper-slide">
                <a href="{{asset('profile/img/kantordesa1.jpg')}}" class="glightbox" >
                    <img src="{{asset('profile/img/kantordesa1.jpg')}}" class="img-fluid" alt="" />
                </a>
              </div>
              <div class="swiper-slide">
                <a href="{{asset('profile/img/kantordesa2.jpg')}}" class="glightbox" >
                    <img src="{{asset('profile/img/kantordesa2.jpg')}}" class="img-fluid" alt="" />
                </a>
              </div>
              <div class="swiper-slide">
                <a href="{{asset('profile/img/kantordesa3.jpg')}}" class="glightbox" >
                    <img src="{{asset('profile/img/kantordesa3.jpg')}}" class="img-fluid" alt="" />
                </a>
              </div>
              
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-pagination"></div>
          </div>
  
          <div class="row justify-content-between gy-4 mt-4">
            <div class="col-lg-8" data-aos="fade-up">
              <div class="portfolio-description">
                <h2>2.1.1 Sejarah Desa</h2>
                <ol type="1">
                    <li>
                        <p>
                          Pada Tahun 1989 Desa Batupute dibentuk merupakan pemekaran dari Desa Siddo pada saat itu wilayahnya sudah sangat luas, sehingga pelayanan pemerintah kepada masyarakat kurang maksimal. Pemerintahan Desa Batupute pertama kali dipimpin oleh <b>Drs. Rukman Hamid</b> adalah Kepala Desa Persiapan Batupute. Pada Pilkades pertama periode 1991 - 1996 dan Pilkades kedua 1997 - 2001 <b>Drs. Rukman Hamid</b> berhasil terpilih kedua kalinya secara berturut-turut.
                        </p>
                    </li>

                    <li>
                        <p>
                          Periode 2002 - 2007merupakan Pilkades ketiga di Desa Batupute yang berhasil terpilih adalah <b>Ramli Manessa</b> kemudian terpilih kembali untuk kedua kalinya Periode 2008 - 2014 dalam Pilkades keempat Desa Batupute, namun sebelum Pilkades keempat dilaksanakan ditunjuk sebagai Pelaksana Harian Kepala Desa Batupute adalah <b>A. Hilmanida, S.STP, M.Si</b>. Pada Tahun 2014 <b>Ramli Manessa</b> Kepala Desa Batupute meninggal dunia kemudian ditunjuk Pelaksana Tugas Kepala Desa Batupute yaitu <b>Zainal Abbas, S.pd</b> sampai Pilkades kelima terlaksana. 
                        </p>
                    </li>

                    <li>
                        <p>
                            Pada Pilkades kelima periode 2017 - 2023 <b>Sudarmin A.</b> terpilih mejandi Kepala Desa Batupute, dan pelaksanaan kegiatannya mencakup 5 (lima) bidang yaitu : 
                            <ol type="I">
                              <li>Bidang Pemerintahan</li>
                              <li>Bidang Pembangunan</li>
                              <li>Bidang Pembinaan Kemasyarakatan</li>
                              <li>Bidang Pemberdayaan Kemasyarakatan</li>
                              <li>Bidang Penanggulangan Bencana</li>
                            </ol>
                          </p>
                    </li>

                    <li>
                        <p>
                          Pada tahun 2022 telah dilaksanakan pemilihan Kepala Desa yang keenam dan berhasil terpilih adalah <b>Jaharuddin</b> periode 2023 - 2029.
                        </p>
                    </li>
                </ol>
              </div>
              <div class="portfolio-description">
                <h2>2.1.2 Wilayah Administratif</h2>
                <ol type="1">
                    <li>
                        <p>
                            Geografis. Lokasi Desa Batupute berada di Kecamatan Soppeng Riaja Kabupaten Barru dengan luas wilayah &plusmn;6.800 Ha, dengan batas-batas wilayah sebagai berikut : 
                            <ol type="a">
                                <li>
                                    Sebelah Utara berbatasan dengan Desa Cilellang.
                                </li>
                                <li>
                                    Sebelah Selatan berbatasan dengan Desa Siddo.
                                </li>
                                <li>
                                    Sebelah Timur berbatasan dengan Desa Manuba.
                                </li>
                                <li>
                                    Sebelah Barat berbatasan dengan Selat Makassar.
                                </li>
                            </ol>
                        </p>
                    </li>

                    <li>
                        <p>
                            Jika dilihat dari letak geografis Desa Batupute berada pada -4,20775&deg; LU/LS 119,62043&deg; BB/BT, jarak dari Kota Kabupaten Barru &plusmn; 29 KM dapat ditempuh dengan jalur datar menggunakan kendaraan sepeda motor atau mobil selama &plusmn; 30 menit, jarak kota Kecamatan Soppeng Riaja &plusmn; 7 Km dengan waktu &plusmn; 10 menit, kemudian jarak dari Kota Provinsi Sulawesi Selatan &plusmn; 127 Km dengan waktu tempuh &plusmn; 3 jam.
                        </p>
                    </li>
                    <li>
                        <p>
                            Desa Batupute terbagi 4 dusun dan 12 RT terdiri dari :
                            <ol type="A">
                                <li>
                                    Dusun Batupute
                                    <ol type="i">
                                        <li>RT. 01</li>
                                        <li>RT. 02</li>
                                        <li>RT. 03</li>
                                        <li>RT. 04</li>
                                    </ol>
                                </li>
                                <li>Dusun Awarange
                                    <ol type="i">
                                        <li>RT. 01</li>
                                        <li>RT. 02</li>
                                        <li>RT. 03</li>
                                        <li>RT. 04</li>
                                    </ol>
                                </li>
                                <li>Dusun Ujunge
                                    <ol type="i">
                                        <li>RT. 01</li>
                                        <li>RT. 02</li>
                                    </ol>
                                </li>
                                <li>Dusun Baturebange
                                    <ol type="i">
                                        <li>RT. 01</li>
                                        <li>RT. 02</li>
                                    </ol>
                                </li>
                            </ol>
                        </p>
                    </li>
                </ol>
              </div>
            </div>
  
            <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="portfolio-info">
                    <h3>Informasi Desa</h3>
                    <ul>
                      <li><strong>Nama Desa</strong> Desa Batupute</li>
                      <li><strong>Kecamatan</strong> Kec. Soppeng Riaja</li>
                      <li><strong>Kabupaten</strong> Kab. Barru</li>
                    </ul>
                  </div>
                <div class="portfolio-info">
                    <h3>Batas Desa</h3>
                    <ul>
                      <li><strong>Utara</strong>Desa Cilellang</li>
                      <li><strong>Selatan</strong>Desa Siddo</li>
                      <li><strong>Timur</strong>Desa Manuba</li>
                      <li><strong>Barat</strong>Selat Makassar</li>
                  </div>
                  <div class="portfolio-info">
                    <h3>Lokasi Desa</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30257.17762742951!2d119.60813523934414!3d-4.2151407785506265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d9590f36507084f%3A0xd9f5cb7996d2cd7c!2sBatupute%2C%20Kec.%20Soppeng%20Riaja%2C%20Kabupaten%20Barru%2C%20Sulawesi%20Selatan!5e1!3m2!1sid!2sid!4v1745518117686!5m2!1sid!2sid" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
            </div>
  
          </div>
  
        </div>
  
      </section>
      <!-- /Portfolio Details Section -->
    </main>

    <footer id="footer" class="footer accent-background">
      <x-footer-profil></x-footer-profil>
    </footer>
    <!-- Scroll Top -->
    <a
      href="#"
      id="scroll-top"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>
    
    @php
        use App\Models\Visitor;
        use Carbon\Carbon;

        $today = Visitor::whereDate('visit_date', Carbon::today())->count();
        $yesterday = Visitor::whereDate('visit_date', Carbon::yesterday())->count();
        $thisWeek = Visitor::whereBetween('visit_date', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
        $lastWeek = Visitor::whereBetween('visit_date', [Carbon::now()->subWeek()->startOfWeek(), Carbon::now()->subWeek()->endOfWeek()])->count();
        $thisMonth = Visitor::whereMonth('visit_date', Carbon::now()->month)->count();
        $lastMonth = Visitor::whereMonth('visit_date', Carbon::now()->subMonth()->month)->count();
        $total = Visitor::count();
    @endphp
    <div class="visitor-counter">
      <button id="btnKunjungan" class="btn shadow-sm">
        <i class="bi bi-eye-fill"></i>
        <span class="text-label">Kunjungan Hari Ini: <strong>{{ $today }}</strong></span>
      </button>

      <div class="tooltip-custom">
        <table class="table table-striped table-borderless align-middle">
          <tr><td>Hari Ini</td><td class="text-end"><strong>{{ $today }}</strong></td></tr>
            <tr><td>Kemarin</td><td class="text-end"><strong>{{ $yesterday }}</strong></td></tr>
            <tr><td>Minggu Ini</td><td class="text-end"><strong>{{ $thisWeek }}</strong></td></tr>
            <tr><td>Minggu Lalu</td><td class="text-end"><strong>{{ $lastWeek }}</strong></td></tr>
            <tr><td>Bulan Ini</td><td class="text-end"><strong>{{ $thisMonth }}</strong></td></tr>
            <tr><td>Bulan Lalu</td><td class="text-end"><strong>{{ $lastMonth }}</strong></td></tr>
            <tr class="border-top border-light"><td><strong>Total</strong></td><td class="text-end"><strong>{{ $total }}</strong></td></tr>
        </table>
      </div>
    </div>
    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{asset('profile/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('profile/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('profile/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('profile/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('profile/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('profile/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{asset('profile/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('profile/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>

    <!-- Main JS File -->
    <script src="{{asset('profile/js/main.js')}}"></script>
  </body>
</html>   