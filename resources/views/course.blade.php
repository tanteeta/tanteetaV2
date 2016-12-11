@extends('layouts.base')
@section('title', 'Tanteeta - Course Page')

@section('content')

<Style>
    .short div {margin-bottom: 10px;}
</Style>

<div class="col-md-10 col-md-offset-1" style="margin-top: 80px;margin-bottom: 80px;">
    <div class="col-md-12">
        <p>{!! $feedback or '' !!}</p>
        <div class="col-md-4" style="padding-left: 0;">
            <img src="{{ config('app.url') }}/images/courses/{{ $unique->img }}" alt="" class="img-thumbnail" style="height: 250px; width: 100%;">
        </div>
        <div class="col-md-8 col-md-ofset-1 short" style="color: #777;font-size: 17px;"">
            <div class="col-md-12"><h1>{{ $unique->title or 'Tanteeta course' }}</h1></div>

            <div class="pull-left col-md-4">Prerequisites:</div><div class="pull-right col-md-8">None</div><br>
            <div class="pull-left col-md-4">Duration:</div><div class="pull-right col-md-8">{{ $unique->duration }} hours</div><br>
            <div class="pull-left col-md-4">Targeted age group:</div><div class="pull-right col-md-8">{{ $unique->age_range }} years old</div><br>
            <div class="pull-left col-md-4">Course Requirement:</div><div class="pull-right col-md-8">{{ $unique->requirements }}</div><br>
            <div class="pull-left col-md-4">Registration fee:</div><div class="pull-right col-md-8">N3,000</div><br>
        </div>
    </div><br>

    <div class="row col-md-12">
        <div class="col-md-8">
            <h3>Course description</h3>

            <div style="color: #777;font-size: 17px;line-height: 28px;margin-top: 10px;">
                {{ $unique->description }}<br>
            </div>
        </div>
        <div class="col-md-4">
            <h3 style="margin-bottom: 20px;">Register for this course</h3>

            <form method="post">   <!--action="check_email.blade.php"-->
            <!--
                <div>             
                    <div style="width: 49%;display: inline-block;"><input type="text" class="form-control" name="fname" placeholder="First Name"></div>
                    <div style="width: 49%;display: inline-block;"><input type="text" class="form-control" name="lname" placeholder="Last Name"></div>
                </div>
            -->
                <div><input type="text" class="form-control" name="name" placeholder="Full Name"></div> 
                <div><input type="email" id="email" class="form-control" name="email" placeholder="Email" style="margin: 7px 0 10px 0;" required></div>
                <div><input type="tel" id="phone" class="form-control" name="phone" placeholder="Phone number" required></div><br>

                <input type="hidden" value="{{ $unique->id }}" name="id">
                <button type="submit" class="btn btn-warning col-md-12" name="course_verify_email">Proceed</button>
            </form>
        </div>
    </div>
</div>

<!--
<div class="row">
    <div class="col-xs-12 banner" style="background-image:url('{{ config('app.url') }}/images/backgrounds/courses/1.png')">
        
    </div>
    <div class="col-xs-12 banner-text">
        <h1>Mobile app development for teenagers</h1>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 form">
        <div class="col-md-7 col-xs-6 right">
            <h3>Course description</h3>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur.<br>
            <h4>Prerequisite for this course</h4>
            8 years - 16 years.<br>
            <h4>Targeted age group</h4>
            8 years - 16 years.<br>
            <h4>Other details</h4>
            <div><span class="fa fa-clock-o"></span> 120 hours</div>
            <div><span class="fa fa-tags"></span> Python</div>
        </div>
        <div class="col-md-5 col-xs-6 left">
            <form method="post" action="check_email.blade.php">
                <h1>Register for this course</h1><hr>
                <label class="col-xs-12" for="name">Name:</label>
                <div class="col-sm-6"><input type="text" id="name" class="col-xs-12" placeholder="First name" required></div>
                <div class="col-sm-6"><input type="text" class="col-xs-12" placeholder="Last name" required></div>
                <label class="col-xs-12" for="email">Email:</label>
                <div class="col-xs-12"><input type="email" id="email" class="col-xs-12" placeholder="Email" required></div>
                <label class="col-xs-12" for="phone">Phone number:</label>
                <div class="col-xs-12"><input type="tel" id="phone" class="col-xs-12" placeholder="Phone number" required></div>
                <div class="button col-xs-12"><button type="submit">proceed &nbsp; <span class="fa fa-arrow-circle-o-right"></span></button></div>
            </form>
        </div>
    </div>
</div>

<!--
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
            <h2>Well structured courses</h2>
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
-->

@stop