@extends('layouts.base_course2')
@section('title', 'Course2')

@section('content')

<div class="row">
    <div class="col-xs-12 banner" style="background-image:url('images/slide/1.png')">
        
    </div>
    <div class="col-xs-12 banner-text" id="course_two_banner_text">
        <h1 style="">Thank you for choosing iCode.ng, Olaoluwa<br>We need to know a little more about your request</h1>
    </div>
</div>




<div class="row">
    <div class="col-xs-12 form course_two_form">

        <div class="col-md-7 col-xs-12 left">
            <form method="post">
                <h1 style="color:#00a0DF;">Step 2 of 3: Course Registration </h1><hr>

                <b class="col-xs-12 sub-title" style="color:#00a0DF;">Lesson Details</b>

                <i class="fa fa-plus"></i>&nbsp;Please select the <b style="color:#404040;">days</b> you want lessons to hold per week.<br>
                <i class="fa fa-clock-o"></i>&nbsp;<b style="color:#404040;">Time</b> you want lessons to start, and the <br>
                <i class="fa fa-tag"></i>&nbsp;<b style="color:#404040;">Duration</b> for each day.<br><br><hr>



                <div class="row">  

                  <div class="col-xs-12 col-md-5">
                  <!-- <b class="col-xs-12 sub-title" style="color:#00a0DF;"></b> -->
                    <b class="" style="color:#00a0DF;">Monday</b>
                    <input type="checkbox" class="form-control checkbox" style="outline:none;">
                    
                  </div>

                  

                  <div class="col-xs-12 col-md-4">
                    <select id="" class="form-control input">
                        <option selected>Start Time</option><option>10am</option><option>11am</option>
                        <option>12noon</option><option>1pm</option><option>2pm</option><option>3pm</option>
                        <option>4pm</option><option>5pm</option><option>6pm</option><option>7pm</option>
                    </select>
                  </div>

                  <div class="col-xs-12 col-md-3">
                    <select id="" class="form-control input">
                        <option selected>Duration</option><option>1 hour</option><option>2 hours</option>
                        <option>3 hours</option><option>4 hours</option>
                    </select>
                  </div>
                </div>
                
                <!-- <button class="btn btn-sm pull-right" id="addMore" style=""><i class="fa fa-plus"></i>&nbsp;Add more</button> -->

                <b class="col-xs-12 sub-title" style="color:#00a0DF; border-top:1px solid rgba(0,0,0,0.2); margin-top:2%;">
                <br>Preferred gender of instructor</b>

                <select class="form-control input" name="gender" id="gender">
                    <option disabled selected class="disabled">Select gender</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>

                <b class="col-xs-12 sub-title" style="color:#00a0DF;">Tell us your goal (no more than 200 characters)</b>
                <textarea id="textareaChars" class="form-control input" maxlength="200" rows="6" style="max-width:100%;"></textarea>
                <span id="chars">200</span> characters remaining


                <b class="col-xs-12 sub-title" style="color:#00a0DF;">Phone number</b>
                <input class="form-control input" type="text" placeholder="enter phone number">

               <b class="col-xs-12 sub-title" style="color:#00a0DF;">Confirm your phone number</b>
               <input class="form-control input" type="text" placeholder="enter phone number">

               <div class="button col-xs-12" style="">
               <button type="submit" name="register" style="background:#CC0000; border:none; box-shadow:none; font-weight:100;">Finish&nbsp;<span class="fa fa-arrow-circle-o-right" style="font-weight:100;"></span></button>
               </div>
            </form>
        </div>


        <div class="col-md-5 col-xs-6 right">
            <img class="img img-responsive" src="images/admin/1.jpg">
            <h4 style="line-height:150%; font-weight:100; color:#404040;">
            Hello Ola! My name is Olaoluwa. I am the tuition manager at iCode.ng and a Java programmer. You can
            call me on <b>08037141630</b> if you need help with your registration.
            </h4>

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
            <h2>Well structured courses</h2>
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