@extends('layouts.app')

@section('content')
    <div class="container-fluid no-padding">
        <div class="wrapper-library">
            <div class="library-bg"></div>
            <div class="bg-faded"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 vid-head-service">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <h2>
                        <span class="font-flat">Accounting</span>
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
                    <h1 class="text-center"><span class="heading">Amazing Online Accounting Class Help</span></h1>
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
                        <p>Have you ever wished you had someone that could help with your online accounting class?
                            Rigorous training, hectic schedule and you just wanted someone to assist with your online class.
                            Well, you&#39;ve come to the right place. Talk of premium online services at pocket-friendly prices,
                            we are second to none.
                            Pay For Online Classes Help offers competent tutors and subject experts to assist you with your
                            Accounting class help.
                            Do you toil to finish Accountancy tasks?
                            Don&#39;t get yourself worked-up because our coaches won&#39;t simply take your class, they will also
                            complete your tasks and ensure that you score an A or B in your grades.
                            Who Needs Our Take My Accounting Class Service For me: Our services are ideal for:</p>
                        <ul class="plist list-group">
                            <li><span class="icon"><i class="fa fa-circle"></i></span>&nbsp;<span class="para">Working Professionals: Students shuffling a bustling job and studies are extraordinarily
                                    profited by utilizing our services.</span></li>
                            <li><span class="icon"><i class="fa fa-circle"></i></span>&nbsp;<span class="para">Students Taking Multiple Courses Online: Sometimes students take up many transient
                                    numerous courses to assist them with their majors. These courses add credibility to their
                                    CV while looking for work.</span></li>
                        </ul>
                        <p>It&#39;s an obvious fact that the time left for students, after school schedules, to complete their
                            assignments and other necessary stuff is insufficient.
                            As opposed to passing up cutoff times, it bodes well to recruit specialists. Simply ask us - would
                            you be able to take my internet accounting class for me. We&#39;ll do everything-from singular tasks
                            for the whole class.

                            Get in touch with us for additional details.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
