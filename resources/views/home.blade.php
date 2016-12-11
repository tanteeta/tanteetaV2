@extends('layouts.base')
@section('title', 'Tanteeta - Home')

@section('content')

    <div class="row">
        <div class="col-xs-12 col-md-12 cover" style="background-image:url('images/slide/1.png')">
            <div class="cover-text">
                <h1>We are grooming African innovators.<br><small style="color:#fff;">Request for a one-on-one home robotics or<br> coding instructor for your child</small></h1><br>
                <a class="btn btn-lg btn-warning" style="padding: 10px 50px;font-size: 25px;" href="#courses">View our courses&nbsp;<span class="fa fa-arrow-circle-o-right"></span></a>
            </div>
        </div>
            
            <!--
            <form class="col-sm-6 col-sm-offset-3 col-xs-12">
                <input type="search" class="" placeholder="What do you want to learn?">
                <button type="submit"><span class="fa fa-search"></span></button>
            </form>
            -->
    </div>
<!--
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
-->

    <div class="row">
        <div class="col-xs-12 courses" id="courses">
            <h2>Recommended Course Packages</h2>
        @foreach($courses as $course)
            <a href="/course/{{ $course->id }}" class="col-md-3 col-xs-6 item">
                <div class="img" style="background-image:url('{{ config('app.url') }}/images/courses/{{ $course->img }}')"></div>
                <div class="text" style="border: 0;box-shadow: 0px 2px 3px #ccc;">
                    {{ $course->title }}
                    <div class="det">
                        <span><i class="fa fa-user"></i> {{ $course->age_range }} years old</span>
                        <span><i class="fa fa-clock-o"></i> {{ $course->duration }} hours</span>
                    </div>
                </div>
            </a>
        @endforeach
            <a href="/courses" class="view-all-btn" style="color: #888;">view all &nbsp;<span class="fa fa-arrow-circle-o-right"></span></a>
        </div>
    </div>

    <div class="row ben_con">
        <div class="col-xs-12 benefits" style="color:#2987e7;">
            <div class="col-md-4 inner">
                <div class="icon"><img src="images/icon/4.png"></div>
                <h2 style="color:#2987e7;">Learn from experts</h2>
                At Tanteeta, we work with the craziest engineers, scientists and innovators, to create the most engaging STEM courses for teenagers. That's why we don't train, we groom.
            </div>
            <div class="col-md-4 inner">
                <div class="icon"><img src="images/icon/5.png"></div>
                <h2 style="color:#2987e7;">Well strutured courses</h2>
                Our curricula are designed to make each class a 100% hands-on, project-based and fun experience.
            </div>
            <div class="col-md-4 inner">
                <div class="icon"><img src="images/icon/6.png"></div>
                <h2 style="color:#2987e7;">Pocket friendly tuition</h2>
                We provide the young generation an opportunity to grow into excellent innovators by taking our affordable pay-per-month courses.
            </div>
        </div>

        <div class="faq col-xs-12" style="color: #2987e7;" align="center">
            <h3>Frequently Asked Questions</h3>
            <div class="row">
                <div class="col-xs-5 item">
                    <b><w class="number">1</w>&nbsp;&nbsp; What exactly is Tanteeta about?</b>
                    Do you want your kids to be among the next generation of innovators who will take africa to the next level? At Tanteeta, we provide you with the opportunity to get the best instructors available, to groom your kids in coding and robotics at home and/or school.
                </div>
                <div class="col-xs-5 item">
                    <b><w class="number">2</w>&nbsp;&nbsp; How do i know the perfect course for my child?</b>
                    We have a dedicated support team who are alwasy willing and ready to help you make finding that perfect course that's just right for your child. Please feel free to call us on <span style="color:#fbbc05;">09030001991</span> or send us a mail at <span style="color:#fbbc05;">talktous@tanteeta.com</span>
                </div>
                <div class="col-xs-5 item" style="padding-top:20px;">
                    <b><w class="number">3</w>&nbsp;&nbsp; Can I pay the tuition fees altogether?</b>
                    No. We reccomend that you pay on a monthly basis, hence the tuition fees have been carefully broken down to get the monthly value. This break down is attached to an invoice that will be sent to you when you register for a course.
                </div>
                <div class="col-xs-5 item" style="padding-top:20px;">
                    <b><w class="number">4</w>&nbsp;&nbsp; Can I trust your instructors with my child?</b>
                    You absolutely can! We only work with qualified, verified and certified instructors, and above all, all our instructors are specially trained to be competent in child relationship and communication and adhere to strict work ethics.
                </div>
            </div>
        </div>
    </div>
<!--
    <div class="row">
        <div class="col-xs-12 apply">
            Are you an experienced programmer?
            <a href="tutor_registration.blade.php">Apply to teach &nbsp;<span class="fa fa-arrow-circle-o-right"></span></a>
        </div>
    </div>
-->
    <div class="row">
        <div class="col-xs-12 school">
            <div class="col-md-4 col-xs-6 inner img">
                <img src="images/logo/schools.png">                
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