@extends('layouts.single')
@section('opengraph')
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Fruti Smoothie - {!! $blog->title !!}">
    <meta itemprop="description" content="{!! str_limit(strip_tags($blog->description), 155) !!}">
    <meta itemprop="image" content="http://frutismoothie.mk/assets/img/blog/{{ $blog->image }}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@FrutiSmoothie">
    <meta name="twitter:title" content="Fruti Smoothie">
    <meta name="twitter:description" content="{!!  str_limit(strip_tags($blog->description), 155) !!}">
    <meta name="twitter:creator" content="@FrutiSmoothie">
    <meta name="twitter:image" content="http://frutismoothie.mk/assets/img/blog/{{ $blog->image }}">

    <!-- Open Graph data -->
    <meta property="fb:app_id" content="332475717131384" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:title" content="Fruti Smoothie" />
    <meta property="og:url" content="{!! $path !!}" /> 
    <meta property="og:type" content="article" />
    <meta property="og:image" content="http://frutismoothie.mk/assets/img/blog/{{ $blog->image }}" />
    <meta property="og:description" content="{!! str_limit(strip_tags($blog->description), 155) !!}" />
    <meta property="og:site_name" content="Fruti Smoothie - {!! $blog->title !!}" />
@endsection

@section('content')
    <!-- blog -->
    <div class="blog">
        <!-- container -->
        <div class="container">
            <div class="col-md-8 blog-top-left-grid">
                <div class="left-blog left-single">
                    <div class="blog-left">
                        <div class="single-left-left wow fadeInUp animated" data-wow-delay=".5s">
                            <p> Почетна / <a href="#">{{ $blog->title }}</a></p>
                            <img src="/assets/img/blog/{{ $blog->image }}" alt="{{ $blog->title }}"/>
                        </div>
			<div class="blog-left-bottom wow fadeInUp animated" data-wow-delay=".5s" style="min-height: 20px;">
				<span class='st_facebook_large' displayText='Facebook'></span>
				<span class='st_twitter_large' displayText='Tweet'></span>
				<span class='st_linkedin_large' displayText='LinkedIn'></span>
				<span class='st_pinterest_large' displayText='Pinterest'></span>
				<span class='st_email_large' displayText='Email'></span>
			</div>
                        <div class="blog-left-bottom wow fadeInUp animated" data-wow-delay=".5s">
                            {!! $blog->description !!}
                        </div>
                    </div>

                    <div class="response">
                        <h3 class="wow fadeInUp animated" data-wow-delay=".5s">Responses</h3>
                        <div class="media response-info">
                            <div id="disqus_thread"></div>
                            <script>

                                (function () { // DON'T EDIT BELOW THIS LINE
                                    var d = document, s = d.createElement('script');
                                    s.src = '//frutismoothie.disqus.com/embed.js';
                                    s.setAttribute('data-timestamp', +new Date());
                                    (d.head || d.body).appendChild(s);
                                })();
                            </script>
                            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments
                                    powered by Disqus.</a></noscript>

                            <div class="clearfix"></div>
                        </div>

                    </div>


                </div>
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
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- //container -->
    </div>
    <!-- //blog -->

    @include('main.footer')
@endsection


