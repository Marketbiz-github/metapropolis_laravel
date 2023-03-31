<!DOCTYPE html>
<html lang="en">

@section('title')
  Manfaat - Meta Propolis
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
      <a href="{{route('produk_meta')}}" class="get-started-btn scrollto"><i class="fa fa-shopping-cart"></i> Beli</a>

    </div>
  </header><!-- End Header -->
 
  

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div id="hero2" class="d-flex align-items-center">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="50">
          <div class="col-xl-6 col-lg-8">
            <h1>Manfaat <span>META PROPOLIS</span></h1>
            {{-- <h2>KITA SERING MENDENGAR KATA PROPOLIS, TAPI SEBENARNYA APA ITU PROPOLIS ? DAN APA MANFAATNYA BAGI TUBUH KITA ?</h2> --}}
          </div>
        </div>
      </div>
    </div><!-- End Breadcrumbs -->

    <section id="features" class="features">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Manfaat</h2>
            <p>Manfaat Metapropolis</p>
          </div>
           {{-- <div class="row"> --}}
            <div class="image col-lg-12" style='background-image: url("{{asset('image_propolis/produk1.JPG')}}");' data-aos="fade-right"></div>
            <div class="col-lg-12" data-aos="fade-left" data-aos-delay="10">
              @foreach($data_manfaat as $data_m)
              <a href="{{route('detail_manfaat',$data_m->id)}}">
              <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="10">
                <i class="mr-2"><img src="{{asset('storage/gambar_manfaat/ikon/'. $data_m->ikon_manfaat)}}" class="mb-2" width="50" height="auto" alt=""></i>
                {{-- <img src="{{('image_propolis/1669617335-75x75.png')}}" alt=""> --}}
                <br>
                <span style="font-size:27px;" class="ml-2 mt-2"><h4 class="fs-4"><b>{{$data_m->nama_manfaat}}</b> </h4></span>
                <p class="mt-0">
                  <article style="color:black">
                    {!! Str::limit($data_m->pengertian, 500) !!}
                  </article>
                </p>
              </div>
            </a>
              @endforeach
            </div>
  
            
          {{-- </div> --}}
        </div>
      </section><!-- End Features Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 @include('landing.layouts.footer')

</body>

</html>