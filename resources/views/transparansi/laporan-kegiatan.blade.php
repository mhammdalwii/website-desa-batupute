<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Desa Batupute - Laporan Kegiatan</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/logo/barru.png') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{asset('profile/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('profile/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('profile/vendor/aos/aos.css')}}" rel="stylesheet" />
    <link href="{{asset('profile/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet" />
    <link href="{{asset('profile/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet" />

    <!-- Main CSS File (optional external) -->
    <link href="{{asset('profile/css/main.css')}}" rel="stylesheet" />

    <!-- Inline CSS: card + visitor counter improvements -->
    <style>
    /* ------------------------------------------
       Card improvements & image aspect handling
       ------------------------------------------ */
    :root {
      --card-radius: 12px;
      --card-shadow: 0 6px 18px rgba(0,0,0,0.08);
      --card-shadow-hover: 0 14px 34px rgba(0,0,0,0.12);
      --accent: #008374;
    }

    .card.custom-card {
      border-radius: var(--card-radius);
      overflow: hidden;
      transition: transform .18s ease, box-shadow .18s ease;
      box-shadow: var(--card-shadow);
      border: 0;
      background: #fff;
    }

    .card.custom-card:hover {
      transform: translateY(-6px);
      box-shadow: var(--card-shadow-hover);
    }

    /* Image container with fixed aspect ratio (modern) */
    .card-image-wrap {
      width: 100%;
      aspect-ratio: 16 / 10; /* ubah ke 4/3 atau 1/1 kalau mau */
      overflow: hidden;
      display: block;
      background: #f2f2f2;
    }

    .card-image-wrap img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center center;
      display: block;
    }

    .card.custom-card .card-body {
      padding: 1.05rem;
    }

    .card.custom-card .card-title {
      font-size: 1.05rem;
      line-height: 1.25;
      margin-bottom: .45rem;
      color: #212529;
    }

    .post-meta p {
      margin-bottom: .25rem;
      color: #6c757d;
      font-size: .92rem;
    }

    .card.custom-card .btn {
      border-radius: 8px;
      font-weight: 600;
    }

    /* Responsive tweaks */
    @media (max-width: 576px) {
      .card-image-wrap { aspect-ratio: 4 / 3; }
      .card.custom-card .card-body { padding: .9rem; }
    }

    /* ------------------------------------------
       Visitor counter styles (ke kiri bawah)
       ------------------------------------------ */
    .visitor-counter {
      position: fixed;
      bottom: 20px;
      left: 20px;
      z-index: 9999;
    }

    .visitor-counter .btn {
      background-color: var(--accent);
      border: none;
      font-weight: 600;
      color: #fff;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      gap: 8px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      padding: .55rem .8rem;
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

    .tooltip-custom::after {
      content: "";
      position: absolute;
      bottom: -8px;
      left: 20px;
      border-width: 8px 8px 0 8px;
      border-style: solid;
      border-color: #ffffff transparent transparent transparent;
    }

    .visitor-counter:hover .tooltip-custom { display: block; }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to   { opacity: 1; transform: translateY(0); }
    }

    .tooltip-custom .table { margin-bottom: 0; }
    .tooltip-custom td { padding: 5px 0; border: none; }
    .tooltip-custom td:first-child { color: #495057; }
    .tooltip-custom td:last-child { text-align: right; font-weight: 600; color: var(--accent); }

    /* mobile: hanya icon */
    @media (max-width: 768px) {
      .visitor-counter .text-label { display: none; }
      .visitor-counter .btn {
        width: 50px; height: 50px; justify-content: center; border-radius: 50%; font-size: 20px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.25);
      }
      .tooltip-custom { bottom: 60px; left: 0px; width: 200px; }
      .tooltip-custom::after { left: 15px; }
    }
    </style>
  </head>

  <body class="starter-page-page">
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
                <h1>Laporan Kegiatan</h1>
                <p class="mb-0">
                  Halaman ini menyajikan informasi lengkap mengenai Kegiatan yang ada di Desa Batupute.
                </p>
              </div>
            </div>
          </div>
        </div>
        <nav class="breadcrumbs">
          <div class="container">
            <ol>
              <li><a href="/">Home</a></li>
              <li><a href="/">Transparansi</a></li>
              <li class="current">Laporan Kegiatan</li>
            </ol>
          </div>
        </nav>
      </div>
      <!-- End Page Title -->

      <!-- Starter Section -->
      <section id="starter-section" class="starter-section section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <div class="row justify-content-center mt-5">
                <div class="col-12 col-md-10 text-center">
                    <h2>Laporan Kegiatan</h2>
                    <p>Halaman ini menyajikan informasi lengkap mengenai laporan kegiatan yang ada di Desa Batupute.</p>
                </div>

            {{-- Jika data kosong --}}
            @if ($laporanKegiatan->isEmpty())
            <div class="col-12 col-lg-10 mt-3">
                <div class="alert alert-warning" role="alert">
                  Data belum ada.
                </div>
            </div>
            @else
                {{-- Loop kartu --}}
                @foreach ($laporanKegiatan as $lapokeg)
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 mt-3">
                    <article class="card custom-card h-100" data-aos="fade-up">
                        <a href="{{ asset('storage/assets/image/laporanKegiatan/'.$lapokeg->foto_kegiatan) }}" class="glightbox card-image-wrap">
                            @if($lapokeg->foto_kegiatan && file_exists(storage_path('app/public/assets/image/laporanKegiatan/'.$lapokeg->foto_kegiatan)))
                                <img src="{{ asset('storage/assets/image/laporanKegiatan/'.$lapokeg->foto_kegiatan) }}" alt="Foto Kegiatan" loading="lazy">
                            @else
                                <img src="{{ asset('assets/img/default-placeholder.png') }}" alt="No image" loading="lazy">
                            @endif
                        </a>

                        <div class="card-body d-flex flex-column">
                          <h4 class="card-title fw-bold">
                              {{ \Illuminate\Support\Str::limit($lapokeg->nama_kegiatan, 60) }}
                          </h4>

                          <div class="post-meta mb-3">
                              <p class="mb-1"><i class="bi bi-geo-alt-fill me-1"></i><strong>Lokasi:</strong> {{ $lapokeg->lokasi }}</p>
                              <p class="mb-1"><i class="bi bi-cash-stack me-1"></i><strong>Anggaran:</strong> Rp. {{ number_format($lapokeg->anggaran, 0, ',', '.') }}</p>
                              <p class="mb-0"><i class="bi bi-calendar-event me-1"></i><strong>Tanggal:</strong> <time datetime="{{ $lapokeg->tanggal_kegiatan }}">{{ $lapokeg->tanggal_kegiatan }}</time></p>
                          </div>

                          <div class="mt-auto d-flex gap-2">
                              {{-- BUTTON LIHAT BERKAS --}}
                                <a href="javascript:void(0);"
                                   class="btn btn-outline-danger btn-sm w-100 {{ empty($lapokeg->file_laporan) ? 'disabled' : '' }}"
                                   @if(!empty($lapokeg->file_laporan))
                                       onclick="openModal('{{ $lapokeg->file_laporan }}')"
                                   @endif
                                >
                                    <i class="bi bi-file-earmark-fill me-1"></i>
                                    Lihat Berkas
                                </a>
                                
                                {{-- BUTTON DOWNLOAD --}}
                                <a href="{{ !empty($lapokeg->file_laporan) 
                                            ? route('laporan-kegiatan.download', $lapokeg->file_laporan) 
                                            : 'javascript:void(0);' }}"
                                   class="btn btn-outline-success btn-sm w-100 {{ empty($lapokeg->file_laporan) ? 'disabled' : '' }}"
                                >
                                    <i class="bi bi-download me-1"></i>
                                    Download
                                </a>

                          </div>
                        </div>
                    </article>
                </div>
                @endforeach

                {{-- Pagination --}}
                <div class="col-12 col-lg-10 mt-4">
                  <div class="d-flex justify-content-center">
                    <ul class="pagination justify-content-center">
                      @if ($laporanKegiatan->onFirstPage())
                        <li class="page-item disabled"><a class="page-link"><i class="bi bi-chevron-left"></i></a></li>
                      @else
                        <li class="page-item"><a href="{{ $laporanKegiatan->previousPageUrl() }}" class="page-link"><i class="bi bi-chevron-left"></i></a></li>
                      @endif

                      @php
                        $totalPages = $laporanKegiatan->lastPage();
                        $currentPage = $laporanKegiatan->currentPage();
                        $pagesToShow = 3;
                      @endphp

                      @if ($totalPages <= $pagesToShow)
                        @foreach(range(1, $totalPages) as $i)
                          <li class="page-item {{ $i == $currentPage ? 'active' : '' }}"><a href="{{ $laporanKegiatan->url($i) }}" class="page-link">{{ $i }}</a></li>
                        @endforeach
                      @else
                        <li class="page-item {{ 1 == $currentPage ? 'active' : '' }}"><a href="{{ $laporanKegiatan->url(1) }}" class="page-link">1</a></li>
                        @if ($currentPage > 2) <li class="page-item disabled"><span class="page-link">...</span></li> @endif

                        @foreach(range(max(2, $currentPage - 1), min($totalPages - 1, $currentPage + 1)) as $i)
                          <li class="page-item {{ $i == $currentPage ? 'active' : '' }}"><a href="{{ $laporanKegiatan->url($i) }}" class="page-link">{{ $i }}</a></li>
                        @endforeach

                        @if ($currentPage < $totalPages - 1) <li class="page-item disabled"><span class="page-link">...</span></li> @endif
                        <li class="page-item {{ $totalPages == $currentPage ? 'active' : '' }}"><a href="{{ $laporanKegiatan->url($totalPages) }}" class="page-link">{{ $totalPages }}</a></li>
                      @endif

                      @if ($laporanKegiatan->hasMorePages())
                        <li class="page-item"><a href="{{ $laporanKegiatan->nextPageUrl() }}" class="page-link"><i class="bi bi-chevron-right"></i></a></li>
                      @else
                        <li class="page-item disabled"><a class="page-link"><i class="bi bi-chevron-right"></i></a></li>
                      @endif
                    </ul>
                  </div>
                </div>

            @endif {{-- end else data --}}
            </div> {{-- row --}}
        </div> {{-- container --}}
      </section>
      <!-- /Starter Section -->
    </main>

    <footer id="footer" class="footer accent-background">
      <x-footer-profil></x-footer-profil>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
      <i class="bi bi-arrow-up-short"></i>
    </a>

    {{-- Visitor counter PHP (dijalankan server-side) --}}
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

    <!-- Modal untuk preview file laporan -->
    <div class="modal fade" id="fileModal" tabindex="-1" aria-labelledby="fileModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Preview File</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
          </div>
          <div class="modal-body">
            <iframe id="fileFrame" src="" width="100%" height="600px" frameborder="0"></iframe>
          </div>
        </div>
      </div>
    </div>

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

    <script>
      // Modal preview file
      function openModal(filename) {
          const modalEl = document.getElementById('fileModal');
          const modal = new bootstrap.Modal(modalEl);
          document.getElementById('fileFrame').src = `/transparansi/laporan-kegiatan/${filename}`;
          modal.show();

          // optional: clear src saat modal ditutup agar tidak terus load
          modalEl.addEventListener('hidden.bs.modal', function () {
              document.getElementById('fileFrame').src = '';
          }, { once: true });
      }

      // Initialize glightbox bila dipakai
      document.addEventListener('DOMContentLoaded', function () {
        if (typeof GLightbox !== 'undefined') {
          GLightbox({ selector: '.glightbox' });
        }
        // AOS init
        if (typeof AOS !== 'undefined') AOS.init();
      });
    </script>
  </body>
</html>
