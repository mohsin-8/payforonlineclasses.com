@extends('layouts.app')

@section('content')
    <div class="container-fluid no-padding">
        <div class="wrapper-library">
            <div class="library-bg"></div>
            <div class="bg-faded"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 vid-head-service">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <h1>
                        <span class="font-flat">SUBJECTS</span>
                        <center><a class="live-chat" href="javascript:void(0);">LIVE CHAT</a></center>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pad-5">
                <div class="seperator-wrapper">
                    <div class="seperator"></div>
                </div>
                <div class="pad-2">
                    <h5 class="text-center"><span class="heading">Please Choose a Subject</span></h5>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pad-5 subBoxes">
                    <ul>
                        <a href="{{ url('/subjects/accounting-class-help') }}">
                            <li class="sub-box">
                                <img src="{{ asset('assets/images/books/1.jpg') }}" />
                                <p>Accounting</p>
                            </li>
                        </a>
                        <a href="{{ url('/subjects/algebra-class-help') }}">
                            <li class="sub-box">
                                <img src="{{ asset('assets/images/books/2.jpg') }}" />
                                <p>Algebra</p>
                            </li>
                        </a>
                        <a href="{{ url('/subjects/biology-class-help') }}">
                            <li class="sub-box">
                                <img src="{{ asset('assets/images/books/3.jpg') }}" />
                                <p>Biology</p>
                            </li>
                        </a>
                        <a href="{{ url('/subjects/business-law-class-help') }}">
                            <li class="sub-box">
                                <img src="{{ asset('assets/images/books/4.jpg') }}" />
                                <p>Business Law</p>
                            </li>
                        </a>
                        <a href="{{ url('/subjects/calculus-class-help') }}">
                            <li class="sub-box">
                                <img src="{{ asset('assets/images/books/5.jpg') }}" />
                                <p>Calculus</p>
                            </li>
                        </a>
                        <a href="{{ url('/subjects/chemistry-class-help') }}">
                            <li class="sub-box">
                                <img src="{{ asset('assets/images/books/6.jpg') }}" />
                                <p>Chemistry</p>
                            </li>
                        </a>
                        <a href="{{ url('/subjects/communication-class-help') }}">
                            <li class="sub-box">
                                <img src="{{ asset('assets/images/books/7.jpg') }}" />
                                <p>Communication</p>
                            </li>
                        </a>
                        <a href="{{ url('/subjects/criminal-justice-class-help') }}">
                            <li class="sub-box">
                                <img src="{{ asset('assets/images/books/8.jpg') }}" />
                                <p>Criminal Justice</p>
                            </li>
                        </a>
                        <a href="{{ url('/subjects/economics-class-help') }}">
                            <li class="sub-box">
                                <img src="{{ asset('assets/images/books/9.jpg') }}" />
                                <p>Economics</p>
                            </li>
                        </a>
                        <a href="{{ url('/subjects/engineering-class-help') }}">
                            <li class="sub-box">
                                <img src="{{ asset('assets/images/books/10.jpg') }}" />
                                <p>Engineering</p>
                            </li>
                        </a>
                        <a href="{{ url('/subjects/english-class-help') }}">
                            <li class="sub-box">
                                <img src="{{ asset('assets/images/books/11.jpg') }}" />
                                <p>English</p>
                            </li>
                        </a>
                        <a href="{{ url('/subjects/finance-class-help') }}">
                            <li class="sub-box">
                                <img src="{{ asset('assets/images/books/12.jpg') }}" />
                                <p>Finance</p>
                            </li>
                        </a>
                        <a href="{{ url('/subjects/geometry-class-help') }}">
                            <li class="sub-box">
                                <img src="{{ asset('assets/images/books/13.jpg') }}" />
                                <p>Geometry</p>
                            </li>
                        </a>
                        <a href="{{ url('/subjects/history-class-help') }}">
                            <li class="sub-box">
                                <img src="{{ asset('assets/images/books/14.jpg') }}" />
                                <p>History</p>
                            </li>
                        </a>
                        <a href="{{ url('/subjects/IT-class-help') }}">
                            <li class="sub-box">
                                <img src="{{ asset('assets/images/books/15.jpg') }}" />
                                <p>IT</p>
                            </li>
                        </a>
                        <a href="{{ url('/subjects/management-class-help') }}">
                            <li class="sub-box">
                                <img src="{{ asset('assets/images/books/16.jpg') }}" />
                                <p>Management</p>
                            </li>
                        </a>
                        <a href="{{ url('/subjects/marketing-class-help') }}">
                            <li class="sub-box">
                                <img src="{{ asset('assets/images/books/17.jpg') }}" />
                                <p>Marketing</p>
                            </li>
                        </a>
                        <a href="{{ url('/subjects/operations-management-class-help') }}">
                            <li class="sub-box">
                                <img src="{{ asset('assets/images/books/18.jpg') }}" />
                                <p>Operations</p>
                            </li>
                        </a>
                        <a href="{{ url('/subjects/philosophy-class-help') }}">
                            <li class="sub-box">
                                <img src="{{ asset('assets/images/books/19.jpg') }}" />
                                <p>Philosophy</p>
                            </li>
                        </a>
                        <a href="{{ url('/subjects/physics-class-help') }}">
                            <li class="sub-box">
                                <img src="{{ asset('assets/images/books/20.jpg') }}" />
                                <p>Physics</p>
                            </li>
                        </a>
                        <a href="{{ url('/subjects/political-science-class-help') }}">
                            <li class="sub-box">
                                <img src="{{ asset('assets/images/books/21.jpg') }}" />
                                <p>Political Science</p>
                            </li>
                        </a>
                        <a href="{{ url('/subjects/psychology-class-help') }}">
                            <li class="sub-box">
                                <img src="{{ asset('assets/images/books/22.jpg') }}" />
                                <p>Psychology</p>
                            </li>
                        </a>
                        <a href="{{ url('/subjects/science-class-help') }}">
                            <li class="sub-box">
                                <img src="{{ asset('assets/images/books/23.jpg') }}" />
                                <p>Science</p>
                            </li>
                        </a>
                        <a href="{{ url('/subjects/sociology-class-help') }}">
                            <li class="sub-box">
                                <img src="{{ asset('assets/images/books/24.jpg') }}" />
                                <p>Sociology</p>
                            </li>
                        </a>
                        <a href="{{ url('/subjects/spanish-class-help') }}">
                            <li class="sub-box">
                                <img src="{{ asset('assets/images/books/25.jpg') }}" />
                                <p>Spanish</p>
                            </li>
                        </a>
                        <a href="{{ url('/subjects/statistics-class-help') }}">
                            <li class="sub-box">
                                <img src="{{ asset('assets/images/books/26.jpg') }}" />
                                <p>Statistics</p>
                            </li>
                        </a>
                        <a href="{{ url('/subjects/strategic-management-class-hel') }}">
                            <li class="sub-box">
                                <img src="{{ asset('assets/images/books/27.jpg') }}" />
                                <p>Strategic</p>
                            </li>
                        </a>
                        <a href="{{ url('/subjects/trigonometry-class-help') }}">
                            <li class="sub-box">
                                <img src="{{ asset('assets/images/books/28.jpg') }}" />
                                <p>Trigonometry</p>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
