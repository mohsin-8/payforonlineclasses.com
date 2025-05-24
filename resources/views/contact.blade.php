@extends('layouts.app')

@section('content')
    <div class="container-fluid no-padding">
        <div class="wrapper-library">
            <div class="contact-bg"></div>
            <div class="bg-faded"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 vid-head-service">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <h1>
                        <span class="font-flat">CONTACT</span>
                        <!-- <span class="font-bold">Best Online Course Help.</span> -->
                        <center><a class="live-chat" href="javascript:void(Tawk_API.toggle())">LIVE CHAT</a></center>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid main">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pad-5">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pad-5">
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="seperator-wrapper">
                            <div class="seperator"></div>
                        </div>
                        <div class="pad-2">
                            <h2 class="text-center"><span class="heading-contact">LEAVE US YOUR INFO</span></h2>
                        </div>
                        <p>Our professional consultants are available 24/7 to resolve all your queries. You can use the form to share your valuable feedback or request a Call Back at any time of the day.</p>
                        <form id="form-desktop" action="#" method="post">
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
                                <textarea class="form-control" name="topic" required rows="3" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn-sumbit-form-subject" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="seperator-wrapper">
                            <div class="seperator"></div>
                        </div>
                        <div class="pad-2">
                            <h2 class="text-center"><span class="heading-contact">LOCATION</span></h2>
                            <p class="text-center">630 N LaSalle Dr Chicago, IL 60654</p>
                            <p class="text-center"><i class="fa fa-envelope"></i>&nbsp;info@payforonlineclasses.com</p>
                            <p class="text-center"><i class="fa fa-phone"></i>&nbsp;+1 773 800 2988</p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2969.9832659374806!2d-87.63490878426201!3d41.89321697244639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2cb36e544069%3A0x974f2bbe765bb4ff!2s630%20N%20LaSalle%20Dr%2C%20Chicago%2C%20IL%2060654%2C%20USA!5e0!3m2!1sen!2s!4v1603746814862!5m2!1sen!2s" style="border:0" width="100%" height="250" frameborder="0" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
