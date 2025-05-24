@extends('layouts.app')

@section('content')
    <div class="container-fluid no-padding">
        <div class="wrapper-library">
            <div class="library-bg"></div>
            <div class="bg-faded"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 vid-head-service">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <h2>
                        <span class="font-flat">Biology</span>
                        <!-- <span class="font-bold">Best Online Course Help.</span> -->
                        <center><a class="live-chat" href="javascript:void(Tawk_API.toggle())">LIVE CHAT</a></center>
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
                    <h1 class="text-center"><span class="heading">Impressive Online Biology Class Help</span></h1>
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
                        <p>Being a science student comes in handy most times. You have a wide range of job openings when you finish school. You can work in the health sector or pure science sector. There are many subsets under these two categories.
                            Oftentimes, students who decide to niche down on postgraduate and doctoral studies end up in academics.
                        </p>
                        <p>A few lofty colleges have worked together with web-based learning stages to bring to the table transient seminars on points identified with Biology.
                            For those juggling both school and studies, its imperative you get assistance from online class help because regularly, these courses are depleting and mind-numbing. Unending rigorous weekly tasks, articles, project work, and tests that must be finished on schedule will leave you worn-out every day. </p>
                        <p>If you notice it's a little difficult to stay up with the timetable, instead of quitting halfway as most students do, you should seek assistance online. Online Biology Class Help offers to take online classes and tasks for students to learn searching for credible hands to take their online Biology class.
                            We don't simply take online classes, however, we also complete tasks, offer schoolwork help, post remarks on report sheets, and even send email reports to your professors.
                            Employ us to take the whole class for you. We additionally guarantee to finish technical tasks.
                        </p>
                        <p>Consider us any time between 9 am to 9 pm EST to request reports on your task or allocate assignments for us.
                            Anytime you ask, would I be able to recruit somebody to take my online Biology class for me? Yes, you can
                            Call us to get more information, we are always available for hire. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
