@extends('layouts.app')

@section('content')
    <div class="container-fluid no-padding">
        <div class="wrapper-library">
            <div class="library-bg"></div>
            <div class="bg-faded"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 vid-head-service">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <h2>
                        <span class="font-flat">Algebra</span>
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
                    <h1 class="text-center"><span class="heading">Excellent Online Algebra Class Help</span></h1>
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
                        <p>Would you be able to take my online Algebra class for me? This is the question we get frequently.
                            Well, YES!! We can take your online Algebra class for you. In fact, we do it with much appropriateness and finesse.
                            Pay for Online Classes Help offers master help for students searching for online class help. We don't simply take your online class, besides, we complete tasks, schoolwork, reports, and project work.
                            Employ us to take the whole class or complete individual tasks.
                            We have a team of experienced experts who graduated from different prestigious schools in America.
                            We've helped many students to finish their online course and we ensured an A or B for each class or task.
                        </p>
                        <p>Our professionals not only understand how to take your online course without hassle but also, they know the nitty-gritty of institutions grading system in America.
                            We guarantee non-plagiarized content at a pocket-friendly rate. Employ us to take your online coursework and we ascertain an A or B or you get your money back.
                            Our services are ideal for students shuffling work and scholastic duties. Most importantly, we are available for students who've taken up various courses alongside their majors.
                            Got a pressing task? Call us and we'll assist you with finishing them on schedule.
                            We're accessible 12 hours per day somewhere in the range of 9 am and 9 pm EST.
                            Call us for pressing reports on tasks or to inquire as to whether we could take your online Algebra class.
                            We await your response, and ready to assist. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
