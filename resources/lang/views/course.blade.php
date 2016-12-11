@extends('layouts.base')
@section('title', 'Course')

@section('content')

    <script type="text/javascript">
        function show_block(id1, id2){
            var div1 = document.getElementById(id1);
            var div2 = document.getElementById(id2);

            (div1.style.display == 'block') ? div1.style.display = 'none' : div1.style.display = 'block';
            (div2.style.display == 'block') ? div2.style.display = 'none' : div2.style.display = 'block';
        }
    </script>
    
    <div class="row">
        <div class="col-xs-12 banner" style="background-image:url('{{ config('app.url') }}/images/backgrounds/courses/1.png')"></div>
        <div class="col-xs-12 banner-text">
            <h1>{{ $unique->title or 'Course Title'}}</h1>
            <!--<h1>Mobile app development for teenagers</h1>-->
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 form" style="margin:10px 20px 50px 0;">
		<!--
            <div class="col-md-5 col-xs-6 left hidden-phone">
                <form method="post">

                </form>
            </div>
		-->
            <div class="col-md-7 col-xs-6 rigt">
                <h3>Course description</h3>
                {{ $unique->description or '' }}
                <br>
				
                <h4>Targeted age group</h4>
                {{ /*$unique->age_range or*/ '8 - 16 years old'}}<br>
				
                <h4>Other details</h4>
				
                <div><span class="fa fa-clock-o"></span> {{ $unique->duration . '' }} hours </div>
                <div><span class="fa fa-tags"></span> {{ $unique->type or '' }}</div>

                <div>{!! $feedback or '' !!}</div>
            </div>
			
			<div class="col-md-3 col-xs-3 pull-right">
				<h3>Register for this course</h3>
				<form method="post" onsubmit="" style="margin-top:17px;">
					<input type="text" id="" placeholder="Full name" class="form-control"  name="fullname" required>
					<input type="email" id="" placeholder="Email" class="form-control" name="email" required>
					<input type="number" id="" placeholder="Phone" class="form-control" name="phone" required>
					
					<button type="submit" class="col-md-12 btn btn-primary" class="form-control" name="course_verify_email">Proceed&nbsp;<i class="fa fa-arrow-circle-o-right" style="font-weight:100;"></i></button>
				</form>
			</div>
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

@stop