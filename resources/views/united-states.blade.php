@extends('layouts.app')

@section('content')
    <div class="container-fluid no-padding">
        <div class="wrapper-library">
            <div class="policy-bg"></div>
            <div class="bg-faded"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 vid-head-service">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <h1>
                        <span class="font-flat">United States</span>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid main">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pad-5">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pad-5">

                    <div class="col-md-8">
                        <h3>SUBJECTS</h3>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <ul class="list-group">
                                <li class="list-group-item"><a href="{{ url('/united-states/michigan-online-classes') }}">Michigan Online Classes</a></li>
                                <li class="list-group-item"><a href="{{ url('/united-states/montana-online-classes') }}">Montana Online Classes</a></li>
                                <li class="list-group-item"><a href="{{ url('/united-states/california-online-classes') }}">California Online Classes</a></li>
                                <li class="list-group-item"><a href="{{ url('/united-states/mississippi-online-classes') }}">Mississippi Online Classes</a></li>
                                <li class="list-group-item"><a href="{{ url('/united-states/tennessee-online-classes') }}">Tennessee Online Classes</a></li>
                                <li class="list-group-item"><a href="{{ url('/united-states/florida-online-classes') }}">Florida Online Classes</a></li>
                                <li class="list-group-item"><a href="{{ url('/united-states/texas-online-classes') }}">Texas Online Classes</a></li>
                                <li class="list-group-item"><a href="{{ url('/united-states/chicago-online-classes') }}">Chicago Online Classes</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
