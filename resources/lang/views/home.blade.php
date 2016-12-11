@extends('layouts.base')
@section('title', 'home')

@section('content')

    <div class="row">
        <div class="col-xs-12 slider">
            <div class="slide" style="background-image:url('images/slide/1.png')"></div>
            <div class="slide" style="background-image:url('images/slide/2.png')"></div>
            <div class="slide" style="background-image:url('images/slide/3.png')"></div>
        </div>
        <div class="col-xs-12 slider-text">
            <h1>We are grooming African innovators.</h1>
            Find computer programming tutors in your neighborhood
            <form class="col-sm-6 col-sm-offset-3 col-xs-12" method="GET" action="/courses">
                <input type="search" class="" name="query" placeholder="What do you want to learn?" required>
                <button type="submit"><span class="fa fa-search"></span></button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 mission">
            <div class="col-sm-6 col-xs-5 left" style="background-image:url('images/backgrounds/1.jpg')">

            </div>
            <div class="col-sm-6 col-xs-7 right">
                <h1>Our Mission</h1>
                We are grooming African innovators by training kids in coding,
                robotics and drone technology because we believe these skills
                are very essential to the future of the continent.<br>
                <a href="/kids">Get a home tutor for your child <span class="fa fa-arrow-circle-o-right"></span></a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 courses">
            <h2>Recommended Course Packages</h2>
        @foreach($courses as $course)
            <a href="/course/{{ $course->id }}" class="col-md-3 col-xs-6 item">
                <div class="img" style="background-image:url('{{ config('app.url') }}/images/slide/1.png')"></div>
                <div class="text">
                    <b>{{ $course->title }}</b>
                    <div style="font-size:60%;margin-tp: 30px;">
                    <span class="type"><i class="fa fa-tag">&nbsp;</i>{{ $course->type . ' course package'}}</span><br>
                    <span><i class="fa fa-user">&nbsp;</i> 8 - 16 years old</span><br>
                    <span><i class="fa fa-clock-o">&nbsp;</i>{{ $course->duration . ' hours'}}</span><br>
                    </div>
                </div>
            </a>
        @endforeach
            <a href="/courses" class="view-all-btn">view all &nbsp;<span class="fa fa-arrow-circle-o-right"></span></a>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 benefits" style="background-image:url('{{ config('app.url') }}/images/backgrounds/benefits.png')">
            <div class="col-md-4 inner">
                <div class="icon"><img src="{{ config('app.url') }}/images/icon/1.png"></div>
                <h2>Learn from experts</h2>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation.
            </div>
            <div class="col-md-4 inner">
                <div class="icon"><img src="{{ config('app.url') }}/images/icon/2.png"></div>
                <h2>Well strutured courses</h2>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation.
            </div>
            <div class="col-md-4 inner">
                <div class="icon"><img src="{{ config('app.url') }}/images/icon/3.png"></div>
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

    <div class="row">
        <div class="col-xs-12 apply">
            Are you an experienced programmer?
            <a href="/signup">Apply to teach &nbsp;<span class="fa fa-arrow-circle-o-right"></span></a>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 school">
            <div class="col-md-4 col-xs-6 inner img">
                <img src="images/logo/transparent_logo_1.png">
                For Schools
            </div>
            <div class="col-md-4 col-xs-6 inner">
                Weekly coding and robotic classes in secondary schools
            </div>
            <div class="col-md-4 col-xs-12 inner">
                <a href="#">register your school &nbsp;<span class="fa fa-arrow-circle-o-right"></span></a>
            </div>
        </div>
    </div>

@stop