<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>SMK UA</title>
    <!--  
    Favicons
    =============================================
    --> 
 <link rel="apple-touch-icon" sizes="57x57" href="{{asset('master/assets/images/favicons/logo.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('master/assets/images/favicons/logo.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('master/assets/images/favicons/logo.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('master/assets/images/favicons/logo.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('master/assets/images/favicons/logo.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('master/assets/images/favicons/logo.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('master/assets/images/favicons/logo.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('master/assets/images/favicons/logo.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('master/assets/images/favicons/logo.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('master/assets/images/favicons/logo.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('master/assets/images/favicons/logo.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('master/assets/images/favicons/logo.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('master/assets/images/favicons/logo.png')}}">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('master/assets/images/favicons/logo.png')}}">
    <meta name="theme-color" content="#ffffff">
    
    <!--  
    Stylesheets
    =============================================
    
    -->
    <!-- Default stylesheets-->
    <link href="{{asset('master/assets/lib/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="{{asset('master/assets/lib/animate.css/animate.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('master/assets/lib/components-font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('master/assets/lib/et-line-font/et-line-font.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('master/assets/lib/flexslider/flexslider.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('master/assets/lib/owl.carousel/dist/assets/owl.carousel.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('master/assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('master/assets/lib/magnific-popup/dist/magnific-popup.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('master/assets/lib/simple-text-rotator/simpletextrotator.css')}}" rel="stylesheet" type="text/css">
    <!-- Main stylesheet and color file-->
    <link href="{{asset('master/assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <link id="color-scheme" href="{{asset('master/assets/css/colors/default.css')}}" rel="stylesheet" type="text/css">


  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      
      <!-- header -->
      @include('layout.header')

      @yield('isi')

      <!-- footer -->
      @include('layout.footer')

      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    

    <!--  
    JavaScripts
    =============================================
    --> 
    <script src="{{asset('master/assets/lib/jquery/dist/jquery.js ')}}" type="text/javascript"></script>
    <script src="{{asset('master/assets/lib/bootstrap/dist/js/bootstrap.min.js ')}}" type="text/javascript"></script>
    <script src="{{asset('master/assets/lib/wow/dist/wow.js ')}}" type="text/javascript"></script>
    <script src="{{asset('master/assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js')}}" type="text/javascript"></script>
    <script src="{{asset('master/assets/lib/isotope/dist/isotope.pkgd.js ')}}" type="text/javascript"></script>
    <script src="{{asset('master/assets/lib/imagesloaded/imagesloaded.pkgd.js ')}}" type="text/javascript"></script>
    <script src="{{asset('master/assets/lib/flexslider/jquery.flexslider.js ')}}" type="text/javascript"></script>
    <script src="{{asset('master/assets/lib/owl.carousel/dist/owl.carousel.min.js ')}}" type="text/javascript"></script>
    <script src="{{asset('master/assets/lib/smoothscroll.js ')}}" type="text/javascript"></script>
    <script src="{{asset('master/assets/lib/magnific-popup/dist/jquery.magnific-popup.js ')}}" type="text/javascript"></script>
    <script src="{{asset('master/assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js ')}}" type="text/javascript"></script>
    <script src="{{asset('master/assets/js/plugins.js ')}}" type="text/javascript"></script>
    <script src="{{asset('master/assets/js/main.js ')}}" type="text/javascript"></script>

  </body>
</html>