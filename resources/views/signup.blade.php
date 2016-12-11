@extends('layouts.base_auth')
@section('title', 'Signup')

@section('content')

<!--
<div class="row">
    <div class="col-xs-12 banner" id="tutor_registration_banner" style="background-image:url('images/slide/1.png')"></div>
    <div class="col-md-12 banner-text" id="course_two_banner_text">
        <h1 style="">Thanks for choosing iCode.ng. Become a Tutor!<br>Join our stream of decent developers across Africa</h1>
    </div>
</div>
-->
    <style type="text/css">
        form input {margin-bottom: 7px;}
        form input[type="text"], form input[type="password"], form input[type="number"], form input[type="email"] {padding: 10px;height: 40px;}
    </style>

    <div align="center">
        <div style="width: 40%;margin: 10% auto;">
            <p>{!! $feedback or '' !!}</p>

            <form method="" class="form-horizontal">
				<div class="col-md-12" style="margin-bottom:20px;">
					<img src="/images/logo/logo.png" alt="" style="height:60px;width:170px;" class="pull-left">
					<h2 class="pull-right"><small>Register to become an instructor</small></h2>
				</div>
                <div>
                    <div style="width: 49%;display: inline-block;"><input type="text" class="form-control" name="fname" placeholder="First Name"></div>
                    <div style="width: 49%;display: inline-block;"><input type="text" class="form-control" name="lname" placeholder="Last Name"></div>
                </div>

                <div>
                    <div style="width: 49%;display: inline-block;"><input type="number" class="form-control" name="phone" placeholder="Phone Number"></div>
                    <div style="width: 49%;display: inline-block;"><input type="email" class="form-control" name="email" placeholder="Email"></div>
                </div>

                <div>
                    <div style="width: 49%;display: inline-block;"><input type="password" class="form-control" name="pass" placeholder="Password"></div>
                    <div style="width: 49%;display: inline-block;"><input type="password" class="form-control" name="cpass" placeholder="Confirm Password"></div>
                </div><br>

                <button type="submit" class="btn btn-primary col-md-12" name="" style="font-size:20px;background-color: #2987e7;padding: 10px;border: 0;">Sign Up</button>
            </form> 
        </div>
    </div>

<!--
<div class="row">
    <div class="col-xs-12 form course_two_form">
        <div class="col-md-8 col-md-offset-2 col-xs-12 left">
            {!! $feedback or '' !!}
            <form method="post" enctype="multipart/form-data">
                <h1 style="color:#00a0DF;">Register to become a tutor on iCode.ng </h1><hr>
                
                <div class="row">  
                    <div class="col-xs-12 col-md-5">
                        <b class="col-xs-12 sub-title" style="color:#00a0DF;">First name</b>
                        <input type="text" class="form-control" placeholder="First name" name="fname" required>

                        <b class="col-xs-12 sub-title" style="color:#00a0DF;">Last name</b>
                        <input type="text" class="form-control" placeholder="Last name" name="lname" required>
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
                    <input class="form-control" type="email" placeholder="yourname@example.com" name="email" required>
                    </div>

                    <div class="col-xs-12 col-md-5 col-md-offset-1">
                       <b class="col-xs-12 sub-title" style="color:#00a0DF;">Phone Number</b>
                        <input class="form-control" type="number" placeholder="08123456789" name="phone" required>
                    </div>
                </div>
               <br><hr>
                
                <div class="row"> 
                  <div class="col-xs-12 col-md-5">
                    <b class="col-xs-12 sub-title" style="color:#00a0DF;">Confirm your phone number</b>
                    <input class="form-control" type="number" placeholder="enter phone number again" required>
                  </div>

                  <div class="col-xs-12 col-md-4">
                    <b class="col-xs-12 sub-title" style="color:#00a0DF;">Password</b>
                    <input class="form-control" type="password" placeholder="enter phone number again" name="pass" required>
                  </div>

                  <div class="col-xs-12 col-md-3">
                    <b class="col-xs-12 sub-title" style="color:#00a0DF;">Confirm Password</b>
                    <input class="form-control" type="password" placeholder="enter phone number again" required>
                  </div>
                </div>             

               <div class="button col-xs-12" style="">
                   <button type="submit" name="signup" id="tutorRegistrationSubmitButton">Procceed&nbsp;
                        <span class="fa fa-arrow-circle-o-right" style="font-weight:100;"></span>
                    </button>
                </div>
               <br><br><br><hr><br><hr>
            </form>
        </div>
    </div>
</div>
-->

<!--
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
-->

@stop