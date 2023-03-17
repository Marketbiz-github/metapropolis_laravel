<!DOCTYPE html>
<html lang="en">

  @section('title')
  Produk Propolis Meta - Jual Meta Propolis Asli BPOM
  @endsection
  @section('meta_description')
  Meta Propolis Adalah suplemen jenis propolis untuk kesehatan terbuat dari 100% bahan propolis alami terbaik dan sudah teruji khasiatnya. beli propolis terdekat Anda sekarang juga! Terdapat juga Peluang usaha dan bimbingan digital marketing
  @endsection
  @section('meta_keywords')
  khasiat propolis meta untuk kesehatan, khasiat propolis untuk tubuh, manfaat propolis bagi tubuh, manfaat propolis madu untuk daya tahan tubuh, madu propolis manfaat, madu propolis terbaik, manfaat herbal propolis  @endsection
@include('landing.layouts.header')

@section('content')

<!--your page content -->

@endsection
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      @include('landing.layouts.logo')


      @include('landing.layouts.navbar')


      <a href="{{route('produk_meta')}}" class="get-started-btn scrollto"><i class="fa fa-shopping-cart"></i> Shop</a>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="50">
        <div class="col-xl-6 col-lg-8">
          <h1>APA ITU<span> PROPOLIS</span></h1>
          <h2>KITA SERING MENDENGAR KATA PROPOLIS, TAPI SEBENARNYA APA ITU PROPOLIS ? DAN APA MANFAATNYA BAGI TUBUH KITA ?</h2>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="50">
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="fa fa-handshake-o"></i>
            <h3><a href="{{route('register')}}">Join Reseller</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="fa fa-handshake-o"></i>
            <h3><a href="{{route('register_dropshipper')}}">Join Dropshipper</a></h3>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
      <div class="section-title">
          <h2>Apa Itu Meta Propolis</h2>
          <!-- <p>Check our Services</p> -->
        </div>
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="10">
            <img src="{{asset('storage/gambar_pengertian/'. $data_pengertian->gambar_pengertian)}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>{!! $data_pengertian->judul !!}</h3>

            <article class="my-2 fst-italic">
              {!! $data_pengertian->pengertian !!}
            </article>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Manfaat Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Manfaat</h2>
          <p>Manfaat Meta Propolis</p>
        </div>
        <div class="row">
          <div class="image col-lg-6" style='background-image: url("{{asset('storage/gambar_manfaat/IMG_6769.JPG')}}");' data-aos="fade-right"></div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="10">
            @foreach($data_manfaat as $data_m)
            <a href="{{route('detail_manfaat',$data_m->id)}}">
            <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="10">
              <i class="mr-2"><img src="{{asset('storage/gambar_manfaat/ikon/'. $data_m->ikon_manfaat)}}" class="mb-2" width="50" height="auto" alt=""></i>
              <br>
              <span style="font-size:27px;" class="ml-2"><h4 class="fs-4"><b>{{$data_m->nama_manfaat}}</b> </h4></span>
              <p class="mt-0">
                <article style="color:black">
                {!! Str::limit($data_m->pengertian, 200) !!}
              </article>
              </p>
            </div>
            </a>
            @endforeach
            <hr>
          </div>
          <div class="col-lg-12">
            <a href="{{route('manfaat')}}" class="readmore btn btn-warning pull-right"><span class="align-center">Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang Meta Propolis</h2>
          <p>Perlu Anda Ketahui</p>
        </div>

        <div class="row">
          @foreach($data_perlu as $perlu)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <a href="{{route('tentang_metapropolis',$perlu->id)}}">
              <div class=""><i class=""></i>
                <img width="100" height="auto" src="{{asset('storage/gambar_perlu_anda_tahu/ikon/'. $perlu->ikon_perlu)}}" alt="">
              </div><br>
              <h4 style="color: black">{{$perlu->nama_perlu}}</h4>
              <p style="color: black">
                <article style="color:black">
                  {!! Str::limit($perlu->pengertian, 50) !!}
                </article>
              </p>
              </a>
            </div>
          </div>
          @endforeach
          {{-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class=""><i class=""></i>
                <img width="100" height="auto" src="{{asset('image_propolis/documents.png')}}" alt="">
              </div><br>
              <h4 style="color: black"><a href="#">Fakta Propolis</a></h4>
              <p style="color: black">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div> --}}

          {{-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class=""><i class=""></i>
                <img width="100" height="auto" src="{{asset('image_propolis/plus.png')}}" alt="">
              </div><br>
              <h4 style="color: black"><a href="#">Apa itu Penyakit Degeneratif</a></h4>
              <p style="color: black">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div> --}}
        </div>

      </div>
    </section><!-- End Services Section -->


   {{-- Join/Langkah bergabung Metapropolis  --}}

    <section id="counts2" class="counts2">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Join</h2>
        <p>Join ke Meta Propolis</p>
        </div>
        <div class="row no-gutters">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="100"></div>
          <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
            <div class="content d-flex flex-column justify-content-center">
              <h3>Langkah Join Meta Propolis ?</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span style="font-size:28px;" class="mt-2">Register</span>
                   {{-- <h4 class="mt-2"> <b>Register</b></h4> --}}
                   <p>consequuntur voluptas nostrum aliquid ipsam architecto ut.</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span style="font-size:28px;" class="mt-2">Aktivasi</span>
                    <p> consequuntur voluptas nostrum aliquid ipsam architecto ut.</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span style="font-size:28px;" class="mt-2">Beli Paket Reseller</span>
                    <p>consequuntur voluptas nostrum aliquid ipsam architecto ut.</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span style="font-size:28px;" class="mt-2">Finish</span>
                    <p>consequuntur voluptas nostrum aliquid ipsam architecto ut.</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->

