<!DOCTYPE html>
<html lang="en">

@section('title')
Faq - Meta Propolis
@endsection


@include('landing.layouts.header')
<style>
    .gambar_o {
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
            <a href="{{route('produk_meta')}}" class="get-started-btn scrollto"><i class="fa fa-shopping-cart"></i>
                Beli</a>

        </div>
    </header><!-- End Header -->



    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div id="hero2" class="d-flex align-items-center">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="50">
                    <div class="col-xl-6 col-lg-8">
                        <h1>Faq<span> META PROPOLIS</span></h1>
                        {{-- <h2>KITA SERING MENDENGAR KATA PROPOLIS, TAPI SEBENARNYA APA ITU PROPOLIS ? DAN APA MANFAATNYA BAGI TUBUH KITA ?</h2> --}}
                    </div>
                </div>
            </div>
        </div><!-- End Breadcrumbs -->
        <section id="recent-blog-posts" class="recent-blog-posts">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Faq</h2>
                    <p>FREQUENTLY ASKED QUESTIONS</p>
                </div>

                {{-- <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset('image_propolis/produk1.JPG')}}" class="gambar_o" alt="">
            </div>
            <div class="col-lg-6 mt-2" data-aos="fade-left" data-aos-delay="10">
                @foreach($data_faq as $faq)

                <span class="fs-4"><b>{{$faq->pertanyaan}}</b></span><br>
                <span>{{$faq->jawaban}}</span><br><br>

                @endforeach

            </div>

            </div> --}}

            <div class="accordion" id="accordionExample">
                @php
                $nomor = 1;
                @endphp
                @foreach ($data_faq as $faq)
                @if ($nomor == 1)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            {{ $faq->pertanyaan }}
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            {!! $faq->jawaban !!}
                        </div>
                    </div>
                </div>
                @php
                $nomor++;
                @endphp
                @else
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading{{$nomor}}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse{{$nomor}}" aria-expanded="false" aria-controls="collapse{{$nomor}}">
                            {{ $faq->pertanyaan }}
                        </button>
                    </h2>
                    <div id="collapse{{$nomor}}" class="accordion-collapse collapse" aria-labelledby="heading{{$nomor}}"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            {!! $faq->jawaban !!}
                        </div>
                    </div>
                </div>
                @php
                $nomor++;
                @endphp
                @endif
                @endforeach
            </div>

            </div>
        </section>



    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('landing.layouts.footer')

</body>

</html>
