<!DOCTYPE html>
<html lang="en">

@section('title')
  Tentang Meta Propolis - Meta Propolis
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
            <h1>Tentang <span>META PROPOLIS</span></h1>
            {{-- <h2>KITA SERING MENDENGAR KATA PROPOLIS, TAPI SEBENARNYA APA ITU PROPOLIS ? DAN APA MANFAATNYA BAGI TUBUH KITA ?</h2> --}}
          </div>
        </div>
      </div>
    </div><!-- End Breadcrumbs -->

    <section id="features" class="features">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Penjelasan</h2>
            <p>{{$datas->nama_perlu}}</p>
          </div>
          <div class="row">
            <div class="image col-lg-6" style='background-image: url("{{asset('storage/gambar_perlu_anda_tahu/'.$datas->gambar_perlu)}}");' data-aos="fade-right"></div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="10">
              <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="10">
                {{-- <img src="{{('image_propolis/1669617335-75x75.png')}}" alt=""> --}}
                {{-- <h4 class="">Apa Itu Propolis</h4> --}}
                <p>
                  <article class="fs-5" style="color:black">
                    {!! $datas->pengertian !!}
                  </article>
                </p>
              </div>
            </div>
            
          </div>
        </div>
      </section><!-- End Features Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 @include('landing.layouts.footer')

</body>

</html>