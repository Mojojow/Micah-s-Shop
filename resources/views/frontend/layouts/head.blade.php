<!-- Meta Tag -->
@yield('meta')
<!-- Title Tag  -->
<title>@yield('title')</title>
<!-- Favicon -->
<link rel="icon" type="image/png" href="images/favicon.png">
<!-- Web Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

<!-- StyleSheet -->
<link rel="manifest" href="/manifest.json">
<!-- Bootstrap -->

<link rel="stylesheet" type="text/css" href="/frontend/css/bootstrap.css">
<!-- Magnific Popup -->
<link rel="stylesheet" type="text/css" href="/frontend/css/magnific-popup.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" type="text/css" href="/frontend/css/font-awesome.css">
<!-- Fancybox -->
<link rel="stylesheet" type="text/css" href="/frontend/css/jquery.fancybox.min.css">
<!-- Themify Icons -->
<link rel="stylesheet" type="text/css" href="/frontend/css/themify-icons.css">
<!-- Nice Select CSS -->
<link rel="stylesheet" type="text/css" href="/frontend/css/niceselect.css">
<!-- Animate CSS -->
<link rel="stylesheet" type="text/css" href="/frontend/css/animate.css">
<!-- Flex Slider CSS -->
<link rel="stylesheet" type="text/css" href="/frontend/css/flex-slider.min.css">
<!-- Owl Carousel -->
<link rel="stylesheet" type="text/css" href="/frontend/css/owl-carousel.css">
<!-- Slicknav -->
<link rel="stylesheet" type="text/css" href="/frontend/css/slicknav.min.css">
<!-- Jquery Ui -->
<link rel="stylesheet" type="text/css" href="/frontend/css/jquery-ui.css">

<!-- Eshop StyleSheet -->
<link rel="stylesheet" type="text/css" href="/frontend/css/reset.css">
<link rel="stylesheet" type="text/css" href="/frontend/css/style.css">
<link rel="stylesheet" type="text/css" href="/frontend/css/responsive.css">
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f2e5abf393162001291e431&product=inline-share-buttons' async='async'></script>
<style>
    /* Multilevel dropdown */
    .dropdown-submenu {
    position: relative;
    }

    .dropdown-submenu>a:after {
    content: "\f0da";
    float: right;
    border: none;
    font-family: 'FontAwesome';
    }

    .dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: 0px;
    margin-left: 0px;
    }


</style>
@stack('styles')
