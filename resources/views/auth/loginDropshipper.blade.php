<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Login Reseller</title>
      
      <!-- Favicon -->
      <link href="{{('image_propolis/1669617335-75x75.png')}}" rel="icon">
      <link href="{{('image_propolis/1669617335-75x75.png')}}" rel="apple-touch-icon">
      <link rel="stylesheet" href="{{('admin/html/assets/css/backend-plugin.min.css')}}">
      <link rel="stylesheet" href="{{('admin/html/assets/css/backend.css?v=1.0.0')}}">
      <link rel="stylesheet" href="{{('admin/html/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}">
      <link rel="stylesheet" href="{{('admin/html/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')}}">
      <link rel="stylesheet" href="{{('admin/html/assets/vendor/remixicon/fonts/remixicon.css')}}"> 
  </head>
  <body class=" ">
    <!-- loader Start -->
    {{-- <div id="loading">
          <div id="loading-center">
          </div>
    </div> --}}
    <!-- loader END -->
    
      <div class="wrapper">
      <section class="login-content">
         <div class="container">
            <div class="row align-items-center justify-content-center height-self-center">
               <div class="col-lg-12">
                  <div class="card auth-card shadow-lg">
                    @if(session()->has('login_error'))
                    <div class="alert alert-danger col-lg-12" role="alert">
                        {{session('login_error')}}
                      </div>
                    @endif
                     <div class="card-body p-0">
                        <div class="d-flex align-items-center auth-content">
                          <div class="col-lg-7 content-right p-0">
                              <img src="{{asset('image_propolis/banner-login.jpg')}}" class="img-fluid image-right" alt="">
                           </div>
                           <div class="col-lg-5 align-self-center">
                              <div class="p-3">
                                 <h2 class="mb-4">Login Dropshipper</h2>
                                 {{-- <p>Login to stay connected.</p> --}}
                                 <form action="https://metapropolis.resellr.id/login-reseller-partner" method="post">
                                    @csrf
                                    <div class="row">
                                       <div class="col-lg-12">
                                          <div class="floating-label form-group">
                                             <input class="floating-input form-control" autofocus required name="email" type="email" placeholder="">
                                             <label>Email</label>
                                          </div>
                                       </div>
                                       <div class="col-lg-12">
                                          <div class="floating-label form-group">
                                             <input class="floating-input form-control" required name="password" type="password" placeholder="">
                                             <label>Password</label>
                                          </div>
                                       </div>
                                       {{-- <div class="col-lg-6">
                                          <div class="custom-control custom-checkbox mb-3">
                                             <input type="checkbox" class="custom-control-input" id="customCheck1">
                                             <label class="custom-control-label control-label-1" for="customCheck1">Remember Me</label>
                                          </div>
                                       </div> --}}
                                       {{-- <div class="col-lg-6">
                                          <a href="auth-recoverpw.html" class="text-primary float-right">Forgot Password?</a>
                                       </div> --}}
                                    </div>
                                    <button type="submit" class="btn btn-primary">Login</button>
                                    {{-- <p class="mt-3">
                                       Belum  Punya Akun <a href="{{route('register')}}" class="text-primary">Register</a>
                                    </p> --}}
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
    <script src="{{('admin/html/assets/js/backend-bundle.min.js')}}"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="{{('admin/html/assets/js/table-treeview.js')}}"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="{{('admin/html/assets/js/customizer.js')}}"></script>
    
    <!-- Chart Custom JavaScript -->
    <script async src="{{('admin/html/assets/js/chart-custom.js')}}"></script>
    
    <!-- app JavaScript -->
    <script src="{{('admin/html/assets/js/app.js')}}"></script>
  </body>
</html>