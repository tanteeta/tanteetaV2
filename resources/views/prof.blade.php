@extends('layouts.base_profile')
@section('title', 'Profile')

@section('content')
<!-
    <div class="row" id="profileBody">
    <div class="all-courses" id="profile">
        <div class="row">
            <div class="col-sm-3" id="profilePicture">

                <div class="help col-sm-12">
                    <img class="img img-responsive img-rounded" src="{{ config('app.url') }}/images/admin/1.jpg">
                </div>

                <div class="col-sm-12 edit" id="icon-overlay">
                    <i class="fa fa-camera" id="cameraIcon"></i>
                    <input type="file" id="uploadPhoto">
                </div>
            </div>

            <div class="col-sm-7 right" id="basicInformation">

                <h2 style="line-height:120%; color:#00a0DF;">
                    <span class="fa fa-user"></span> {{ $info->first_name }} {{ $info->last_name }}</h2>
                
                <h3 style="line-height:150%;" class="predefinedAddress">
                    <span class="fa fa-home"></span> Address&nbsp;
                    <i id="editAddress" class="fa fa-pencil edit"></i>
                </h3>

                <div class="newAddress row">
                  <div class="col-xs-12 col-md-6 ">
                    <input class="form-control input" type="text" id="" name="" value="{{ $info->street_address }}">
                  </div>
                  <div class="col-xs-12 col-md-3">
                    <select id="" class="form-control input">
                        <option selected>{{ $info->city }}</option><option>2</option>
                    </select>
                  </div>
                  <div class="col-xs-12 col-md-3">
                    <select id="" class="form-control input">
                        <option selected>{{ $info->state }}</option><option>2</option>
                    </select>
                  </div><br>
                </div>

                <ul id="sub" class="row">
                    <li class="predefinedEmail" style="color:#00a0DF;"><span class="fa fa-envelope"></span> {{ $info->email }}</li>

                    <li class="predefinedPhone"><span class="fa fa-phone"></span> {{ $info->phone }}</li>                    
                    <li class="newPhone col-xs-6 col-md-6"><input class="form-control input" type="text" id="" name="" value="phone number"><li>

                    <li class="predefinedGender" style="border-right:none;"><span class="fa fa-user"></span> {{ $info->gender }}&nbsp;
                    <i id="editGender" class="fa fa-pencil edit"></i></li>
                    <li class="newGender col-xs-6 col-md-5">
                        <select id="" class="form-control input">
                            <option selected>select gender</option><option>male</option><option>female</option>
                        </select>
                    <li>
                </ul>           

                <hr style="box-shadow:-2px 3px 5px #00a0DF;">

                <div class="">
                    <div class="progress progress-striped active">
                      <div class="progress-bar"  role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                        <span class="">35% Complete</span>
                      </div>
                    </div>

                    <h4 style="color:#808080; font-weight:100; line-height:140%;">
                        Welcome aboard, <span style="color:#00a0DF;">{{ $info->first_name }},</span> you are only 35% done. You need to FULLY setup your 
                        account to be qualified to teach our students in homes and schools.<br>
                        <span style="color:#00a0DF;">Please note that any false details detected disqualifies you automatically!</span>
                    </h4>

                    <a id="completeProfileButton" class="btn" style="">Click to complete your Profile</a>
                    <a id="doneEditing" class="btn" style="background:green;">Done Editing</a>
                </div>
                <!- <button id="doneEditing" class="btn"> Done Editing </button> ->
            </div>

            <div class="col-md-10" id="lessons">              
            <button class="btn" id="closeLessonList" style="">
            <i class="fa fa-close"></i> close</button>

            <table class="table table-condensed">                
                <thead>
                    <th class="hidden-xs">S/N</th>
                    <th>Student</th>
                    <th>Address<i class="visible-xs">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i></th>
                    <th>Frequency per week</th>
                    <th>Phone</th>
                    <th>Status</th>
                </thead>

                <tbody>
                    @foreach($lessons as $lesson)
                        <tr>
                            <td class=\"hidden-xs\">{{ $loop->iteration }}</td>
                            <td><a class=\"btn\" id=\"studentDetails\">{{ $lesson->st_name }}</a></td>

                            <td>{{ $lesson->st_street }},{{ $lesson->st_city }},{{ $lesson->st_state }}.</td>

                            <td>{{ $lesson->days }}</td>

                            <td class=\"hidden-xs\">{{ $lesson->st_phone }}</td>

                            <td class=\"visible-xs\">
                                <a style=\"background:rgba(0,0,0,0.2);\" href=\"tel: \" class=\"btn btn-sm\"><i class=\"fa fa-phone\"></i>&nbsp; call</a>
                            </td>

                            <td class=\"warning\">{{ $lesson->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>          

            <div class="row" id="explicitInformation">
            <button class="btn" id="returnToTable"><i class="fa fa-arrow-left"></i> Return to table</button><hr>                
                <div class="col-md-5 profileGrid" id="gridOne" style="height:230px; background:#FFF; border:1px solid #707070;border-right:none;border-bottom:1px dotted #707070;">
                    
                    <h1><i class="fa fa-folder-open pull-right"></i></h1>
                    <h4><i class="fa fa-user"></i>&nbsp; Student's Name</h4>
                    <p>Bayode Patience</p>

                    <h4><i class="fa fa-phone"></i>&nbsp;Phone</h4>
                    <p>08069594450</p>

                    <h4><i class="fa fa-user"></i>&nbsp;Gender</h4>
                    <p>Female</p>
                </div>

                <div class="col-md-2 profileGrid" id="gridTwo" style="height:230px; background:#f5f5f5;border-top:none;border-left:none;border-bottom:1px dotted #707070;"></div>

                <div class="col-md-5 profileGrid" id="gridThree" style="height:230px; background:#FFF; border:1px solid #707070;border-left:none;border-bottom:1px dotted #707070;">
                    
                    <h1><i class="fa fa-map-marker pull-right"></i></h1>
                    <h4><i class="fa fa-home"></i>&nbsp;House Address</h4>
                    <p>34, Ajanlekoko street, Ikotun34, Ajanlekoko street</p>

                    <h4><i class="fa fa-bus"></i>&nbsp;Nearest Bus stop</h4>
                    <p>Jibowu Bus stop</p>

                    <h4><i class="fa fa-globe"></i>&nbsp;State</h4>
                    <p>Lagos</p>
                </div>

                <div class="col-md-5 profileGrid" id="gridFour" style="height:230px; background:#FFF; border:1px solid #707070; border-right:none; border-top:none;">
                    <h3>Lesson details</h3>
                    <!- <h4><i class="fa fa-user"></i>&nbsp; Start date</h4> ->
                    <p>Lesson started 43rd March, 2016 and takes place at the student's house.</p>

                    <h4><i class="fa fa-stats"></i>&nbsp;Frequency</h4>
                    <p>3 times per week</p>
                    <h1><i class="fa fa-leaf pull-right"></i></h1>
                </div>

                <div class="col-md-2 profileGrid" id="gridFive" style="height:230px; background:#f5f5f5;border-left:none; border-bottom:none;border-right:none;"></div>

                <div class="col-md-5 profileGrid" id="gridSix" style="height:230px; background:#FFF; border:1px solid #707070; border-left:none; border-top:none;">
                    <h3>Goals</h3>
                    <!- <h4><i class="fa fa-user"></i>&nbsp; Start date</h4> ->
                    <p>Three months from now, i want to be an extremely good Mobile App developer. My school will be granting scholarships to 
                    students who can code</p>     

                    <h1><i class="fa fa-signal pull-right"></i></h1>           
                </div>
            </div>
            </div>

            <div class="col-sm-2" id="lessonStatus">
                <div class="help col-sm-12" id="minifiedProfilePicture">
                    <img class="img img-responsive img-rounded" src="{{ config('url') }}/images/admin/1.jpg">
                </div>
                <div class="row hidden-xs" id="lessonNotification">                    
                    <h3 class="title" style="text-align:center;">My lessons</h3>

                    <div class="col-md-12 col-sm-4 col-xs-12" id="sidebar">                
                        <h1 class="col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3" id="counter">5</h1><br>
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <p>You have 5 Active lessons<p>
                                <button id="viewAllLessons">View all lessons</button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>


