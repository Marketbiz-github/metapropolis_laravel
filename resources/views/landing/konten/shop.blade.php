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
                        <h1>Produk <span>META PROPOLIS</span></h1>
                        {{-- <h2>KITA SERING MENDENGAR KATA PROPOLIS, TAPI SEBENARNYA APA ITU PROPOLIS ? DAN APA MANFAATNYA BAGI TUBUH KITA ?</h2> --}}
                    </div>
                </div>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Section ======= -->
        <section id="produk" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Produk</h2>
                    <p>Produk Kita</p>
                </div>

                <div class="row">
                    @foreach ($product as $data)
                    <div class="col-4">
                        <div class="card w-100 border-0 shadow" style="width: 18rem;">
                            <img class="card-img-top p-2 rounded" src="{{$data['images'][1]['image_link']}}"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{ $data['name'] }}</h5>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="card-text text-primary" style="font-size: 20px;">Rp.
                                            {{ number_format($data['price'], 0)}}</p>
                                    </div>
                                    <div class="col-6">
                                        <a href="{{ route('detail.product' , $data['id']) }}"
                                            class="btn btn-warning btn-sm float-end text-white">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Portfolio Section -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('landing.layouts.footer')

</body>

</html>
