@extends('layouts.main')

@section('menu')
    <!-- header-container start -->
    <div class="header-container">

        <!-- header-top start -->
        <!-- classes:  -->
        <!-- "dark": dark version of header top e.g. class="header-top dark" -->
        <!-- "colored": colored version of header top e.g. class="header-top colored" -->
        <!-- ================ -->
        <div class="header-top  colored">
            <div class="container">
                <div class="row">
                    <div class="col-xs-2 col-sm-5">
                        <!-- header-top-first start -->
                        <!-- ================ -->
                        <div class="header-top-first clearfix">
                            <ul class="social-links circle small clearfix hidden-xs">
                                @if($settings->twitter)
                                    <li class="twitter"><a target="_blank" href="{{ $settings->twitter }}"><i
                                                    class="fa fa-twitter"></i></a></li>
                                @endif
                                @if($settings->skype)
                                    <li class="skype"><a target="_blank" href="{{ $settings->skype }}"><i
                                                    class="fa fa-skype"></i></a></li>
                                @endif
                                @if($settings->linkedin)
                                    <li class="linkedin"><a target="_blank" href="{{ $settings->linkedin }}"><i
                                                    class="fa fa-linkedin"></i></a></li>
                                @endif
                                @if($settings->gplus)
                                    <li class="googleplus"><a target="_blank" href="{{$settings->gplus}}"><i
                                                    class="fa fa-google-plus"></i></a></li>
                                @endif
                                @if($settings->youtube)
                                    <li class="youtube"><a target="_blank" href="{{$settings->youtube}}"><i
                                                    class="fa fa-youtube-play"></i></a></li>
                                @endif
                                @if($settings->flickr)
                                    <li class="flickr"><a target="_blank" href="{{ $settings->flickr }}"><i
                                                    class="fa fa-flickr"></i></a></li>
                                @endif
                                @if($settings->facebook)
                                    <li class="facebook"><a target="_blank" href="{{ $settings->facebook }}"><i
                                                    class="fa fa-facebook"></i></a></li>
                                @endif
                                @if($settings->pinterest)
                                    <li class="pinterest"><a target="_blank" href="{{$settings->pinterest}}"><i
                                                    class="fa fa-pinterest"></i></a></li>
                                @endif
                            </ul>
                            <div class="social-links hidden-lg hidden-md hidden-sm circle small">
                                <div class="btn-group dropdown">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i
                                                class="fa fa-share-alt"></i></button>
                                    <ul class="dropdown-menu dropdown-animation">
                                        @if($settings->twitter)
                                            <li class="twitter"><a target="_blank" href="{{ $settings->twitter }}"><i
                                                            class="fa fa-twitter"></i></a></li>
                                        @endif
                                        @if($settings->skype)
                                            <li class="skype"><a target="_blank" href="{{ $settings->skype }}"><i
                                                            class="fa fa-skype"></i></a></li>
                                        @endif
                                        @if($settings->linkedin)
                                            <li class="linkedin"><a target="_blank" href="{{ $settings->linkedin }}"><i
                                                            class="fa fa-linkedin"></i></a></li>
                                        @endif
                                        @if($settings->gplus)
                                            <li class="googleplus"><a target="_blank" href="{{$settings->gplus}}"><i
                                                            class="fa fa-google-plus"></i></a></li>
                                        @endif
                                        @if($settings->youtube)
                                            <li class="youtube"><a target="_blank" href="{{$settings->youtube}}"><i
                                                            class="fa fa-youtube-play"></i></a></li>
                                        @endif
                                        @if($settings->flickr)
                                            <li class="flickr"><a target="_blank" href="{{ $settings->flickr }}"><i
                                                            class="fa fa-flickr"></i></a></li>
                                        @endif
                                        @if($settings->facebook)
                                            <li class="facebook"><a target="_blank" href="{{ $settings->facebook }}"><i
                                                            class="fa fa-facebook"></i></a></li>
                                        @endif
                                        @if($settings->pinterest)
                                            <li class="pinterest"><a target="_blank" href="{{$settings->pinterest}}"><i
                                                            class="fa fa-pinterest"></i></a></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- header-top-first end -->
                    </div>
                    <div class="col-xs-10 col-sm-7">

                        <!-- header-top-second start -->
                        <!-- ================ -->
                        <div id="header-top-second" class="clearfix text-right">
                            <ul class="list-inline">
                                <li><i class="fa fa-phone pr-5 pl-10"></i>{{ $settings->phone }}</li>
                                <li><i class="fa fa-envelope-o pr-5 pl-10"></i> {{ $settings->email }}</li>
                            </ul>
                        </div>
                        <!-- header-top-second end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- header-top end -->

        <!-- header start -->
        <!-- classes:  -->
        <!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
        <!-- "dark": dark version of header e.g. class="header dark clearfix" -->
        <!-- "full-width": mandatory class for the full-width menu layout -->
        <!-- "centered": mandatory class for the centered logo layout -->
        <!-- ================ -->
        <header class="header  fixed    clearfix">

            <div class="container">
                <div class="row">
                    <div class="col-md-3 ">
                        <!-- header-left start -->
                        <!-- ================ -->
                        <div class="header-left clearfix">

                            <!-- logo -->
                            <div id="logo" class="logo">
                                <a href="/"><img id="logo_img" src="/assets/img/logo/{{ $settings->logo }}" style="height: 50px"
                                                 alt="Olimpik"></a>
                            </div>

                            <!-- name-and-slogan -->
                            <div class="site-slogan">

                            </div>

                        </div>
                        <!-- header-left end -->

                    </div>
                    <div class="col-md-9">

                        <!-- header-right start -->
                        <!-- ================ -->
                        <div class="header-right clearfix">

                            <!-- main-navigation start -->
                            <!-- classes: -->
                            <!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
                            <!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
                            <!-- "with-dropdown-buttons": Mandatory class that adds extra space, to the main navigation, for the search and cart dropdowns -->
                            <!-- ================ -->
                            <div class="main-navigation  animated with-dropdown-buttons">

                                <!-- navbar start -->
                                <!-- ================ -->
                                <nav class="navbar navbar-default" role="navigation">
                                    <div class="container-fluid">

                                        <!-- Toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                                    data-target="#navbar-collapse-1">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>

                                        </div>

                                        <!-- Collect the nav links, forms, and other content for toggling -->
                                        <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                            <!-- main-menu -->

                                            <ul class="nav navbar-nav ">

                                                <!-- mega-menu start -->
                                                <li class="active mega-menu">
                                                    <a href="/">Почетна</a>

                                                </li>
                                                <!-- mega-menu end -->
                                                <!-- mega-menu start -->

                                                <li class="dropdown ">
                                                    <a href="#" class="dropdown-toggle"
                                                       data-toggle="dropdown">Услуги</a>
                                                    <ul class="dropdown-menu">
                                                        @foreach($services as $service)
                                                            <li>
                                                                <a href="/services/{{ $service->slug }}">{{ $service->title }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </li>

                                                <li class="dropdown ">
                                                    <a href="/categories/all" class="dropdown-toggle"
                                                       data-toggle="dropdown">Продукти</a>
                                                    <ul class="dropdown-menu">
                                                        {!! $tree !!}
                                                    </ul>
                                                </li>

                                                @foreach($staticpages as $staticpage)
                                                    <li>
                                                        <a href="/{{ $staticpage->slug }}">{{ $staticpage->title }}</a>
                                                    </li>
                                            @endforeach
                                            <!-- header buttons -->
                                                <div class="header-dropdown-buttons">
                                                    <a href="mailto:theproject@info.com"
                                                       class="btn btn-sm hidden-xs btn-default">Contact Us <i
                                                                class="fa fa-envelope-o pl-5"></i></a>
                                                    <a href="mailto:theproject@info.com"
                                                       class="btn btn-lg visible-xs btn-block btn-default">Contact Us <i
                                                                class="fa fa-envelope-o pl-5"></i></a>
                                                </div>
                                                <!-- header buttons end-->

                                        </div>

                                    </div>
                                </nav>
                                <!-- navbar end -->

                            </div>
                            <!-- main-navigation end -->
                        </div>
                        <!-- header-right end -->

                    </div>
                </div>
            </div>

        </header>
        <!-- header end -->
    </div>
    <!-- header-container end -->
@endsection


@section('content')

    <!-- breadcrumb start -->
    <!-- ================ -->
    <div class="breadcrumb-container">
        <div class="container">
            <ol class="breadcrumb">
                <li><i class="fa fa-home pr-10"></i><a href="/">Почетна</a></li>
                <li class="active">{{ $product->title }}</li>

            </ol>
        </div>
    </div>
    <!-- breadcrumb end -->



    <!-- main-container start -->
    <!-- ================ -->
    <section class="main-container padding-ver-clear">
        <div class="container pv-40">
            <div class="row">

                <!-- main start -->
                <!-- ================ -->
                <div class="main col-md-8">


                    <h1 class="title">{{ $product->title }}</h1>
                    <div class="separator-2"></div>
                    {!! $product->description !!}
                </div>
                <!-- main end -->

                <!-- sidebar start -->
                <!-- ================ -->
                <aside class="col-md-4 col-lg-3 col-lg-offset-1">
                    <div class="sidebar">

                        <div class="col-md-12 block clearfix">
                            <div class="owl-carousel content-slider-with-controls">

                                    <div class="overlay-container overlay-visible">
                                        <img src="/assets/img/products/{{ $product->image }}" />

                                        <a href="/assets/img/products/{{ $product->image }}"
                                           class="popup-img overlay-link"><i class="icon-plus-1"></i></a>
                                    </div>

                            </div>
                        </div>




                        <div class="col-md-12 block clearfix">
                            <div class="owl-carousel content-slider-with-controls">
                                @foreach($sliders as $slider)
                                    <div class="overlay-container overlay-visible">
                                        <img src="/assets/img/sliders/medium/{{ $slider->image }}" />
                                        <div class="overlay-bottom hidden-xs">
                                            <div class="text">
                                                <h3 class="title"></h3>
                                            </div>
                                        </div>
                                        <a href="/assets/img/sliders/{{ $slider->image }}"
                                           class="popup-img overlay-link"><i class="icon-plus-1"></i></a>
                                    </div>
                                @endforeach
                            </div>
                        </div>




                    </div>
                </aside>
                <!-- sidebar end -->

            </div>
        </div>
    </section>
    <!-- main-container end -->


@endsection

