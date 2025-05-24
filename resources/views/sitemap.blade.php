@extends('layouts.app')

@section('content')
    <div class="container-fluid no-padding">
        <div class="wrapper-library">
            <div class="policy-bg"></div>
            <div class="bg-faded"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 vid-head-service">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <h1>
                        <span class="font-flat">Sitemap</span>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid main">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pad-5">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pad-5">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-4">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h3>HOME</h3>
                                <ul class="list-group">
                                    <li class="list-group-item"><a href="{{ url('/') }}">Home</a></li>
                                    <li class="list-group-item"><a href="{{ url('/reviews') }}">Review</a></li>
                                    <li class="list-group-item"><a href="{{ url('/contact') }}">Contact</a></li>
                                    <li class="list-group-item"><a href="{{ url('/terms-and-condition') }}">Terms &amp; Condition</a></li>
                                    <li class="list-group-item"><a href="{{ url('/privacy-policy') }}">Privacy Policy</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h3>SERVICES</h3>
                                <ul class="list-group">
                                    <li class="list-group-item"><a href="{{ url('/take-my-online-course') }}">Online Course Help</a></li>
                                    <li class="list-group-item"><a href="{{ url('/best-online-exam-help') }}">Online Exam Help</a></li>
                                    <li class="list-group-item"><a href="{{ url('/online-test-help') }}">Online Test Help</a></li>
                                    <li class="list-group-item"><a href="{{ url('/take-my-online-class-for-me') }}">Take My Online Class For Me</a></li>
                                    <li class="list-group-item"><a href="{{ url('/online-proctored-exam') }}">Online Proctored Exam</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h3>SUBJECTS</h3>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <ul class="list-group">
                                    <li class="list-group-item"><a href="{{ url('/subjects/accounting-class-help') }}">Accounting Class Help</a></li>
                                    <li class="list-group-item"><a href="{{ url('/subjects/algebra-class-help') }}">Algebra Class Help</a></li>
                                    <li class="list-group-item"><a href="{{ url('/subjects/biology-class-help') }}">Biology Class Help</a></li>
                                    <li class="list-group-item"><a href="{{ url('/subjects/business-law-class-help') }}">Business Law Class Help</a></li>
                                    <li class="list-group-item"><a href="{{ url('/subjects/calculus-class-help') }}">Calculas Class Help</a></li>
                                    <li class="list-group-item"><a href="{{ url('/subjects/chemistry-class-help') }}">Chemistry Class Help</a></li>
                                    <li class="list-group-item"><a href="{{ url('/subjects/communication-class-help') }}">Communication Class Help</a></li>
                                    <li class="list-group-item"><a href="{{ url('/subjects/criminal-justice-class-help') }}">Criminal Justice Class Help</a></li>
                                    <li class="list-group-item"><a href="{{ url('/subjects/economics-class-help') }}">Economics Class Help</a></li>
                                    <li class="list-group-item"><a href="{{ url('/subjects/engineering-class-help') }}">Engineering Class Help</a></li>
                                    <li class="list-group-item"><a href="{{ url('/subjects/english-class-help') }}">English Class Help</a></li>
                                    <li class="list-group-item"><a href="{{ url('/subjects/finance-class-help') }}">Finance Class Help</a></li>
                                    <li class="list-group-item"><a href="{{ url('/subjects/geometry-class-help') }}">Geometry Class Help</a></li>
                                    <li class="list-group-item"><a href="{{ url('/subjects/history-class-help') }}">History Class Help</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <ul class="list-group">
                                    <li class="list-group-item"><a href="{{ url('/subjects/IT-class-help') }}">IT Class Help</a></li>
                                    <li class="list-group-item"><a href="{{ url('/subjects/management-class-help') }}">Management Class Help</a></li>
                                    <li class="list-group-item"><a href="{{ url('/subjects/marketing-class-help') }}">Marketing Class Help</a></li>
                                    <li class="list-group-item"><a href="{{ url('/subjects/operations-management-class-help') }}">Operation Management Class Help</a></li>
                                    <li class="list-group-item"><a href="{{ url('/subjects/philosophy-class-help') }}">Philosophy Class Help</a></li>
                                    <li class="list-group-item"><a href="{{ url('/subjects/physics-class-help') }}">Physics Class Help</a></li>
                                    <li class="list-group-item"><a href="{{ url('/subjects/political-science-class-help') }}">Political Science Class Help</a></li>
                                    <li class="list-group-item"><a href="{{ url('/subjects/psychology-class-help') }}">Psychology Class Help</a></li>
                                    <li class="list-group-item"><a href="{{ url('/subjects/science-class-help') }}">Science Class Help</a></li>
                                    <li class="list-group-item"><a href="{{ url('/subjects/sociology-class-help') }}">Socialogy Class Help</a></li>
                                    <li class="list-group-item"><a href="{{ url('/subjects/spanish-class-help') }}">Spanish Class Help</a></li>
                                    <li class="list-group-item"><a href="{{ url('/subjects/statistics-class-help') }}">Statistics Class Help</a></li>
                                    <li class="list-group-item"><a href="{{ url('/subjects/strategic-management-class-help') }}">Strategic Class Help</a></li>
                                    <li class="list-group-item"><a href="{{ url('/subjects/trigonometry-class-help') }}">Trigonometry Class Help</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
