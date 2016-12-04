@extends('layouts.single')
@include('layouts.menu')
@section('content')
    <!--start-contact-->
    <div class="contact-content">
        <div class="container">

            <div class="contact-heading wow fadeInUp animated" data-wow-delay=".5s">
                <h3>Контакт</h3>
            </div>

            <div class="map wow fadeInUp animated" data-wow-delay=".5s">

                <iframe width="300" height="170" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                        src="https://maps.google.com/maps?q={{ $settings->lat }},{{ $settings->lng }}&hl=es;z=14&amp;output=embed"></iframe>


            </div>

            @if(Session::has('flash_message'))
                <div class="alert alert-success">
                    {{ Session::get('flash_message') }}
                </div>
            @endif

            <div class="contact-form">
                <h3 class="wow fadeInLeft animated" data-wow-delay=".5s">Контакт</h3>
                {{ Form::model('slider', array('route' => array('sendemail'), 'method' => 'POST')) }}
                {!! csrf_field() !!}
                <input class="wow fadeInRight animated" data-wow-delay=".5s" type="text" placeholder="Име" name="name"
                       type="text" required="">
                <input class="wow fadeInRight animated" data-wow-delay=".5s" type="text" placeholder="Email"
                       name="email" type="email" required="">
                <input class="wow fadeInRight animated" data-wow-delay=".5s" type="text" placeholder="Наслов"
                       name="subject" type="text" required="">
                <textarea class="wow fadeInLeft animated" data-wow-delay=".5s" placeholder="Порака" name="message"
                          type="text" required=""></textarea>
                <input class="map wow fadeInUp animated" data-wow-delay=".5s" type="submit" value="Испрати">
                {!! Form::close() !!}



            </div>

        </div>
    </div>
    @include('main.footer')
@endsection



