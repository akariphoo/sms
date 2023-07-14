<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags --> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Regal Admin</title>
    {{-- link with css --}}    
  <link rel="stylesheet" href="{{ asset('css/all.css') }}">
  <link rel="shortcut icon" href="{{ asset('images/s-logo.png') }}" />
  {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" /> --}}
</head>
<body>
  <div class="container-scroller">
    <!-- for nav -->
        @include('admin-site.pages.nav')
    <!-- for nav -->
    <div class="container-fluid page-body-wrapper">
      <!-- for sidebar -->
      @include('admin-site.pages.sidebar')
      <!-- for sidebar -->

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12 mb-4 mb-xl-0">
              {{-- <h4 class="font-weight-bold text-dark">Hi, welcome back!</h4>
              <p class="font-weight-normal mb-2 text-muted">APRIL 1, 2019</p> --}}
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-xl-9 d-flex grid-margin stretch-card mx-auto">
              <div class="card">
                <div class="card-body">
                  @yield('content')
                                       
                </div>
              </div>
          </div>
          </div>
          
        </div>
        <!-- content-wrapper ends -->

        <!-- footer -->
        @include('admin-site.pages.footer')
        <!-- footer -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  {{-- link with js --}}
    <script src="{{ asset('js/all.js') }}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script> --}}
    
      @if (Session::has('success'))
        <script>
          toastr.success("{{ Session::get('success') }}");
        </script>
      @endif
  
</body>

</html>

