@extends('layouts.ordinary')
@section('title', 'Course Registration')

@section('content')		

	<div class="col-md-4" style="margin:0 auto;">
		<form method="post" action="/pay">
			<h1>Register for ...</h1><hr>
			<!--<b class="col-xs-12 sub-title">Student's Information</b>->
			
			<input id="streetAddress" type="text" name="streetAddress" placeholder="Street address" class="col-xs-12 form-control input" required>
			<input type="text" name="city" placeholder="City or nearest bustop" class="col-sm-7 form-control input" required>
			<select class="col-sm-5 form-control input" name="state" id="address" required>
				<option disabled selected>State</option>
				<option>State 2</option>
			</select>			
				
			<input type="date" id="date" name="start" class="form-control input" placeholder="Lessons starts when? e.g 20/09/1995" required>
			
			<select id="student" class="form-control input" name="std_no" required>
				<option selected disabled>Number of students</option>
				<option>2</option>
				<option>3</option><option>4</option>
				<option>5</option>
			</select>

			<select id="location" class="form-control input" name="loc" required>
				<option selected disabled>Where should lessons hold?</option>
				<option value="0">Anywhere agreed on</option>
				<option value="1">Student's location</option>
				<option value="2">Tutor's location</option>
			</select>

			<hr>
			
			<i class="fa fa-plus"></i>&nbsp;Please select the <b style="color:#404040;">days</b> you want lessons to hold per week.<br>
			<i class="fa fa-clock-o"></i>&nbsp;<b style="color:#404040;">Time</b> you want lessons to start, and <br>
			<i class="fa fa-tag"></i>&nbsp;<b style="color:#404040;">Duration</b> for each day.<br><br><hr>

			<!--Monday->
			<div class="row">  
			  <div class="col-xs-12 col-md-1">
				<input type="checkbox" class="form-control checkbox" style="outline:none;position:relative;top:-8px;">                    
			  </div>                 

			  <div class="col-xs-12 col-md-2" style="color:#00a0DF;" id="weekDays"><b>Monday</b></div>

			  <div class="col-xs-6 col-md-4">
				<select id="" class="form-control" style="border:1px solid #ccc;height:25px;padding:2px 5px;font-size:90%;">
					<option selected disabled>Start Time</option>
					<option>10am</option> <option>11am</option>	<option>12noon</option> <option>1pm</option> <option>2pm</option> <option>3pm</option> <option>4pm</option> <option>5pm</option> <option>6pm</option> <option>7pm</option>
				</select>
			  </div>

			  <div class="col-xs-6 col-md-4">
				<select id="" class="form-control" style="border:1px solid #ccc;height:25px;padding:2px 5px;font-size:90%;">
					<option selected disabled>Duration</option>
					<option>1 hour</option> <option>2 hours</option> <option>3 hours</option> <option>4 hours</option>
				</select>
			  </div>
			</div>
		
			<hr>
			
			<select class="form-control input" name="gender" id="gender" required>
				<option disabled selected>Preferred instructor gender</option>
				<option value="0">Male</option>
				<option value="1">Female</option>
			</select>

			<textarea id="textareaChars" class="form-control input" maxlength="200" rows="6" style="max-width:100%;" name="goal" placeholder="What's your goal for this course? e.g at the end of this tutelage, my child should be able to build his own games."></textarea>
			<!--<span id="chars">200</span> characters remaining-->
			
			<br>
			<input type="hidden" name="email" value="abbeybiss@gmail.com"> {{-- required --}}
			<input type="hidden" name="orderID" value="5">
            <input type="hidden" name="amount" value="20000"> {{-- required in kobo --}}
            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
            <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}">
			
		   <button type="submit" class="btn btn-primary col-md-12" name="register" >Proceed to payment&nbsp;<span class="fa fa-arrow-circle-o-right" style="font-weight:100;"></span></button>
		   
		</form>
	</div>
	
@stop