@extends('layouts.main')

@section('slider')

    <!-- banner start -->
    <!-- ================ -->
    <div class="banner clearfix">

        <!-- slideshow start -->
        <!-- ================ -->
        <div class="slideshow">

            <!-- slider revolution start -->
            <!-- ================ -->
            <div class="slider-banner-container">
                <div class="slider-banner-fullwidth-big-height">
                    <ul class="slides">
                        <!-- slide 1 start -->
                        <!-- ================ -->
                        @foreach($slides as $slide)
                        <li data-transition="fadefromright" data-slotamount="4" data-masterspeed="500"
                            data-saveperformance="on" data-title="{{ $slide->title }}">

                            <!-- main image -->
                            <img src="/assets/img/slider/{{ $slide->image }}" alt="{{ $slide->title }}"
                                 data-bgposition="center top" data-bgrepeat="no-repeat" data-bgfit="cover">

                            <!-- LAYER NR. 1 -->

                            <div class="tp-caption sfb fadeout dark-translucent-bg caption-box text-left"
                                 style="background-color: rgba(0, 0, 0, 0.7);"
                                 data-x="left"
                                 data-y="center"
                                 data-speed="500"
                                 data-start="1300"
                                 data-easing="easeOutQuad"
                                 data-endspeed="600">
                                <h2 class="title">{{ $slide->title }}</h2>
                                <div class="separator-2 clearfix"></div>
                                <p>{!!  $slide->description !!}</p>
                                <div class="text-right"><a class="btn btn-small btn-gray-transparent margin-clear"
                                                           href="page-services.html">Повеќе</a></div>
                            </div>

                        </li>
                        @endforeach
                        <!-- slide 1 end -->

                    </ul>
                    <div class="tp-bannertimer"></div>
                </div>
            </div>
            <!-- slider revolution end -->

        </div>
        <!-- slideshow end -->

    </div>
    <!-- banner end -->
@endsection



@section('content')
    <!-- section start -->
    <!-- ================ -->
    <section class="pv-40">
        <div class="container">
            <div class="row">
                <!-- main start -->
                <!-- ================ -->
                <div class="main col-md-12">
                    <h3 class="title">We Are <strong class="text-default">Olimpik</strong></h3>
                    <div class="separator-2"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus illo vero
                                cupiditate, sed enim voluptatibus provident consectetur. Quo dolor sunt nostrum,
                                eligendi illo accusamus odit, ipsam excepturi voluptatem nulla minus.</p>
                            <p>Blanditiis aspernatur, non quasi, maxime corporis officiis quia. Cupiditate, voluptatibus
                                ducimus, natus, labore mollitia dolorem incidunt voluptatum, delectus eius fugit porro
                                placeat animi voluptatem autem hic eligendi sint. Amet pariatur odit repudiandae sunt.
                                Rem ipsum dolor sit amet, consectetur adipisicing elit. Sunt asperiores a.</p>
                            <ul class="list-icons">
                                <li><i class="icon-check-1"></i> We are here to support you</li>
                                <li><i class="icon-check-1"></i> Free updates</li>
                                <li><i class="icon-check-1"></i> Unlimited options and variations</li>
                                <li><i class="icon-check-1"></i> ipsam asperiores fugiat quo</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div class="owl-carousel content-slider-with-controls">
                                @foreach($products as $product)
                                    <div class="overlay-container overlay-visible">
                                        <img
                                                src="/assets/img/products/medium/{{ $product->image }}"
                                                alt="{{ $product->title }}"/>{{ $product->title}}</a>
                                        <div class="overlay-bottom hidden-xs">
                                            <div class="text">
                                                <h3 class="title">{{ $product->title }}</h3>
                                            </div>
                                        </div>
                                        <a href="/assets/img/products/{{ $product->image }}"
                                           class="popup-img overlay-link"
                                           title="{{ $product->title }}"><i class="icon-plus-1"></i></a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- main end -->
            </div>
        </div>
    </section>
    <!-- section end -->
@endsection