<!-- ======= Cta Section ======= -->
<section id="cta" class="cta">
  <div class="container" data-aos="zoom-in">

    <div class="text-center">
      <h3>Segera Join</h3>
      <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <a class="cta-btn" href="#">Join di Sini</a>
    </div>

  </div>
</section><!-- End Cta Section -->

    <!-- ======= Hal yang didapat Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Dapat</h2>
          <p>Hal yang Didapat</p>
        </div>
        <div class="row no-gutters">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="100"></div>
          <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
            <div class="content d-flex flex-column justify-content-center">
            <h3>Dapat apa jika bergabung Meta Propolis ?</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="65" data-purecounter-duration="2" class="purecounter"></span>
                    <p><strong>Happy Clients</strong> consequuntur voluptas nostrum aliquid ipsam architecto ut.</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="2" class="purecounter"></span>
                    <p><strong>Projects</strong> adipisci atque cum quia aspernatur totam laudantium et quia dere tan</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-clock"></i>
                    <span data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="4" class="purecounter"></span>
                    <p><strong>Years of experience</strong> aut commodi quaerat modi aliquam nam ducimus aut voluptate non vel</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-award"></i>
                    <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="4" class="purecounter"></span>
                    <p><strong>Awards</strong> rerum asperiores dolor alias quo reprehenderit eum et nemo pad der</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->
<br><br>
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">
        <div class="section-title">
          <h2 style="color:white">Testimonial</h2>
          <p style="color:white">Testimonial</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          {{-- <div class="section-title">
            <h2>Testimonial</h2>
            <p>Testimonial / Program Metapropolis</p>
          </div> --}}
          <div class="swiper-wrapper">
            @foreach($data_testimoni as $data_testi)
            <div class="swiper-slide">
              <div class="testimonial-item">
                {{-- <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt=""> --}}
                {!! $data_testi->fembed_youtube !!}
                {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/4nqg6lsbFsQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> --}}
                {{-- <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4> --}}
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                 {!! $data_testi->kutipan !!}
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
          @endforeach
          </div>
          <div class="swiper-pagination"></div>
        </div>
        <div class="col-lg-12 text-center">
          <a href="{{route('testimonial_all')}}" class="btn btn-warning"><span class="align-center">Semua Testimonial </span><i class="bi bi-arrow-right"></i></a>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
  
    <!-- ======= Contact Section ======= -->
    {{-- <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Lokasi</h2>
          <p>Lokasi Metapropolis</p>
        </div>

        <div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31731.141511838785!2d106.7862591!3d-6.2118283!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f18c91b1bb09%3A0x47dd3031dcf77ff5!2sMeta%20Propolis!5e0!3m2!1sid!2sid!4v1677642819186!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        

      </div>
    </section><!-- End Contact Section --> --}}

    
    <section id="recent-blog-posts" class="recent-blog-posts">
      <div class="container" data-aos="fade-up">
    
      <div class="section-title">
            <h2>Recent Blog Posts</h2>
            <p>Blog Upload</p>
      </div>

      <div class="row gy-5">
        @foreach($data_blog as $blog)
        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="post-item position-relative h-100">

            <div class="post-img position-relative overflow-hidden">
              <img src="{{asset('storage/gambar_blog/'.$blog->gambar_blog )}}" class="img-fluid" alt="">
              <span class="post-date">{{$blog->tgl_upload}}</span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title">{{$blog->judul}}</h3>

              <div class="meta d-flex align-items-center">
              </div>
              <hr>
              <a href="{{route('detail_blog',$blog->id)}}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div><!-- End post item -->
        @endforeach
      </div>
      <hr>
      <div class="col-lg-12 text-center">
        <a href="{{route('blog_all')}}" class="btn btn-warning"><span class="align-center">Semua Blog </span><i class="bi bi-arrow-right"></i></a>
      </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 @include('landing.layouts.footer')

</body>

</html>