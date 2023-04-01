<!DOCTYPE html>
<html lang="en">

@section('title')
  Jurnal - Meta Propolis
@endsection
@include('landing.layouts.header')
<style>
.gambar_o{
  width: 100%;
  height: auto;
}
</style>
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
            <h1>Jurnal<span> META PROPOLIS</span></h1>
            {{-- <h2>KITA SERING MENDENGAR KATA PROPOLIS, TAPI SEBENARNYA APA ITU PROPOLIS ? DAN APA MANFAATNYA BAGI TUBUH KITA ?</h2> --}}
          </div>
        </div>
      </div>
    </div><!-- End Breadcrumbs -->

    <section id="features" class="features">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>{{$datas->judul}}</h2>
            <p>{{$datas->judul}}</p>
          </div>
          {{-- <div class="row"> --}}
            <div>
              <img src="{{asset('storage/gambar_jurnal/'.$datas->gambar_jurnal)}}" class="gambar_o" alt="">
            </div>
            {{-- <div class="image gambar_o col-lg-12" style='background-image: url("{{asset('storage/gambar_blog/'.$datas->gambar_blog)}}");' data-aos="fade-right"></div> --}}
            <div class="col-lg-12 mt-2" data-aos="fade-left" data-aos-delay="10">
                {{-- <h4 class="">{{$datas->judul}}</h4> --}}
                <article class="my-2 fs-5">
                  {!! $datas->isi !!}
                </article>
                
            </div>
            
          {{-- </div> --}}
        </div>
      </section><!-- End Features Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 @include('landing.layouts.footer')

</body>

</html>