@extends('layouts.base_course2')
@section('title', 'Signup')

@section('content')

    <div class="row">
        <div class="col-xs-12 banner" id="tutor_registration_banner" style="background-image:url('images/slide/1.png')">
            
        </div>
        <div class="col-md-12 banner-text" id="course_two_banner_text">
            <h1 style="">Thank you for choosing iCode.ng. Become a Tutor!<br>
            Join our stream of decent developers across Africa</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 form course_two_form">
            <div class="col-md-8 col-md-offset-2 col-xs-12 left">
                <form method="post" ENCTYPE="multipart/form-data">
                    <h1 style="color:#00a0DF;">Register to become a tutor on iCode.ng </h1><hr>

                    <div class="row">
                      <div class="col-xs-12 col-md-5">
                        <b class="col-xs-12 sub-title" style="color:#00a0DF;">First name</b>
                        <input type="text" class="form-control input" placeholder="First name" name="fname" required>

                        <b class="col-xs-12 sub-title" style="color:#00a0DF;">Last name</b>
                        <input type="text" class="form-control input" placeholder="Last name" name="lname" required>
                      </div>

                      <div class="col-xs-12 col-md-3 col-md-offset-1">
                        <b class="col-xs-12 sub-title" style="color:#FFF; text-align:left;">Upload a photo</b>
                        <div class="input" id="tutorUploadPhotoButton" style="background:#00a0DF;">
                            <img class="img img-responsive" style="width:100px; height:100px;" src="images/icon/1.png">
                        </div>
                        <input type="file" id="tutorUploadPhoto" name="img" required>
                      </div>
                    </div>

                    <div class="row"> 
                      <div class="col-xs-12 col-md-5">
                        <b class="col-xs-12 sub-title" style="color:#00a0DF;">Email</b>
                        <input class="form-control input" type="text" placeholder="yourname@example.com" name="email" required>
                      </div>

                      <div class="col-xs-12 col-md-5 col-md-offset-1">
                        <b class="col-xs-12 sub-title" style="color:#00a0DF;">Phone Number</b>
                        <input class="form-control input" type="text" placeholder="08123456789" name="phone" required>
                      </div>
                    </div>
                   <br><hr>

                    <div class="row">  
                      <div class="col-xs-12 col-md-5">
                        <b class="col-xs-12 sub-title" style="color:#00a0DF;">Confirm your phone number</b>
                        <input class="form-control input" type="text" placeholder="enter phone number again" required>
                      </div>

                      <div class="col-xs-12 col-md-4">
                        <b class="col-xs-12 sub-title" style="color:#00a0DF;">Password</b>
                        <input class="form-control input" type="password" placeholder="enter phone number again" name="pass" required>
                      </div>

                      <div class="col-xs-12 col-md-3">
                        <b class="col-xs-12 sub-title" style="color:#00a0DF;">Confirm Password</b>
                        <input class="form-control input" type="password" placeholder="enter phone number again" required>
                      </div>
                    </div>             

                   <div class="button col-xs-12" style="">
                        <p>{!! $feedback or '' !!}</p>
                       <button id="tutorRegistrationSubmitButton" type="submit" name="signup">Procceed&nbsp;
                            <span class="fa fa-arrow-circle-o-right" style="font-weight:100;"></span>
                        </button>
                    </div>                    
                   <br><br><br><hr><br><hr>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 benefits" style="background-image:url('images/backgrounds/benefits.png')">
            <div class="col-md-4 inner">
                <div class="icon"><img src="images/icon/1.png"></div>
                <h2>Learn from experts</h2>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation.
            </div>
            <div class="col-md-4 inner">
                <div class="icon"><img src="images/icon/2.png"></div>
                <h2>Well strutured courses</h2>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation.
            </div>
            <div class="col-md-4 inner">
                <div class="icon"><img src="images/icon/3.png"></div>
                <h2>Pocket friendly tuition</h2>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation.
            </div>

            <div class="col-xs-12 faq">
                <div class="inner">
                    <h2>Frequently asked questions</h2>
                    <div class="row">
                        <div class="col-xs-6 item">
                            <b>1. What is your name?</b>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.
                        </div>
                        <div class="col-xs-6 item">
                            <b>2. What is your name?</b>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco.
                        </div>
                        <div class="col-xs-6 item">
                            <b>3. What is your name?</b>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor.
                        </div>
                        <div class="col-xs-6 item">
                            <b>4. What is your name?</b>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisiat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop