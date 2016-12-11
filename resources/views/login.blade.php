@extends('layouts.base_auth')
@section('title', 'Login')

@section('content')
<!--
    <div class="row">
        <div class="col-xs-12 banner" id="tutor_registration_banner" style="background-image:url('images/slide/1.png')">
            
        </div>
        <div class="col-md-12 banner-text" id="course_two_banner_text">
            <h1 style="">Welcome, log into your profile if you are a tutor.</h1>
        </div>
    </div>
-->

<style type="text/css">
    form input[type="text"], form input[type="password"] {padding: 10px;height: 40px;}
</style>

<center>
    <div style="width: 30%;margin: 10% auto;">
        <p>{!! $feedback or '' !!}</p>
        <div>
            <form method="" class="form-horizontal">
				<div class="col-md-12" style="margin-bottom:20px;">
					<img src="/images/logo/logo.png" alt="" style="height:55px;width:170px;" class="pull-left">
					<h3 class="pull-right" style="line-height:10px;margin-top:12px;"><small>Are you an intructor?<br>login to your profile</small></h3>
				</div>
                <input type="text" class="form-control" name="email" placeholder="Email" style="margin-bottom: 7px;">
                <input type="password" class="form-control" name="password" placeholder="Password"><br>

                <button type="submit" class="btn btn-primary col-md-12" name="login" style="padding: 7px;background-color: #2987e7;border: 0;font-size:20px;">Login</button>
            </form>
        </div>
    </div>
</center>

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