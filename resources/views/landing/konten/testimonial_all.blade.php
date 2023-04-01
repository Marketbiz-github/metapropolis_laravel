<!DOCTYPE html>
<html lang="en">

@section('title')
Testimonial Meta Propolis - Meta Propolis
@endsection
@include('landing.layouts.header')
<style>
    .gambar_o {
        width: 100%;
        height: auto;
    }

    .tab {
        overflow: hidden;
        border: none;
        background-color: transparent;
        padding: 20px 0;
    }

    /* Style the buttons inside the tab */
    .tab button {
        margin: 0 20px;
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ffc451;
    }

    /* Create an active/current tablink class */
    .tab button.active {
        background-color: #ffc451;
        font-weight: bold;
        border-radius: 25px;
        box-shadow: 3px 4px 33px -11px rgba(0, 0, 0, 0.59);
        -webkit-box-shadow: 3px 4px 33px -11px rgba(0, 0, 0, 0.59);
        -moz-box-shadow: 3px 4px 33px -11px rgba(0, 0, 0, 0.59);
    }

    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 6px 12px;
        border: none;
        border-top: none;
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

                <div class="tab nav nav-pills justify-content-center mb-3" id="pills-tab" role="tablist">
                    <button class="tablinks active" onclick="openCity(event, 'Video')">Video</button>
                    <button class="tablinks" onclick="openCity(event, 'Whatsapp')">Whatsapp</button>
                </div>

                <div id="Video" class="tabcontent">
                    <div class="row">
                        @foreach($youtube as $data)
                        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="10">
                            {!! $data->data_testimoni !!}
                            <p class="">
                                {!! $data->kutipan !!}
                            </p>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div id="Whatsapp" class="tabcontent">
                    <div class="row">
                        @foreach($image as $data)
                        <div class="col-lg-3" data-aos="fade-left" data-aos-delay="10">
                            <img src="{{asset('storage/gambar_testimoni/'. $data->data_testimoni)}}"
                                height="auto" alt="" style="max-width: 100%;" loading="lazy">
                            <p class="">
                                {!! $data->kutipan !!}
                            </p>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>


            </div>
        </section>



    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('landing.layouts.footer')

    <script>
        let activeFirst = $('.tab .active').text();
        console.log(activeFirst);
        document.getElementById(activeFirst).style.display = "block";


        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

    </script>

</body>

</html>
