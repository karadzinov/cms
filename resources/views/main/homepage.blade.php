@extends('layouts.main')

@section('content')

    <!-- banner-bottom -->
    <div class="banner-bottom">
        <div class="col-md-8 banner-bottom-left">
            <div class="col-md-7 welcome-left">
                @foreach($products as $index => $product)
                    @if($index == 1)
                        <h4 class="wow fadeInLeft animated" data-wow-delay=".5s">{{ $product->title }}</h4>
                        <h5 class="wow fadeInRight animated" data-wow-delay=".5s">{{ $product->subtitle }}</h5>
                        <p class="wow fadeInLeft animated" data-wow-delay=".5s">{!! str_limit($product->description, 300)   !!}</p>
                        <p style="float: right;"><a style="color: #A2555F; cursor: pointer" href="/product/{{ $product->slug }}">Повеќе...</a></p>
                    @endif
                @endforeach

            </div>
            <div class="col-md-5  wow zoomIn animated" data-wow-delay=".5s">
                @foreach($products as $index => $product)
                    @if($index == 1)
                        <a  href="/product/{{ $product->slug }}"><img src="/assets/img/products/{{ $product->image }}" class="img-responsive" /></a>
                    @endif
                @endforeach
            </div>
            <div class="clearfix"></div>
            <div class="welcome-left-bottom">
                @foreach($services as $service)
                    <h4 class="wow fadeInUp animated" data-wow-delay=".5s"><a style="color: #A2555F; cursor: pointer" href="/services/{{ $service->slug }}">{{ $service->title }}</a></h4>
                    <p class="wow fadeInUp animated"
                       data-wow-delay=".5s">{!! str_limit($service->description, 300) !!}</p>
                @endforeach
            </div>
            <div class="welcome-bottom-below">
                @foreach($products as $index => $product)
                    @if($index == 2)
                        <h4 class="wow fadeInLeft animated" data-wow-delay=".5s">{{ $product->title }}</h4>
                        <p class="wow fadeInRight animated"
                            data-wow-delay=".5s">{!! str_limit($product->description, 500) !!}</p>
                        <p style="float: right;"><a style="color: #A2555F; cursor: pointer" href="/product/{{ $product->slug }}">Повеќе...</a></p>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="col-md-4 banner-bottom-right">
            <div class="banner-bottom-right-top">

                <div class="banner-bottom-right-top-info">
                    <h4 class="wow fadeInUp animated" data-wow-delay=".5s">За нас</h4>
                    <p class="wow fadeInUp animated" data-wow-delay=".5s">{!! $settings->description !!}</p>
                </div>


            </div>
            <div class="wow zoomIn animated" data-wow-delay=".5s">
                @foreach($products as $index => $product)
                    @if($index == 2)
                        <a  href="/product/{{ $product->slug }}"><img src="/assets/img/products/{{ $product->image }}" class="img-responsive" /></a>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- //banner-bottom -->




    <!-- news -->
    <div class="news">
        <!-- container -->
        <div class="container">
            <div class="news-info wow fadeInDown animated" data-wow-delay=".5s">
                <h4>Новости</h4>
            </div>
            <div class="news-grids">
                @foreach($blogs as $blog)
                    <div class="col-md-6 news-grid">
                        <div class="news-top-img">
                            <a href="/blog/{{ $blog->slug }}">
                                <img class="wow fadeInUp animated" data-wow-delay=".5s"
                                     src="/assets/img/blog/{{ $blog->image }}" alt="">
                            </a>
                        </div>
                        <div class="news-grid-info">
                            <a class="wow fadeInUp animated" data-wow-delay=".5s"
                               href="/blog/{{ $blog->slug }}">{{ $blog->title }}</a>
                            <p class="date wow fadeInUp animated"
                               data-wow-delay=".5s">{{ $blog->created_at->diffForHumans() }}</p>
                            <p class="text wow fadeInUp animated" data-wow-delay=".5s">{!! str_limit($blog->description,300) !!}</p>
                        </div>
                    </div>
                @endforeach
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //container -->
    </div>
    <!-- //news -->
    @include('main.footer')
@endsection

