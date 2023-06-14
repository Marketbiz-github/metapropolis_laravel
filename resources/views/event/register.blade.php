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
</head>

<body style="background-color: #282780; background-image: url({{ asset('landing/group.png') }}); background-size: cover; background-position: bottom; background-repeat-y: no-repeat;">
    <div class="wrapper">
        <section class="login-content">
            <div class="container">
                <div class="row align-items-center justify-content-center height-self-center">
                    <div class="col-md-5">
                        <div class="card auth-card" style="opacity: 0.93;">
                            @if(session()->has('message'))
                            <div class="alert alert-danger col-lg-12" role="alert">
                                {{session('message')}}
                            </div>
                            @endif
                            <div class="card-body p-0">
                                <div class="p-3">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <h5 class="mb-3 mt-2" style="color: #282780; font-weight: 900;">FORM PENDAFTARAN</h5>
                                            <img src="{{ asset('landing/eflyer-webinar-meta-propolis.png') }}"
                                                class="img-fluid" alt="">
                                        </div>
                                        <div class="m-3" style="background: rgb(33,33,113); background: linear-gradient(292deg, rgba(33,33,113,1) 27%, rgba(53,52,168,1) 100%); border-radius: 7px; box-shadow: 5px 11px 12px #00000041;">
                                            <form action="{{ route('event.register.store', $event->slug) }}" method="post" class="px-4 pt-3 pb-4">
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
                                                    <div class="col-md-12">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label text-white" for="defaultCheck1">
                                                              Saya setuju dengan Syarat & Ketentuan
                                                            </label>
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
</body>

</html>