@extends('layouts.single')
@include('layouts.menu')

@section('content')
    <!-- gallery -->
    <div class="gallery">
        <div class="container">
            <div class="gallery-heading wow fadeInUp animated" data-wow-delay=".5s">
                <h3>Продукти</h3>
            </div>

            <div class="gallery-grids">
                @foreach($products as $product)
                    <div class="col-md-4 gallery-grid wow fadeInLeft animated" data-wow-delay=".5s">
                        <div class="grid">
                            <figure class="effect-roxy">
                                <a class="example-image-link" href="/product/{{ $product->slug }}" data-lightbox="example-set" data-title="">
                                    <img src="/assets/img/products/{{ $product->image }}" alt="" />
                                    <figcaption>
                                        <h3>{!! $product->title !!}> </h3>
                                        <p> {!!  str_limit($product->description, 100) !!} </p>
                                    </figcaption>
                                </a>
                            </figure>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <!-- //gallery -->
    @include('main.footer')
@endsection