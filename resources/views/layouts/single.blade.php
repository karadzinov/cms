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

    @yield('opengraph')

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!--// bootstrap-css -->
    <!-- css -->
    <link rel="stylesheet" href="/css/style.css" type="text/css" media="all" />
    <!--// css -->

    <!-- font -->
    <link href='//fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- //font -->
    <script src="/js/jquery-1.11.1.min.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script type="text/javascript" src="/js/move-top.js"></script>
    <script type="text/javascript" src="/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!--animate-->
    <link href="/css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->
    <link href="/css/component.css" rel="stylesheet" type="text/css"  />
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
	<script type="text/javascript">var switchTo5x=true;</script>
	<script type="text/javascript" id="st_insights_js" src="http://w.sharethis.com/button/buttons.js?publisher=9f3fdeab-fbf7-49cc-b0db-e63a00f4d84b"></script>
	<script type="text/javascript">stLight.options({publisher: "9f3fdeab-fbf7-49cc-b0db-e63a00f4d84b", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
</head>
<body class="cbp-spmenu-push">
<div class="header-section">
    <!-- banner -->
    <div class="banner about-banner">
        <div class="container">
            <div class="header">
                <div class="top-nav">
                    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s2">
                        @include('main.menu')



                    </nav>
                    <div class="main buttonset">
                        <!-- Class "cbp-spmenu-open" gets applied to menu and "cbp-spmenu-push-toleft" or "cbp-spmenu-push-toright" to the body -->
                        <button id="showRightPush"><img src="/images/menu.png" alt=""/></button>
                        <!--<span class="menu"></span>-->
                    </div>
                <!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
                    <script src="/js/classie.js"></script>
                    <script>
                        var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
                                showRightPush = document.getElementById( 'showRightPush' ),
                                body = document.body;

                        showRightPush.onclick = function() {
                            classie.toggle( this, 'active' );
                            classie.toggle( body, 'cbp-spmenu-push-toleft' );
                            classie.toggle( menuRight, 'cbp-spmenu-open' );
                            disableOther( 'showRightPush' );
                        };

                        function disableOther( button ) {
                            if( button !== 'showRightPush' ) {
                                classie.toggle( showRightPush, 'disabled' );
                            }
                        }
                    </script>
                </div>
                <div class="logo wow fadeInDown animated logoup" data-wow-delay=".5s">
                    <h1><a href="/"><img src="/assets/img/logo/thumbnails/{{ $settings->logo }}" style="max-height: 80px;"></a></h1>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //banner -->
@yield('content')


</div>
<!--smooth-scrolling-of-move-up-->
<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','http://frutismoothie.mk/js/analytics.js','ga');



  ga('create', 'UA-88310108-1', 'auto');

  ga('send', 'pageview');



</script>
<script type="text/javascript">
    $(document).ready(function () {
        /*
         var defaults = {</div>
<!--smooth-scrolling-of-move-up-->
<script type="text/javascript">
    $(document).ready(function () {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<script id="dsq-count-scr" src="//frutismoothie.disqus.com/count.js" async></script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1534122373505670";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
@yield('scripts')
</body>
</html>
