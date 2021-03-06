@extends('layouts.app')

@section('scripts')
    <!-- Google Maps -->
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyA75bnzyJ_5j2Ger9Erjo1Q-0XucnZbst4"></script>
    <script>


        $(document).ready(function () {
// Google Maps


            map = new google.maps.Map(document.getElementById('map-canvas'), {
                center: {lat: {{ $blog->lat }}, lng: {{ $blog->lng }} },
                zoom: 10
            });

            var marker = new google.maps.Marker({
                position: {lat: {{ $blog->lat }}, lng: {{ $blog->lng }} },
                map: map,
                draggable: true
            });

            var input = document.getElementById('searchmap');
            var searchBox = new google.maps.places.SearchBox(input);
            map.controls[google.maps.ControlPosition.TOP_CENTER].push(input);

            google.maps.event.addListener(searchBox, 'places_changed', function () {
                var places = searchBox.getPlaces();
                var bounds = new google.maps.LatLngBounds();
                var i, place;
                for (i = 0; place = places[i]; i++) {
                    bounds.extend(place.geometry.location);
                    marker.setPosition(place.geometry.location);
                }
                map.fitBounds(bounds);
                map.setZoom(8);

            });

            google.maps.event.addListener(marker, 'position_changed', function () {
                var lat = marker.getPosition().lat();
                var lng = marker.getPosition().lng();

                $('#lat').val(lat);
                $('#lng').val(lng);
            });


            $("form").bind("keypress", function (e) {
                if (e.keyCode == 13) {
                    $("#searchmap").attr('value');
                    //add more buttons here
                    return false;
                }
            });

        });

    </script>
@endsection

@section('content')

    <div class="page-body">
        <div class="row">
            <div class="col-lg-offset-1 col-sm-offset-1 col-lg-10 col-sm-12 col-xs-12">

                @if(Session::has('flash_message'))
                    <div class="alert alert-success">
                        {{ Session::get('flash_message') }}
                    </div>
                @endif

                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-warning">
                        <span class="widget-caption">Edit blog: {{ strip_tags($blog->title) }}</span>
                    </div>
                    <div class="widget-body">

                        <div class="img-blog">
                            @if(!!$blog->image)
                                <img class="img-responsive" src="/assets/img/blog/medium/{{ $blog->imagemedium }}"
                                     alt="{{ $blog->title }}"/>
                            @endif
                        </div>
                        <br/>


                        <div id="horizontal-form">

                            {{ Form::model('blog', array('route' => array('admin.blog.update', $blog->id), 'method' => 'PUT','files' => true)) }}
                            {!! csrf_field() !!}


                            <div class="input-group{{ $errors->has('image') ? ' has-error' : '' }}">
                        <span class="input-group-btn">
                            <span class="btn btn-info shiny btn-file">
                                <i class="btn-label fa fa-image"> </i> Browse... <input type="file" name="image">
                            </span>
                        </span>
                                <input type="text" class="form-control" readonly="">
                            </div>
                            <br/>
                            @if ($errors->has('image')) <p
                                    class="alert alert-danger">{{ $errors->first('image') }}</p> @endif

                            <div class="form-group">
                                <label for="title">Title</label>
                                <textarea class="ckeditor" id="title" name="title">{{ $blog->title }}</textarea>
                            </div>
                            @if ($errors->has('title')) <p
                                    class="alert alert-danger">{{ $errors->first('title') }}</p> @endif


                            <div class="form-group">
                                <label for="subtitle">Subtitle</label>
                                <textarea class="ckeditor" id="subtitle"
                                          name="subtitle">{{ $blog->subtitle }}</textarea>
                            </div>
                            @if ($errors->has('subtitle')) <p
                                    class="alert alert-danger">{{ $errors->first('subtitle') }}</p> @endif


                            <div class="form-group">
                                <label for="country">Country</label>

                                <select name="country_id" id="country" class="form-control">
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}"
                                                @if($country->id == $blog->country_id) selected @endif>{{ $country->name }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <input type="text" id="searchmap" class="form-control">
                                <div id="map-canvas"></div>
                            </div>


                            <div class="form-group">
                                <label for="description">Blog description</label>
                                <textarea class="ckeditor" id="elm3"
                                          name="description">{{ $blog->description }}</textarea>
                            </div>
                            @if ($errors->has('description')) <p
                                    class="alert alert-danger">{{ $errors->first('description') }}</p> @endif


                            <div class="form-group">
                                <label for="user">Translator</label>
                                <select name="user_id" id="user" class="form-control">
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}"
                                                @if($blog->user_id == $user->id) selected @endif >{{ $user->name }}</option>
                                    @endforeach

                                </select>
                            </div>


                            <div class="form-group">
                                <label>Workflow: </label>
                                @foreach($workflows as $workflow)
                                    <label>
                                        <input name="workflow_id" type="radio"
                                               class="form-control {{ $workflow->color }}" value="{{ $workflow->id }}"
                                               @if($workflow->id  == $blog->workflow_id) checked @endif>
                                        <span class="text"> {{ $workflow->name }}</span>
                                    </label>
                                @endforeach


                            </div>


                            <!-- Hidden inputs -->

                            <input type="hidden" name="creator" value="{{ $blog->creator }}">
                            <input type="hidden" id="lat" class="form-control" name="lat" value="{{ $blog->lat }}">
                            <input type="hidden" id="lng" class="form-control" name="lng" value="{{ $blog->lng }}">

                            <button type="submit" class="btn btn-labeled shiny btn-warning btn-large"><i
                                        class="btn-label fa fa-plus"></i> Create
                            </button>
                            {!! Form::close() !!}


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
