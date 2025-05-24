@extends('layouts.app')

@section('content')
    <div class="container-fluid no-padding">
        <div class="wrapper-library">
            <div class="library-bg"></div>
            <div class="bg-faded"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 vid-head-service">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <h2>
                        <span class="font-flat">Calculus</span>
                        <!-- <span class="font-bold">Best Online Course Help.</span> -->
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
                    <h1 class="text-center"><span class="heading">Power-pack Online Calculus Class Help </span></h1>
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
                        <p>Don't you wish you had someone to take your online calculus class for you? You get to enjoy enough time with other important obligations and even spend quality time with your loved ones.
                            Well, genie just granted your wish
                            Pay For Online Classes Help offers to make your online learning smooth striking out pressure and struggles.
                            We take your online class, total schoolwork and tasks for your benefit, and even compose decent remarks on report sheets for you.
                            We help you with each task related to your online learning program.
                            On the off chance that you've selected for an online Calculus class yet battling to finish, we'll do it for you.
                            All you need do is to allocate us with the assignment. We don't simply take the class, however, we complete schoolwork and tasks, tend to your report sheets, and even send emails to your educators. </p>
                        <p>Our tutors are experienced experts who've helped a great number of students in the past to finish online classes.
                            Our tutors finished from lofty colleges and have immense knowledge of Calculus.
                            We are so confident in the service that we guarantee scoring an A or B in all the classes we take for you.
                            Don't employ mediocre services that are concerned with just your money and not providing quality services. Instead, employ credible hands to get it done.
                            Searching for somebody to take my online Calculus class for me?
                            Contact Online Class Help now. We are affordable and competent. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
