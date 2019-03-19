<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{$ayar->site_adi}}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/{{$ayar->favicon}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/anasayfa/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/anasayfa/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/anasayfa/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/anasayfa/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/anasayfa/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/anasayfa/vendor/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="/anasayfa/vendor/revolution/css/navigation.css">
    <link rel="stylesheet" type="text/css" href="/anasayfa/vendor/revolution/css/settings.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/anasayfa/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/anasayfa/vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/anasayfa/vendor/MagnificPopup/magnific-popup.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/anasayfa/css/util.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/anasayfa/css/main_mavi.css">
    <!--===============================================================================================-->
    @yield('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">

</head>
<body class="animsition">

<header>
@include('anasayfa.header')
</header>

@if(request()->route()->getName()=='anasayfa')
@include('anasayfa.slider')
@endif

@yield('icerik')

@include('anasayfa.footer')

<!--===============================================================================================-->
<script src="/anasayfa/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="/anasayfa/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="/anasayfa/vendor/bootstrap/js/popper.js"></script>
<script src="/anasayfa/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="/anasayfa/vendor/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="/anasayfa/vendor/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="/anasayfa/vendor/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="/anasayfa/vendor/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="/anasayfa/vendor/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="/anasayfa/vendor/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="/anasayfa/vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="/anasayfa/vendor/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="/anasayfa/vendor/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="/anasayfa/vendor/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="/anasayfa/vendor/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="/anasayfa/js/revo-custom.js"></script>
<!--===============================================================================================-->
<script src="/anasayfa/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="/anasayfa/vendor/parallax100/parallax100.js"></script>
<!--===============================================================================================-->
<script src="/anasayfa/vendor/waypoint/jquery.waypoints.min.js"></script>
<!--===============================================================================================-->
<script src="/anasayfa/vendor/countterup/jquery.counterup.min.js"></script>
<!--===============================================================================================-->
<script src="/anasayfa/vendor/slick/slick.min.js"></script>
<script src="/anasayfa/js/slick-custom.js"></script>
<!--===============================================================================================-->
<script src="/anasayfa/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
<script src="/anasayfa/js/main.js"></script>
@yield('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
@include('sweetalert::alert')
<link rel="icon" href="{{$ayar->favicon}}" type="image/x-icon"/>
</body>
</html>