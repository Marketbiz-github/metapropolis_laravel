<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register Reseller</title>

    <!-- Favicon -->
    <link href="{{ asset('image_propolis/1669617335-75x75.png')}}" rel="icon">
    <link href="{{ asset('image_propolis/1669617335-75x75.png')}}" rel="apple-touch-icon">
    <link rel="stylesheet" href="{{ asset('admin/html/assets/css/backend-plugin.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/html/assets/css/backend.css?v=1.0.0')}}">
    <link rel="stylesheet" href="{{ asset('admin/html/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet"
        href="{{ asset('admin/html/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/html/assets/vendor/remixicon/fonts/remixicon.css')}}">
    <style>
        .float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:16px;
}

    </style>
</head>

<body style="background-color: #282780; background-image: url({{ asset('landing/group.png') }}); background-size: cover; background-position: bottom; background-repeat-y: no-repeat;">
    <div class="wrapper">
        <section class="login-content">
            <div class="container">
                <div class="row align-items-center justify-content-center height-self-center">
                    <div class="col-md-8">
                        <div class="card auth-card" style="opacity: 0.93;">
                            @if(session()->has('name'))
                            <input type="hidden" id="success_name" value="{{ session('name') }}">
                            @endif
                            @if(session()->has('message'))
                            <div id="success-register" class="alert alert-success col-lg-12" role="alert">
                                {{session('message')}}
                            </div>
                            @endif
                            <div class="card-body p-0">
                                <div class="p-3">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <h5 class="mb-3 mt-2" style="color: #282780; font-weight: 900;">FORM PENDAFTARAN</h5>
                                            <span class="d-block mb-2" style="line-height: 1.3; font-size: 18px;">Menjadi pebisnis adalah impian semua orang, namun pilihan bisnis apa yang tepat untuk Anda, dan bagaimana mempromosikan bisnis Anda di Online?</span>
                                            <span class="d-block mb-2" style="line-height: 1.3; font-size: 18px;">Yuk ikutan di webinar GRATIS pada hari Senin,3 juli 2023 Jam 14.00 - 16.00 WIB</span>
                                            <span class="d-block mb-2" style="line-height: 1.3; font-size: 18px;">Lengkapi Form pendaftaran di bawah ini, dan Anda akan langsung mendapatkan website toko online dari Meta Propolis <strong>GRATIS</strong></span>
                                            <img src="{{ asset('landing/eflyer-webinar-meta-propolis.png') }}"
                                                class="img-fluid mt-3" alt="">
                                        </div>
                                        <div class="m-3" style="width:100%; rgb(33,33,113); background: linear-gradient(292deg, rgba(33,33,113,1) 27%, rgba(53,52,168,1) 100%); border-radius: 7px; box-shadow: 5px 11px 12px #00000041;">
                                            <form action="{{ route('webinar.store') }}" method="post" class="px-4 pt-3 pb-4">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="name" class="text-white" style="font-size: 14px">Nama</label>
                                                            <input type="text" id="name" name="name" class="form-control" placeholder="Nama">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="phone" class="text-white" style="font-size: 14px">No. Telepon/HP</label>
                                                            <input type="text" id="phone" name="phone" class="form-control" placeholder="08123********">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="email" class="text-white" style="font-size: 14px">Email</label>
                                                            <input type="text" id="email" name="email" class="form-control" placeholder="example@mail.com">
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <button type="submit" class="btn btn-primary mt-3" style="background-color: #DCAB3A; border-color: #DCAB3A;">Daftar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    {{-- FLOATING WHATSAPP --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=6282125299227&text=Hallo%20Metapropolis"
        class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>

    <!-- Backend Bundle JavaScript -->
    <script src="{{ asset('admin/html/assets/js/backend-bundle.min.js')}}"></script>

    <!-- Table Treeview JavaScript -->
    <script src="{{ asset('admin/html/assets/js/table-treeview.js')}}"></script>

    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('admin/html/assets/js/customizer.js')}}"></script>

    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('admin/html/assets/js/chart-custom.js')}}"></script>

    <!-- app JavaScript -->
    <script src="{{ asset('admin/html/assets/js/app.js')}}"></script>

    <script>
        if(document.getElementById('success-register')){
            let name = document.getElementById('success_name').value;
                name = name.split(' ').join('%20');
            console.log(name);
            location.href = 'https://wa.me/6282125299227?text=Halo%20nama%20saya%20'+name+',%0Asaya%20telah%20mendaftar%20di%20event%20webinar%20meta%20propolis';
        }
    </script>
</body>

</html>