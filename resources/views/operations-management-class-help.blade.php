@extends('layouts.app')

@section('content')
    <div class="container-fluid no-padding">
        <div class="wrapper-library">
            <div class="library-bg"></div>
            <div class="bg-faded"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 vid-head-service">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <h2>
                        <span class="font-flat">Operations</span>
                        <center><a class="live-chat" href="javascript:void(0);">LIVE CHAT</a></center>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid no-padding">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding pricing">
            <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs grid1 no-padding">
                <div class="sub1">
                    <span class="subTotal"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                    <p>CLASS</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs grid3 no-padding">
                <div class="sub2">
                    <span class="subTotal"><i class="fa fa-book" aria-hidden="true"></i></span>
                    <p>HOMEWORK</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs grid3 no-padding">
                <div class="price3">
                    <span class="subTotal"><i class="fa fa-question-circle" aria-hidden="true"></i></span>
                    <p>QUIZ</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs grid4 no-padding">
                <div class="price4">
                    <span class="subTotal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                    <p>EXAM</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid main">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pad-5">
                <div class="seperator-wrapper">
                    <div class="seperator"></div>
                </div>
                <div class="pad-2">
                    <h1 class="text-center"><span class="heading">Impeccable Online Operation Management Class Help</span></h1>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pad-5">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <img class="hidden-xs" src="{{ asset('assets/images/books/28.jpg') }}" width="100%" />
                        <div class="col-md-12 col-sm-12 col-xs-12 no-padding">
                            <h2 class="text-center"><span class="heading-small-subject">GET A FREE QUOTE</span></h2>
                            <form id="form-mailer" action="#" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input class="form-control" name="name" type="text" required placeholder="Name" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="email" type="text" required placeholder="Email" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="phone" type="text" required placeholder="Phone" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="file" type="file" placeholder="file" />
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="topic" required rows="3" placeholder="Details"></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="btn-sumbit-form-subject" type="submit">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <p>Whether you're into manufacturing or offering administrations in the virtual domain, the role of Operation Management cannot be overemphasized.
                            Graduates from this field frequently secure jobs as supervisors, key organizers, and so on. Be that as it may, examining the subject online is testing and needs responsibility.
                            Students often go through an exhausting timetable coupled with weekly tests, quizzes, and project work.
                            Working experts are regularly confused attempting to oversee study and work obligations.
                            Pay for Online Operation Management Class Help is the ideal answer for students searching for somebody to.
                        </p>
                        <p>We'll take your Operation Management class for you , total tasks, project work, and papers, and even post remarks on report sheets
                            Our consultants will handle your tasks while you get the chance to zero in on work or your majors.
                            You can employ us to take up singular activities or sign us to finish the whole module for you.
                            Got a deadline for tomorrow? Call us now and we will provide quality online class help.
                            We're accessible between 9 am to 9 pm-call us whenever for information about your schoolwork or any related activities.
                            We offer quality at affordable prices. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
