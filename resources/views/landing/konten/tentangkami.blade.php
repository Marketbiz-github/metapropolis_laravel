<!DOCTYPE html>
<html lang="en">

@section('title')
  Tentang Kami - Meta Propolis
@endsection
@include('landing.layouts.header')

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      @include('landing.layouts.logo')
      <!-- <h1 class="logo me-auto me-lg-0"><a href="index.html">Meta<span>Propolis</span></a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      @include('landing.layouts.navbar')

      {{-- <a href="#" class="get-started-btn scrollto"><i class="fa fa-shopping-cart"></i> Shop</a> --}}
      @include('landing.layouts.button_beli')

    </div>
  </header><!-- End Header -->
 
  

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div id="hero2" class="d-flex align-items-center">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="50">
          <div class="col-xl-6 col-lg-8">
            <h1>Tentang <span>Kami</span></h1>
            {{-- <h2>KITA SERING MENDENGAR KATA PROPOLIS, TAPI SEBENARNYA APA ITU PROPOLIS ? DAN APA MANFAATNYA BAGI TUBUH KITA ?</h2> --}}
          </div>
        </div>
      </div>
    </div><!-- End Breadcrumbs -->

    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Visi & Misi</h2>
            <!-- <p>Check our Services</p> -->
          </div>
          <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="10">
              <img src="{{('storage/gambar_tentang_kami/'. $data_tentang_kami->gambar_tentang_kami)}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
              {{-- <h3>VISI</h3> --}}
              <article>
                {!! $data_tentang_kami->visi !!}
              </article>
              {{-- <p class="fst-italic">
                Menjadi perusahaan obat tradisional dengan mengolah bahan herbal yang dapat memberikan manfaat bagi masyarakat, lingkungan dan ekosistemnya.
                <br>
                Menciptakan 1 juta Pengusaha Mandiri di Indonesia
              </p> --}}
              <br>
              {{-- <h3>MISI</h3> --}}
              <article>
                {!! $data_tentang_kami->misi !!}
              </article>

              {{-- <p class="fst-italic">
                <i class="ri-check-double-line"></i> Mengembangkan produk-produk herbal secara berkesinambungan <br>
                <i class="ri-check-double-line"></i> Menjadi perusahaan global dengan mefokuskan pada obat herbal <br>
                <i class="ri-check-double-line"></i> Membantu serta mendorong pemerintah, dunia pendidikan dan kedokteran agar lebih berperan dalam penelitian dan pengembangan obat serta pengobatan herbal <br>
                <i class="ri-check-double-line"></i> Membantu menciptakan 1juta pengusaha lokal serta menciptakan lapangan kerja baru
              </p> --}}
            </div>
          </div>
  
        </div>
      </section><!-- End About Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 @include('landing.layouts.footer')

</body>

</html>