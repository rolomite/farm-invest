<!DOCTYPE html>
<html lang="zxx">
<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Grow wealth with cocoa investment">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--====== Title ======-->
    <title>{{ config('app.name') }} - Cocoa Farming and Investment</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="/assets/images/favicon.ico" type="image/png">
    <!--====== Google Fonts ======-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!--====== Flaticon css ======-->
    <link rel="stylesheet" href="/assets/fonts/flaticon/flaticon_gadden.css">
    <!--====== FontAwesome css ======-->
    <link rel="stylesheet" href="/assets/fonts/fontawesome/css/all.min.css">
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
    <!--====== magnific-popup css ======-->
    <link rel="stylesheet" href="/assets/vendor/magnific-popup/dist/magnific-popup.css">
    <!--====== Slick-popup css ======-->
    <link rel="stylesheet" href="/assets/vendor/slick/slick.css">
    <!--====== Jquery UI css ======-->
    <link rel="stylesheet" href="/assets/vendor/jquery-ui/jquery-ui.min.css">
    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="/assets/vendor/nice-select/css/nice-select.css">
    <!--====== Animate css ======-->
    <link rel="stylesheet" href="/assets/vendor/animate.css">
    <!--====== Default css ======-->
    <link rel="stylesheet" href="/assets/css/default.css">
    <!--====== Style css ======-->
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<!--====== Start Preloader ======-->
<div class="preloader">
    <div class="loader">
        <div class="pre-shadow"></div>
        <div class="pre-box"></div>
    </div>
</div><!--====== End Preloader ======-->
<!--====== Start Page-title-area section ======-->
<section class="page-title-area text-white bg_cover" style="background-image: url(assets/images/bg/page-bg-1.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">{{ $title ?? null }}</h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="/">Home</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">{{ $title }}</span>
            </div>
        </div>
    </div>
</section>
<!--====== End Page-title-area section ======-->
<!--====== Start Contact Info section ======-->
<section class="contact-info-section pt-100">
    {{ $slot }}
</section>
<!--====== End Contact Info section ======-->

<x-block.footer />
<!--====== Back To Top  ======-->
<a href="#" class="back-to-top" ><i class="far fa-angle-up"></i></a>
<!--====== Jquery js ======-->
<script src="/assets/vendor/jquery-3.6.0.min.js"></script>
<!--====== Bootstrap js ======-->
<script src="/assets/vendor/popper/popper.min.js"></script>
<!--====== Bootstrap js ======-->
<script src="/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--====== Slick js ======-->
<script src="/assets/vendor/slick/slick.min.js"></script>
<!--====== Magnific js ======-->
<script src="/assets/vendor/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<!--====== Isotope js ======-->
<script src="/assets/vendor/isotope.min.js"></script>
<!--====== Imagesloaded js ======-->
<script src="/assets/vendor/imagesloaded.min.js"></script>
<!--====== Counterup js ======-->
<script src="/assets/vendor/jquery.counterup.min.js"></script>
<!--====== Waypoints js ======-->
<script src="/assets/vendor/jquery.waypoints.js"></script>
<!--====== Nice-select js ======-->
<script src="/assets/vendor/nice-select/js/jquery.nice-select.min.js"></script>
<!--====== jquery UI js ======-->
<script src="/assets/vendor/jquery-ui/jquery-ui.min.js"></script>
<!--====== WOW js ======-->
<script src="/assets/vendor/wow.min.js"></script>
<!--====== Main js ======-->
<script src="/assets/js/theme.js"></script>
</body>
</html>