<div class="row" id="otherInformation" style="border-top:0.5em solid rgba(0,0,0,0.1);padding:1%; margin-top:0%;">
    
    <div class="container" style="">        
        <div class="row">

            <div class="col-md-7" style="padding:">

                <div class="educationalBackground">
                    <h2 id="profileSubHeadings"><i class="fa fa-graduation-cap"></i>&nbsp;Educational Background&nbsp;<i id="editEducationalBackground" class="fa fa-pencil edit"></i></h2>
                    <div class="container" id="predefinedHighestEducationalBackground">
                        <h4 style="color:#00A0DF; line-height:120%; font-weight:100;">Highest Educational Attainment [BSc] </h4>
                        <h4 style="color:#00A0DF; line-height:120%; font-weight:100;">Obafemi Awolowo University, Ile-ife, osun state (2010)</h4>
                    </div>
                    

                    <div class="container" id="newHighestEducationalBackground" style="">
                        <h4 style="font-weight:100; color:#00A0DF; line-height:120%;">What is your highest educational attainment?</h4>
                      <div class="col-xs-12 col-md-3">
                        <select id="" class="form-control input">
                            <option selected>Highest educational attainment</option>
                            <option>SSCE</option><option>Bachelors' degree</option>
                            <option>Masters' degree</option><option>Ph.D</option>
                        </select>
                        <input type="text" class="form-control input" value="School">
                        <select id="" class="form-control input">
                            <option selected>Select year</option>
                            <option>2011</option><option>2012</option>
                            <option>2013</option><option>2014</option>
                        </select>
                      </div>
                    </div>
                </div>




                <div class="workExperience" style="margin-top:5%;">
                    <h2 id="profileSubHeadings"><i class="fa fa-briefcase"></i>&nbsp;Work Experience&nbsp;<i id="editWorkExperience" class="fa fa-pencil edit"></i></h2>

                    <div class="container" id="predefinedWorkExperience">
                        <h4 style="font-weight:100; color:#00A0DF; line-height:125%;">
                            <span style="font-weight:100;">[2015 till date]</span> - System Architect Engineer at Konga</h4>
                        <h4 style="font-weight:100; color:#00A0DF; line-height:125%;">
                            <span style="font-weight:100;">[2013 - 2015]</span> - Back-end Developer at uRegister.com</h4>        
                        <h4 style="font-weight:100; color:#00A0DF; line-height:125%;">
                            <span style="font-weight:100;">[2012 - 2013]</span> - Mobile App Developer at idubb.com</h4>        
                    </div>
                    


                    <div class="col-md-6" id="newWorkExperience">

                        <div id="experienceOne">                      
                          <h4 style="font-weight:100; color:#00A0DF; line-height:125%;">(1)</h4> 
                          <input type="text" class="form-control input" value="Job Title">                      
                          <input type="text" class="form-control input" value="Company">                  

                           <div class="row"> 
                              <div class="col-xs-6 col-md-5">
                                <select id="" class="form-control input col-md-6">
                                    <option selected>from</option>
                                    <option>2013</option><option>2014</option>
                                    <option>2015</option><option>2016</option>
                                </select>
                              </div>

                              <div class="col-xs-6 col-md-5 col-md-offset-1">
                                <select id="" class="form-control input col-md-6">
                                    <option selected>to</option>
                                    <option>2013</option><option>2014</option>
                                    <option>2015</option><option>2016</option>
                                </select>
                              </div>
                            </div>
                        </div>                      
                        <hr>



                        <div id="experienceTwo">                      
                          <h4 style="font-weight:100; color:#00A0DF; line-height:125%;">(2)</h4> 
                          <input type="text" class="form-control input" value="Job Title">                      
                          <input type="text" class="form-control input" value="Company">                  

                           <div class="row"> 
                              <div class="col-xs-6 col-md-5">
                                <select id="" class="form-control input col-md-6">
                                    <option selected>from</option>
                                    <option>2013</option><option>2014</option>
                                    <option>2015</option><option>2016</option>
                                </select>
                              </div>

                              <div class="col-xs-6 col-md-5 col-md-offset-1">
                                <select id="" class="form-control input col-md-6">
                                    <option selected>to</option>
                                    <option>2013</option><option>2014</option>
                                    <option>2015</option><option>2016</option>
                                </select>
                              </div>
                            </div>
                        </div>




                        <div id="experienceThree">                      
                          <h4 style="font-weight:100; color:#00A0DF; line-height:125%;">(3)</h4> 
                          <input type="text" class="form-control input" value="Job Title">                      
                          <input type="text" class="form-control input" value="Company">                  

                           <div class="row"> 
                              <div class="col-xs-6 col-md-5">
                                <select id="" class="form-control input col-md-6">
                                    <option selected>from</option>
                                    <option>2013</option><option>2014</option>
                                    <option>2015</option><option>2016</option>
                                </select>
                              </div>

                              <div class="col-xs-6 col-md-5 col-md-offset-1">
                                <select id="" class="form-control input col-md-6">
                                    <option selected>to</option>
                                    <option>2013</option><option>2014</option>
                                    <option>2015</option><option>2016</option>
                                </select>
                              </div>
                            </div>
                        </div>                      
                        <hr>



                        <div id="experienceFour">                      
                          <h4 style="font-weight:100; color:#00A0DF; line-height:125%;">(4)</h4> 
                          <input type="text" class="form-control input" value="Job Title">                      
                          <input type="text" class="form-control input" value="Company">                  

                           <div class="row"> 
                              <div class="col-xs-6 col-md-5">
                                <select id="" class="form-control input col-md-6">
                                    <option selected>from</option>
                                    <option>2013</option><option>2014</option>
                                    <option>2015</option><option>2016</option>
                                </select>
                              </div>

                              <div class="col-xs-6 col-md-5 col-md-offset-1">
                                <select id="" class="form-control input col-md-6">
                                    <option selected>to</option>
                                    <option>2013</option><option>2014</option>
                                    <option>2015</option><option>2016</option>
                                </select>
                              </div>
                            </div>
                        </div> 

                        <button class="btn pull-right" id="addMoreWorkExperience" style="margin-top:1%; background:#00A0DF; color:#FFF;"><i class="fa fa-plus"></i>&nbsp;add more</button>
                        <button class="btn pull-right" id="goBack" style="margin-top:1%; background:#00A0DF; color:#FFF;"><i class="fa fa-plus"></i>&nbsp;go back</button>


                    </div>


                </div>               

            </div>









            <div class="col-md-5" style="padding:%;">

                <div class="skillset">
                    <h2 id="profileSubHeadings"><i class="fa fa-plus"></i>&nbsp;Skills&nbsp;<i id="editSkillset" class="fa fa-pencil edit"></i></h2>
                    <!- <h4 style="font-weight:100; color:#00A0DF;">I know about</h4>  ->
                    
                    <div class="row" id="predefinedSkillset">
                      <ul>                        
                        <li><button id="skills"><span class="fa fa-tags"></span> Javascript</button></li>
                        <li><button id="skills"><span class="fa fa-tags"></span> C#</button></li>
                        <li><button id="skills"><span class="fa fa-tags"></span> Python</button></li>
                        <li><button id="skills"><span class="fa fa-tags"></span> Android App Development</button></li>
                        <li><button id="skills"><span class="fa fa-tags"></span> Ruby</button></li>
                      </ul>
                    </div>


                    <div class="row" id="newSkillset" style="padding:;">
                        <h4 style="font-weight:100; color:#00A0DF;padding:0 5% 0 5%; line-height:125%;">Simply select a new skill from the dropdown below</h4>        
                        <select id="" class="col-md-6 form-control input col-xs-12" style="padding:0 5% 0 5%;">
                            <option selected="" disabled="">Select a new skill</option>
                            <option>Java</option><option>Android App Development</option>
                            <option>Objective-C</option><option>Django</option>
                        </select>
                    </div>

                </div>




                <div class="onlinePresence" style="margin-top:5%;">
                    <h2 id="profileSubHeadings"><i class="fa fa-globe"></i>&nbsp;Social media verification</h2>

                    <div class="row"> 
                      <div class="col-xs-12 col-md-12">                        
                        <h4 style="font-weight:100; color:#00A0DF; line-height:125%;">LinkedIn</h4>        
                        <input type="text" class="form-control input" value="https://linkedin.com/username">
                        <a id="" class="btn btn-sm pull-right" style="background:#00A0DF; color:#FFF;">Submit</a>
                      </div><br>

                      <div class="col-xs-12 col-md-12">
                        <h4 style="font-weight:100; color:#00A0DF; line-height:125%;">Facebook</h4>        
                        <input type="text" class="form-control input" value="https://facebok.com/username">
                        <a id="" class="btn btn-sm pull-right" style="background:#00A0DF; color:#FFF;">Submit</a>
                      </div><br>

                      <div class="col-xs-12 col-md-12">
                        <h4 style="font-weight:100; color:#00A0DF; line-height:125%;">Twiiter</h4>        
                        <input type="text" class="form-control input" value="https://twitter.com/username">
                        <a id="" class="btn btn-sm pull-right" style="background:#00A0DF; color:#FFF;">Submit</a>
                      </div>
                    </div>
                </div>              
            </div>
        </div>
    </div>   
</div>

<div id="floatLessonStatus">
    <h1 class="blink col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3" id="counter">&nbsp;9</h1><hr>
    <small class="blink2" style="text-align:center;">active lessons</small>
</div>

@stop