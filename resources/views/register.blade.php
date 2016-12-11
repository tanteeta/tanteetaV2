@extends('layouts.ordinary')
@section('title', 'Tanteeta - Course Registration')

@section('content')		

{!! $hide or '' !!}
<div class="row">
    <div class="col-xs-12 reg-form"> <!-- class="reg-form" -->
        <div class="col-xs-12">
            <h3>Complete registration for <span style="color: #777;">"{{ $course_title['title'] }}"</h3>

            <p style="color: red;">{!! $feedback or '' !!}</p>
            <hr>            

            <form method="post" class="col-xs-8 col-sm-9" id="reg_form" action="/pay">
                <ul class="col-xs-12" role="tablist">
                    <li role="presentation" class="col-xs-6 active">
                        <a href="#student-info" aria-controls="student-info" role="tab" data-toggle="tab" id="student">
                            1. <span class="fa fa-user-o"><div class="arrow"></div></span> Student info
                        </a>
                    </li>
                    <li role="presentation" class="col-xs-6">
                        <a href="#lesson-info" aria-controls="lesson-info" role="tab" data-toggle="tab" id="lesson" class="disabled">
                            2. <span class="fa fa-calendar"><div class="arrow"></div></span> Lesson info
                        </a>
                    </li>
                </ul>
                <div class="tab-content col-xs-12">
                    <div class="error-msg"></div>
                    <div role="tabpanel" class="tab-pane fade in active" id="student-info">
                        <div class="row">
                            <input type="hidden" name="id" value="{{ $register->course_id or ''}}">
                            <input type="hidden" name="amount" value="">
                            <div class="col-xs-12">
                                <label for="name">Full name:</label>
                            </div>
                            <div class="col-xs-12">
                                <input class="col-xs-12 col-sm-6" type="text" id="name" name="name" value="{{ $register->name or '' }}" required readonly>
                            </div>

                            <div class="col-xs-12">
                                <label for="name">Number of students:</label>
                            </div>
                            <div class="col-xs-12">
                                <input class="col-xs-12 col-sm-6" type="number" id="student_no" name="student_no" placeholder="e.g 1" required>
                            </div>

                            <div class="col-xs-12">
                                <label for="class">Prefered gender of instructor:</label>
                                <select class="col-xs-12" name="gender" id="gender" required>
                                    <option value="any" selected>Any gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>

                            <div class="col-xs-12">
                                <label for="street">Training location:</label>
                            </div>
                            <div class="col-xs-12">
                                <input class="col-xs-12" id="address" name="street" placeholder="Street address" required>
                            </div>                            
                            <div class="col-xs-12 col-sm-6">
                                <input class="col-xs-12" type="text" name="city" placeholder="City" required>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <input class="col-xs-12" type="text" name="state" placeholder="State" required>
                            </div>
                            

                            <div class="col-xs-12">
                                <label for="contact">Contact details:</label>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <input class="col-xs-12" type="email" id="contact" name="email" placeholder="Email" value="{{ $register->email or '' }}" readonly>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <input class="col-xs-12" type="tel" name="phone" placeholder="Phone" value="{{ $register->phone or '' }}" readonly>
                            </div>

                            <div class="move-btn inactive">Next <span class="fa fa-angle-double-right"></span></div>
                            <div class="move-btn active">Next <span class="fa fa-angle-double-right"></span></div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="lesson-info">
                        <div class="row section">
                            <b class="col-xs-12">Lesson periods</b>
                            <div class="col-xs-12 note">
                                Select the desired days, time and duration for your lessons.
                            </div>
                            <div class="col-xs-12 col-sm-10 col-md-8 period">
                                <b class="col-xs-4">Days</b>
                                <b class="col-xs-4">Time</b>
                                <b class="col-xs-4">Duration (hrs)</b>
                            </div>

                            <div class="col-xs-12 col-sm-10 col-md-8 period" data-toggle="buttons">
                                <label class="col-xs-4 btn">
                                  <input type="checkbox" name="day[]" value="Monday"><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span> Monday</pan>
                                </label>
                                <div class="col-xs-4"><input class="col-xs-12" type="time" name="time[]" min="10:00" max="19:00" placeholder="10:00" disabled>
                                </div>
                                <div class="col-xs-4 duration">
                                    <input type="number" class="col-xs-12" min="2" max="5" name="duration[]" placeholder="2" disabled>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-10 col-md-8 period" data-toggle="buttons">
                                <label class="col-xs-4 btn">
                                  <input type="checkbox" name="day[]" value="Tuesday"><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span> Tuesday</pan>
                                </label>
                                <div class="col-xs-4"><input class="col-xs-12" type="time" name="time[]" min="08:00:00" max="18:00:00" placeholder="10:00" disabled></div>
                                <div class="col-xs-4 duration">
                                    <input type="number" class="col-xs-12" min="2" max="5" name="duration[]" placeholder="2" disabled>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-10 col-md-8 period" data-toggle="buttons">
                                <label class="col-xs-4 btn">
                                  <input type="checkbox" name="day[]" value="Wednesday"><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span> Wednesday</pan>
                                </label>
                                <div class="col-xs-4"><input class="col-xs-12" type="time" name="time[]" min="08:00:00" max="18:00:00" placeholder="10:00" disabled></div>
                                <div class="col-xs-4 duration">
                                    <input type="number" class="col-xs-12" min="2" max="5" name="duration[]" placeholder="2" disabled>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-10 col-md-8 period" data-toggle="buttons">
                                <label class="col-xs-4 btn">
                                  <input type="checkbox" name="day[]" value="Thursday"><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span> Thursday</pan>
                                </label>
                                <div class="col-xs-4"><input class="col-xs-12" type="time" name="time[]" min="08:00:00" max="18:00:00" placeholder="10:00" disabled></div>
                                <div class="col-xs-4 duration">
                                    <input type="number" class="col-xs-12" min="2" max="5" name="duration[]" placeholder="2" disabled>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-10 col-md-8 period" data-toggle="buttons">
                                <label class="col-xs-4 btn">
                                  <input type="checkbox" name="day[]" value="Friday"><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span> Friday</pan>
                                </label>
                                <div class="col-xs-4"><input class="col-xs-12" type="time" name="time[]" min="08:00:00" max="18:00:00" placeholder="10:00" disabled></div>
                                <div class="col-xs-4 duration">
                                    <input type="number" class="col-xs-12" min="2" max="5" name="duration[]" placeholder="2" disabled>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-10 col-md-8 period" data-toggle="buttons">
                                <label class="col-xs-4 btn">
                                  <input type="checkbox" name="day[]" value="Saturday"><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span> Saturday</pan>
                                </label>
                                <div class="col-xs-4"><input class="col-xs-12" type="time" name="time[]" min="08:00:00" max="18:00:00" placeholder="10:00" disabled></div>
                                <div class="col-xs-4 duration">
                                    <input type="number" class="col-xs-12" min="2" max="5" name="duration[]" placeholder="2" disabled>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-10 col-md-8 period" data-toggle="buttons">
                                <label class="col-xs-4 btn">
                                  <input type="checkbox" name="day[]" value="Sunday"><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span> Sunday</pan>
                                </label>
                                <div class="col-xs-4"><input class="col-xs-12" type="time" name="time[]" min="08:00:00" max="18:00:00" placeholder="10:00" disabled></div>
                                <div class="col-xs-4 duration">
                                    <input type="number" class="col-xs-12" min="2" max="5" name="duration[]" placeholder="2" disabled>
                                </div>
                            </div>
                        </div>
					<!--
                        <div class="row section">
                            <b class="col-xs-12">Lesson venue</b>
                            <div class="col-xs-12 note">
                                Where do you want your lessons to hold?
                            </div>
                            <div class="col-xs-12 col-sm-10 col-md-8 venue" data-toggle="buttons">
                                <label class="btn active" for="yourPlace">
                                    <input name="venue" id="yourPlace" value="yourPlace" type="radio" checked>
                                    <i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i>
                                    <span>
                                        Your venue<br>
                                    </span>
                                </label>
                                <label class="btn" for="instructorPlace">
                                    <input name="venue" id="instructorPlace" value="instructorPlace" type="radio">
                                    <i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i>
                                    <span>
                                        Instructor's venue<br>
                                    </span>
                                </label>
                                <label class="btn" for="Anywhere">
                                    <input name="venue" id="Anywhere" value="Anywhere" type="radio">
                                    <i class="fa fa-circle-o"></i><i class="fa fa-dot-circle-o"></i>
                                    <span>
                                        Anywhere convenient<br>
                                    </span>
                                </label>
                            </div>
                        </div>
					-->
                        <div class="alert alert-info" style="line-height: 20px;">
                            <p><b>Please Note: </b>Your registration details will be saved when you click the 'submit' button and you will be redirected to our payment page where you are to pay a registration fee of <b>N3,000.</b></p>
                        </div>
                        <div class="move-btn inactive" type="submit" disabled>Submit <span class="fa fa-angle-double-right"></span></div>
                        <button class="move-btn active" type="submit">Submit <span class="fa fa-angle-double-right"></span></button>

                    </div>
                </div>

                <input type="hidden" name="amount" value="300000"> {{-- required in kobo --}}
                <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}">
            </form>
            <div class="col-xs-4 col-sm-3 help">
                    <img src="images/admin/1.jpg">
                    call Bukumi on <b>09030001991</b> for assistance or clarification.
            </div>
        </div>
    </div>
</div>
	
@stop