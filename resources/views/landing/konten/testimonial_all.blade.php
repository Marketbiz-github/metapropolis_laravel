<!DOCTYPE html>
<html lang="en">

@section('title')
  Testimonial Meta Propolis - Meta Propolis
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

    <img class="logo me-auto me-lg-0" src="{{asset('image_propolis/1669617335-75x75.png')}}" width="75" height="auto" alt="" srcset="">
      <!-- <h1 class="logo me-auto me-lg-0"><a href="index.html">Meta<span>Propolis</span></a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      @include('landing.layouts.navbar')

      {{-- <a href="#" class="get-started-btn scrollto"><i class="fa fa-shopping-cart"></i> Shop</a> --}}
      <a href="{{route('produk_meta')}}" class="get-started-btn scrollto"><i class="fa fa-shopping-cart"></i> Shop</a>

    </div>
  </header><!-- End Header -->
 
  

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div id="hero2" class="d-flex align-items-center">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="50">
          <div class="col-xl-6 col-lg-8">
            <h1>Testimonial<span> META PROPOLIS</span></h1>
            {{-- <h2>KITA SERING MENDENGAR KATA PROPOLIS, TAPI SEBENARNYA APA ITU PROPOLIS ? DAN APA MANFAATNYA BAGI TUBUH KITA ?</h2> --}}
          </div>
        </div>
      </div>
    </div><!-- End Breadcrumbs -->
    <section id="recent-blog-posts" class="recent-blog-posts">
        <div class="container" data-aos="fade-up">
      
        <div class="section-title">
              <h2>Semua Testimonial</h2>
              <p>Testimonial</p>
        </div>
  
        <div class="row">
        @foreach($datas as $data)
        
              <div class="col-lg-6" data-aos="fade-left" data-aos-delay="10">
                  {!! $data->fembed_youtube !!}
                  <p class="">
                    {!! $data->kutipan !!}
                  </p>
              {{-- <div class="image gambar_o col-lg-12" style='background-image: url("{{asset('storage/gambar_blog/'.$datas->gambar_blog)}}");' data-aos="fade-right"></div> --}}
                  {{-- <h4 class="">{{$datas->judul}}</h4> --}}
                 
                {{-- <a href="" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a> --}}
                  
              </div>
              @endforeach
            </div>
        
  
        </div>
      </section>
    


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 @include('landing.layouts.footer')

</body>

</html>