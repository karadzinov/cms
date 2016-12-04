<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="footer-grids">
            <div class="col-md-4 footer-left wow fadeInLeft animated" data-wow-delay=".5s">
                <div class="footer-left-heading">
                    <h1><a href="/"><img src="/assets/img/logo/thumbnails/{{ $settings->logo }}"></a></h1>
                </div>
                <div class="footer-left-bottom">
                    <p>{{ $settings->title }}
                        <span>{{ $settings->address }}</span>
                    </p>
                    <p class="phone">Тел : {{ $settings->phone }}
                        <span>Email : <a href="mailto:{{ $settings->email }}">{{ $settings->email }}</a></span>
                    </p>
                </div>
            </div>
            <div class="col-md-4 footer-middle wow fadeInUp animated" data-wow-delay=".5s">
                <div class="footer-middle-heading">
                    <h3>Мени</h3>
                </div>
                <div class="footer-middle-bottom">
                    <ul>
                        <li><a class="active" href="/">Почетна</a></li>
                        @foreach($staticpages as $staticpage)
                            <li><a href="/{{ $staticpage->slug }}">{{ $staticpage->title }}</a></li>
                        @endforeach
                        <li><a href="/categories/all">Производи</a></li>
                        <li><a href="/blog">Блог</a></li>
                        <li><a href="/contact">Контакт</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 footer-right wow fadeInRight animated" data-wow-delay=".5s">
                <div class="footer-middle-heading footer-right-heading">
                    <h3>Бидете во тек</h3>
                </div>
                <div class="footer-right-bottom">
                    <p>Оставете ваша емаил адреса и добивајте најновите информации поврзани со нашата компанија и бренд</p>
                    <form>
                        <input type="email" id="mc4wp_email" name="EMAIL" placeholder="Внесете email адреса"
                               required="">
                        <input type="submit" value="Испрати">
                    </form>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="footer-bottom">
            <div class="footer-bottom-grids">
                <div class="footer-bottom-left wow fadeInLeft animated" data-wow-delay=".5s">
                    <p>© 2016 Frutismoothie.mk - Сите права се задржани.</p>
                </div>
                <div class="footer-bottom-right icons wow fadeInRight animated" data-wow-delay=".5s">
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
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!-- //footer -->
