
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Blank Page &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('assets/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/modules/fontawesome/css/all.min.css')}}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{asset('assets/modules/izitoast/css/iziToast.min.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>

      <!-- Nav Bar -->
      @include ('layout.navbar')
      @include ('layout.sidebar')
     

     <!-- End Nav BAr  -->

      <!-- Main Content -->
      <div class="main-content">
        @yield ('content')
        <!-- <section class="section">
          <div class="section-header">
            <h1>Blank Page</h1>
          </div>

          <div class="section-body">
          </div>
        </section> -->
      </div>
      @include ('layout.footer')
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{asset('assets/modules/jquery.min.js')}}"></script>
  <script src="{{asset('assets/modules/popper.js')}}"></script>
  <script src="{{asset('assets/modules/tooltip.js')}}"></script>
  <script src="{{asset('assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('assets/modules/moment.min.js')}}"></script>
  <script src="{{asset('assets/js/stisla.js')}}"></script>
  
  <!-- JS Libraies -->
  <script src="{{asset('assets/modules/izitoast/js/iziToast.min.js')}}"></script>
  <script src="{{asset('assets/modules/sweetalert/sweetalert.min.js')}}"></script>

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="{{asset('assets/js/scripts.js')}}"></script>
  <script src="{{asset('assets/js/custom.js')}}"></script>


  <script>
    @if(session('sukses'))
    iziToast.success({
    title: 'berhail',
    message: '{{session('sukses')}}',
    position: 'topRight'});
    @endif
  </script>

  <script>
    @if(session('edit'))
    iziToast.warning({
    title: 'Boleh',
    message: '{{session('edit')}}',
    position: 'topRight'});
    @endif
  </script>

  <script>
    @if(session('adios'))
    iziToast.warning({
    title: 'Bye',
    message: '{{session('adios')}}',
    position: 'topRight'});
    @endif
  </script>
    
  @stack('script')
  
</body>
</html>