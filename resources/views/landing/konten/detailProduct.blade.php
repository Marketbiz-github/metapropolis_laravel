<!DOCTYPE html>
<html lang="en">

@section('title')
Shop - Meta Propolis
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
            {{-- <a href="#produk" class="btn btn-warning scrollto"><i class="fa fa-shopping-cart"></i> Shop</a> --}}

        </div>
    </header><!-- End Header -->



    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div id="hero2" class="d-flex align-items-center">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="50">
                    <div class="col-xl-6 col-lg-8">
                        <h1>Detail Produk<br><span>META PROPOLIS</span></h1>
                        {{-- <h2>KITA SERING MENDENGAR KATA PROPOLIS, TAPI SEBENARNYA APA ITU PROPOLIS ? DAN APA MANFAATNYA BAGI TUBUH KITA ?</h2> --}}
                    </div>
                </div>
            </div>
        </div><!-- End Breadcrumbs -->

        <div class="container mt-3 mb-3">

            {{-- Product Thumbnail, Price. Short Desc --}}
            <div class="row">
               <div class="col-6 p-5">
                  <img src="{{ $data['images'][0]['image_link'] }}" alt="produk" style="width: 100%;" class="rounded shadow">
               </div>
               <div class="col-6 p-5 m-auto">
                  <h2 class="font-weight-bold text-warning">{{ $data['name'] }}</h2>
                  <h4>Rp. {{ number_format($data['price'], 0)}}</h4>
                  <p class="mt-5">{{ $data['short_description'] }}</p>
                  <a href="{{ 'https://metapropolis.resellr.id/product/'. $data['slug'] }}" class="btn btn-warning bg-warning.bg-gradient rounded-pill text-white shadow mt-2">Beli Sekarang</a>
               </div>
            </div>


            {{-- Long Desc --}}
            <div class="long-desc p-5">
               <h5><b>Deskripsi Lengkap</b></h5>
               <hr>
               {!! $data['long_description'] !!}
            </div>


        </div>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('landing.layouts.footer')

    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })

    </script>

</body>

</html>
