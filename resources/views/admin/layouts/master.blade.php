<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>
        @stack('title')
    </title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{asset('image_propolis/1669617335-75x75.png')}}" />
      <link rel="stylesheet" href="{{asset('admin/html/assets/css/backend-plugin.min.css')}}">
      <link rel="stylesheet" href="{{asset('admin/html/assets/css/backend.css?v=1.0.0')}}">
      <link rel="stylesheet" href="{{asset('admin/html/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}">
      <link rel="stylesheet" href="{{asset('admin/html/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('admin/html/assets/vendor/remixicon/fonts/remixicon.css')}}"> 
      <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">

      @yield('styles')
      
      <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
      
      <style>
        trix-toolbar [data-trix-button-group="file-tools"]{
          display: none;
        }
      </style>
  </head>
  <body class="  ">
    <!-- loader Start -->
    {{-- <div id="loading">
          <div id="loading-center">
          </div>
    </div> --}}
    <!-- loader END -->
    <!-- Wrapper Start -->
<div class="wrapper">
      
      @include('admin.layouts.sidebar')
      
      
      @include('admin.layouts.topbar')

      
      
    <div class="content-page">
     @yield('content')
    </div>

</div>
    <!-- Wrapper End-->
    @include('admin.layouts.footer')
    <!-- Backend Bundle JavaScript -->
    <script src="{{asset('admin/html/assets/js/backend-bundle.min.js')}}"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="{{asset('admin/html/assets/js/table-treeview.js')}}"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="{{asset('admin/html/assets/js/customizer.js')}}"></script>
    
    <!-- Chart Custom JavaScript -->
    <script async src="{{asset('admin/html/assets/js/chart-custom.js')}}"></script>
    
    <!-- app JavaScript -->
    <script src="{{asset('admin/html/assets/js/app.js')}}"></script>

    <script>
      document.addEventListener('trix-file-accep' , function(e) {
        e.preventDefault();
        
      })
    </script>

    @stack('scripts')
  </body>
</html>