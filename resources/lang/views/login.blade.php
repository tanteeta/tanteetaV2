@extends('layouts.base_course2')
@section('title', 'Login')

@section('content')

    <div class="row">
        <div class="col-xs-12 banner" id="tutor_registration_banner" style="background-image:url('images/slide/1.png')">
            
        </div>
        <div class="col-md-12 banner-text" id="course_two_banner_text">
            <h1 style="">Welcome, log into your profile if you are a tutor.</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 form course_two_form">
            <div class="col-md-8 col-md-offset-2 col-xs-12 left">
                <form method="post">
                    <div class="row col-md-5">
                      <div class="col-xs-12">
                        <b class="col-xs-12 sub-title" style="color:#00a0DF;">Email</b>
                        <input type="email" class="form-control input" placeholder="Email..." name="email" required>

                        <b class="col-xs-12 sub-title" style="color:#00a0DF;">Password</b>
                        <input type="password" class="form-control input" placeholder="Password..." name="password" required>
                      </div>
                    </div>             

                    <p>{{ $feedback or '' }}</p>

                    <div class="button col-xs-12" style="">                        
                       <button id="tutorRegistrationSubmitButton" type="submit" name="signup">Login&nbsp;
                            <span class="fa fa-arrow-circle-o-right" style="font-weight:100;"></span>
                        </button>
                    </div>                    
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