@extends('layouts.single')

@section('content')
    <!-- blog -->
    <div class="blog">
        <!-- container -->
        <div class="container">
            <div class="blog-heading"><h3>Блог</h3></div>


            <div class="blog-top-grids">
                <div class="col-md-8 blog-top-left-grid">
                    <div class="left-blog">
                        @foreach($blogs as $blog)
                            <div class="blog-left">
                                <div class="blog-left-left wow fadeInUp animated" data-wow-delay=".5s">
                                    <p>Поставено од <a href="#">{{ $blog->user->name }}</a>
                                        &nbsp;&nbsp; {{ $blog->created_at->diffForhumans() }}</p>
                                    <a href="/blog/{{ $blog->slug }}"><img src="/assets/img/blog/{{ $blog->image }}"
                                                                           alt=""/></a>
                                </div>
                                <div class="blog-left-right wow fadeInUp animated" data-wow-delay=".5s">
                                    <a href="/blog/{{ $blog->slug }}">{{ $blog->title }} </a>
                                    <p>{!! str_limit($blog->description, 500) !!}
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        @endforeach

                    </div>
                    <nav>
                        {!! $blogs->links() !!}
                    </nav>
                </div>
                <div class="col-md-4 blog-top-right-grid">
                    <div class="Categories">
                        <h3 class="wow fadeInUp animated" data-wow-delay=".5s">Производи</h3>
                        <ul>
                            @foreach($categories as $category)
                                <li class="wow fadeInUp animated" data-wow-delay=".5s"><a
                                            href="/categories/{{ $category->slug }}/products">{{ $category->name }}</a></li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="clearfix padding-help-1"></div>
                    <div class="Categories">
                        <div class="fb-page" data-href="https://www.facebook.com/frutismoothie.mk/" data-tabs="timeline"
                             data-width="350" data-small-header="false" data-adapt-container-width="true"
                             data-hide-cover="false" data-show-facepile="true">
                            <blockquote cite="https://www.facebook.com/frutismoothie.mk/" class="fb-xfbml-parse-ignore">
                                <a href="https://www.facebook.com/frutismoothie.mk/">Fruti Smoothie</a></blockquote>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- //container -->
        </div>
        <!-- //blog -->
    @include('main.footer')
@endsection