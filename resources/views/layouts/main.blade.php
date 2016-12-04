<!DOCTYPE html>
<html>
<head>
    <title>Fruti Smoothie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="sokovi, сокови, природно цедени сокови, овошни сокови, 100% природни"/>

    <meta name="author" content="Fruti Smoothie">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Fruti Smoothie">
    <meta itemprop="description" content="{!!  str_limit(strip_tags($settings->description), 155) !!}">
    <meta itemprop="image" content="http://frutismoothie.mk/assets/img/logo/thumbnails/{{ $settings->logo }}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@FrutiSmoothie">
    <meta name="twitter:title" content="Fruti Smoothie">
    <meta name="twitter:description" content="{!!  str_limit(strip_tags($settings->description), 155) !!}">
    <meta name="twitter:creator" content="@AccSuccess">
    <meta name="twitter:image" content="http://frutismoothie.mk/assets/img/logo/thumbnails/{{ $settings->logo }}">

    <!-- Open Graph data -->
    <meta property="fb:app_id" content="1349715901726862" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:title" content="Fruti Smoothie" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://frutismoothie.mk/" />
    <meta property="og:image" content="http://frutismoothie.mk/assets/img/logo/thumbnails/{{ $settings->logo }}" />
    <meta property="og:description" content="{!!  str_limit(strip_tags($settings->description), 155) !!}" />
    <meta property="og:site_name" content="Fruti Smoothie" />

    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- bootstrap-css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <!--// bootstrap-css -->
    <!-- css -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all"/>
    <!--// css -->

    <!-- font -->
    <link href='//fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet'
          type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
          rel='stylesheet' type='text/css'>
    <!-- //font -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>
    <!--animate-->
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->
    <link href="css/component.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>
</head>
<body class="cbp-spmenu-push">
<div class="header-section">
    <!-- banner -->
    <div class="banner">
        <div class="container">
            <div class="header">
                <div class="top-nav">
                    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s2">
                        @include('main.menu')
                    </nav>
                    <div class="main buttonset">
                        <!-- Class "cbp-spmenu-open" gets applied to menu and "cbp-spmenu-push-toleft" or "cbp-spmenu-push-toright" to the body -->
                        <button id="showRightPush"><img src="images/menu.png" alt=""/></button>
                        <!--<span class="menu"></span>-->
                    </div>
                <!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
                    <script src="js/classie.js"></script>
                    <script>
                        var menuRight = document.getElementById('cbp-spmenu-s2'),
                                showRightPush = document.getElementById('showRightPush'),
                                body = document.body;

                        showRightPush.onclick = function () {
                            classie.toggle(this, 'active');
                            classie.toggle(body, 'cbp-spmenu-push-toleft');
                            classie.toggle(menuRight, 'cbp-spmenu-open');
                            disableOther('showRightPush');
                        };

                        function disableOther(button) {
                            if (button !== 'showRightPush') {
                                classie.toggle(showRightPush, 'disabled');
                            }
                        }
                    </script>
                </div>
                <div class="logo wow fadeInDown animated" data-wow-delay=".5s">
                    <h1><a href="/"><img src="/assets/img/logo/thumbnails/{{ $settings->logo }}"></a></h1>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- banner-info -->
            <div class="banner-info">
                <div class="col-md-5 banner-info-left wow fadeInLeft animated" data-wow-delay=".5s">
                    <img src="images/1.png" alt=""/>
                </div>
                <div class="col-md-7 banner-info-right">
                    <div class="banner-info-right-top wow fadeInRight animated" data-wow-delay=".5s">
                        <h4>Fruti Smoothie</h4>
                    </div>
                    <script src="js/responsiveslides.min.js"></script>
                    <script>
                        // You can also use "$(window).load(function() {"
                        $(function () {
                            // Slideshow 4
                            $("#slider3").responsiveSlides({
                                auto: true,
                                pager: false,
                                nav: true,
                                speed: 500,
                                namespace: "callbacks",
                                before: function () {
                                    $('.events').append("<li>before event fired.</li>");
                                },
                                after: function () {
                                    $('.events').append("<li>after event fired.</li>");
                                }
                            });
                        });
                    </script>
<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','http://frutismoothie.mk/js/analytics.js','ga');



  ga('create', 'UA-88310108-1', 'auto');

  ga('send', 'pageview');



</script>
                    <div id="top" class="callbacks_container-wrap">
                        <ul class="rslides" id="slider3">
                            @foreach($sliders as $slider)
                            <li>
                                <div class="banner-info-right-info wow fadeInRight animated" data-wow-delay=".5s">
                                    <h3>{{ $slider->title }}</h3>

                                    <p>{!! str_limit($slider->description, 250) !!}</p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="icons wow fadeInUp animated" data-wow-delay=".5s">
                        <ul>
                            @if($settings->twitter)
                                <li><a href="{{ $settings->twitter }}" class="twitter"></a></li>
                            @endif
                            @if($settings->facebook)
                                <li><a href="{{ $settings->facebook }}" class="twitter facebook"></a></li>
                            @endif
                            @if($settings->gplus)
                                <li><a href="{{ $settings->gplus }}" class="twitter chrome"></a></li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- //banner-info -->
        </div>
    </div>
    <!-- //banner -->

@yield('content')
