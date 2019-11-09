<!DOCTYPE html>
<html lang="en">
<head>
    <title>luxury</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{asset('')}}">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="plugins/slick-1.8.0/slick.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <link rel="stylesheet" type="text/css" href="styles/blog_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
    <link type="text/css" rel="stylesheet" href="css/slick.css"/>
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="styles/cart_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/cart_responsive.css">

    <link type="text/css" rel="stylesheet" href="css/css.css"/>

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

    <!-- Font Awesome Icon -->


    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
    <style>
        .header{
            height: 293px!important;
        }
        .new_arrivals{
            padding-top: 0;
        }
        .product .product-body{
            height: 120px;
        }
        .bg1{
        }

        .bg1{
            background-image: url("anh_ruu.jpeg");
            background-attachment: fixed;
            width: 100%;
            height:90vh;
            opacity: 0.8;
        }
        .table .thead-primary{
            background: #0e8ce4;
        }

    </style>
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5d1439b936eab97211197033/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
</head>

<body>

<div class="super_container">

    <!-- Header -->

   @include('layouts.layout.header')

    <!-- Banner -->


    <!-- Characteristics -->

     <!-- Banner2 -->


   @yield('content')

    <!-- Footer -->
    <div class="newsletter">

    </div>

    @include('layouts.layout.footer')
    <!-- Copyright -->
    @include('layouts.layout.copyright')

</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/slick-1.8.0/slick.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
<script src="js/blog_custom.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>

<script src="jss/jquery.min.js"></script>
<script src="jss/bootstrap.min.js"></script>
<script src="jss/slick.min.js"></script>
<script src="jss/nouislider.min.js"></script>
<script src="jss/jquery.zoom.min.js"></script>
<script src="jss/main.js"></script>
</body>

</html>
