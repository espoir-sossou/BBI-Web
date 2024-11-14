<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Bolivie Business Inter</title>
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('Frontend/Home/assets/imgs/logo_bbi.png') }}">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free HTML Templates" name="keywords">
        <meta content="Free HTML Templates" name="description">

        <!-- Villa Bootstrap core CSS -->
    <link href="Generales/Villa/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="Generales/Villa/assets/css/fontawesome.css">
    <link rel="stylesheet" href="Generales/Villa/assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="Generales/Villa/assets/css/owl.css">
    <link rel="stylesheet" href="Generales/Villa/assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>


    <link rel="stylesheet" href="Auberge/css/style.css">
    <link rel="stylesheet" href="Auberge/css/responsive.css">


        <!-- Favicon -->
        <link href="Generales/img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="Generales/lib/animate/animate.min.css" rel="stylesheet">
        <link href="Generales/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="Generales/css/style.css" rel="stylesheet">
    </head>
<body>
    <!-- *****
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  Preloader End ***** -->

@include('Layout.Frontend.Partials.topbar')

@include('Layout.Frontend.Partials.navbar')

@yield('content')

@include('Layout.Frontend.Partials.footer')

<!-- Back to Top -->
<a href="#" class="btn  back-to-top" style="background-color:#fd7e14; color:white"><i class="fa fa-angle-double-up"></i></a>


</body>
</html>
