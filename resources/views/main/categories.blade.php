@extends('layouts.single')
@include('layouts.menu')

@section('content')
    <!-- gallery -->
    <div class="gallery">
        <div class="container">
            <div class="gallery-heading wow fadeInUp animated" data-wow-delay=".5s">
                <h3>Категории</h3>
            </div>

            <div class="gallery-grids">
                @foreach($categories as $category)
                <div class="col-md-4 gallery-grid wow fadeInLeft animated" data-wow-delay=".5s">
                    <div class="grid">
                        <figure class="effect-roxy">
                            <a class="example-image-link" href="/categories/{{ $category->slug }}/products" data-lightbox="example-set" data-title="">
                                <img src="/assets/img/categories/{{ $category->image }}" alt="" />
                                <figcaption>
                                    <h3>{!! $category->name !!}> </h3>
                                    <p> {!!  str_limit($category->description, 100) !!} </p>
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