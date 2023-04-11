<!DOCTYPE html>
<html lang="en">

@section('title')
  Blog Meta Propolis - Meta Propolis
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
            <h1>Blog<span> META PROPOLIS</span></h1>
            {{-- <h2>KITA SERING MENDENGAR KATA PROPOLIS, TAPI SEBENARNYA APA ITU PROPOLIS ? DAN APA MANFAATNYA BAGI TUBUH KITA ?</h2> --}}
          </div>
        </div>
      </div>
    </div><!-- End Breadcrumbs -->
    <section id="recent-blog-posts" class="recent-blog-posts">
        <div class="container" data-aos="fade-up">
      
        <div class="section-title">
              <h2>Semua Blog</h2>
              <p>Blog Upload</p>
        </div>
  
        <div class="row gy-5">
          @foreach($data_blog as $blog)
          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="post-item position-relative h-100">
  
              <div class="post-img position-relative overflow-hidden">
                <img src="{{asset('storage/gambar_blog/'.$blog->gambar_blog )}}" class="img-fluid w-100" alt="blog">
                <span class="post-date">{{$blog->tgl_upload}}</span>
              </div>
  
              <div class="post-content d-flex flex-column">
  
                <h3 class="post-title">{{$blog->judul}}</h3>
  
                {{-- <div class="meta d-flex align-items-center"> --}}
                  {{-- <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
                  </div> --}}
                  {{-- <span class="px-3 text-black-50">/</span> --}}
                  {{-- <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
                  </div> --}}
                {{-- </div> --}}
  
                <hr>
  
                <a href="{{route('detail_blog',$blog->id)}}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
  
              </div>
  
            </div>
          </div><!-- End post item -->
          @endforeach
        </div>
  
        </div>
      </section>
    


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 @include('landing.layouts.footer')

</body>

</html>