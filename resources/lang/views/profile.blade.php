@extends('layouts.base_profile')
@section('title', 'Profile')

@section('content')	
	<style>
		label { font-weight:normal; }
	</style>

	<script>
		function openTab(evt, tabName) {
			var i, x, tablinks;
			x = document.getElementsByClassName("tab-menu");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";
			}
			
			tablinks = document.getElementsByClassName("tablink");
			for (i = 0; i < x.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
			}
			
			document.getElementById(tabName).style.display = "block";
			evt.currentTarget.className += " w3-red";
		}
	</script>

	<div class="container row">
		<nav class="w3-sidenav w3-light-grey" style="width:150px">
			<a href="javascript:void(0)" class="tablink" onclick="openTab(event, 'overview')">Overview</a>
			<a href="javascript:void(0)" class="tablink" onclick="openTab(event, 'schedule')">Schedule</a>
			<a href="javascript:void(0)" class="tablink" onclick="openTab(event, 'lessons')">Lessons</a>
			<a href="javascript:void(0)" class="tablink" onclick="openTab(event, 'courses')">Courses</a>
			<a href="javascript:void(0)" class="tablink" onclick="openTab(event, 'profile')">Profile</a>
		</nav>
		
		<div id="overview" class="tab-menu w3-container w3-animate-left" style="margin-left:150px;">
			<h2>Overview</h2>
			
			<div class="row">			
				<div class="col-md-3 pull-right" style="">
					<form method="POST" action="">
						<label for="photo">Pprofile Picture</label>
						<input id="photo" type="file">
					</form>
				</div>
			
				<div class="col-md-9 pull-left" style="">
					<form method="POST" action="">
						<div>
							<div style="width:49%;display:inline-block;">
								<label for="fname">First Name</label>
								<input id="fname" type="text" class="form-control" name="fname" value="{{ $info->first_name }}" disabled>
							</div>
							<div style="width:49%;display:inline-block;">
								<label for="lname">Last Name</label>
								<input id="lname" type="text" class="form-control" name="lname" value="{{ $info->last_name }}" disabled>
							</div>
						</div><br>
						
						<div>
							<div style="width:49%;display:inline-block;margin-right:5px;" class="pull-left">
								<label for="gender">Gender</label>
								<select id="gender" class="form-control" name="gender" disabled>
									<option selected disabled>gender</option>
								</select>
							</div>
							<div style="width:49%;display:inline-block;">
								<label for="email">Email</label>
								<input id="email" type="email" class="form-control" name="email" value="{{ $info->email }}" disabled>
							</div>							
						</div><br>
						
						<div>		
							<div style="width:49%;display:inline-block;">
								<label for="phone">Phone</label>
								<input id="phone" type="number" class="form-control" name="phone" value="{{ $info->phone }}" disabled>
							</div>
							<div style="width:49%;display:inline-block;">
								<label for="street">Street Address</label>
								<input id="street" type="text" class="form-control" name="street" value="{{ $info->street_address }}" disabled>
							</div>							
						</div><br>
						
						<div>
							<div style="width:49%;display:inline-block;">
								<label for="city">City</label>
								<input id="city" type="text" class="form-control" name="city" value="{{ $info->city }}" disabled>
							</div>
							<div style="width:49%;display:inline-block;">
								<label for="state">State</label>
								<input id="state" type="text" class="form-control" name="state" value="{{ $info->state }}" disabled>
							</div>							
						</div><br>	
							
						<div id="edit" style="padding-right:6px;display:block;">
							<button type="buttom" class="btn btn-primary col-md-12">Edit Details</button>							
						</div>
						
						<div id="save" style="padding-right:6px;display:none;">
							<button type="submit" class="btn btn-primary col-md-12">Save Changes</button>
						</div>
							
						<br>&nbsp;
					</form>
				</div>
			</div>
		</div>

		<div id="schedule" class="tab-menu w3-container w3-animate-left" style="margin-left:150px;display:none;">
			<h1>Schedule</h1>
		</div>
		
		<div id="lessons" class="tab-menu w3-container w3-animate-left" style="margin-left:150px;display:none;">
			<h2>Lessons</h2>
			
			<div class="row">
				<table class="table table-stripped">
					<thead>
						<th class="hidden-xs">#</th>
						<th>Student</th>
						<th>Address<i class="visible-xs">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i></th>
						<th>Frequency per week</th>
						<th>Phone</th>
						<th>Status</th>
					</thead>
					
					<tbody>
						<!--	<tr><td></td> <td></td> <td></td> <td></td> <td></td> <td></td></tr>	-->
						@foreach($lessons as $lesson)
	                        <tr>
	                            <td class="">{{ $loop->iteration }}</td>
	                            <td><a class="btn" id="studentDetails">{{ $lesson->st_name }}</a></td>

	                            <td>{{ $lesson->st_street }},{{ $lesson->st_city }},{{ $lesson->st_state }}.</td>

	                            <td>{{ $lesson->days }}</td>

	                            <td class="">{{ $lesson->st_phone }}</td>

	                    	    <td class="visible-xs">
	                                <a style="background:rgba(0,0,0,0.2);" href="tel:" class="btn btn-sm"><i class="fa fa-phone"></i>&nbsp; call</a>
	                            </td>

	                            <td class="warning">{{ $lesson->status }}</td>
	                        </tr>
	                    @endforeach
					</tbody>
				</table>
			</div>
		</div>	
		
		<div id="courses" class="tab-menu w3-container w3-animate-left" style="margin-left:150px;display:none;">
			<h2>Courses</h2>
			
			<div class="row">
				<div class="skillset">
					<div class="row" id="predefinedSkillset">
						<ul>                        
							<li><button id="skills"><span class="fa fa-tags"></span> Javascript</button></li>
							<li><button id="skills"><span class="fa fa-tags"></span> C#</button></li>
							<li><button id="skills"><span class="fa fa-tags"></span> Python</button></li>
							<li><button id="skills"><span class="fa fa-tags"></span> Android App Development</button></li>
							<li><button id="skills"><span class="fa fa-tags"></span> Ruby</button></li>
						</ul>
					</div>
                </div>
				
				<select class="form-control" multiple>
					<option selected disabled>Add course(s)</option>
					<option value="">Java</option>
					<option value="">Python</option>
				</select>
			</div>
		</div>

		<div id="profile" class="tab-menu w3-container w3-animate-left" style="margin-left:150px;display:none;">
			<h2>Profile</h2>
			
			<div  class="col-xs-12 col-md-8">
	            <h4 style="">Educational Background<br><small>What is your highest academic qualification?</small></h4>
	            
	            <div>
	            	<form method="POST" action="">
	            		<div style="margin-bottom: 10px;">
		            		<div style="width:49%;display:inline-block;">
				                <select id="" class="form-control">
				                    <option selected disabled>Highest Academic Qualification</option>
				                    <option value="ssce">SSCE</option>
				                    <option value="bsc">Bachelors' degree</option>
				                    <option value="msc">Masters' degree</option>
				                    <option value="Ph.D">Ph.D</option>
				                </select>
				            </div>
				            <div style="width:49%;display:inline-block;">
				                <select id="" class="form-control">
				                    <option selected disabled>Select year</option>
				                    <option value="2000">2000</option>
				                    <option value="2001">2001</option>
				                    <option value="2002">2002</option>
				                    <option value="2003">2003</option>
				                    <option value="2004">2004</option>
				                    <option value="2005">2005</option>
				                    <option value="2006">2006</option>
				                    <option value="2007">2007</option>
				                    <option value="2008">2008</option>
				                    <option value="2009">2009</option>
				                    <option value="2010">2010</option>
				                    <option value="2011">2011</option>
				                    <option value="2012">2012</option>
				                    <option value="2013">2013</option>
				                    <option value="2014">2014</option>
				                    <option value="2015">2015</option>
				                    <option value="2016">2016</option>
				                </select>
		                	</div>
	                	</div>

	                	<div style="padding-right: 9px;">
	                	<input type="text" class="form-control" placeholder="Obafemi Awolowo University" value="">
	                	</div><br>
	                	<button type="button" class="btn btn-primary" name="update_edu">Update</button>
	                	<br>
	                </form>     
	            </div>
			</div>

            <hr>

            <div  class="col-xs-12 col-md-8">
	            <h4 style="">Work Experience</h4>

	            <div>
	            	<form method="POST" action="">
	            		<div style="margin-bottom: 5px;">
	            			<div style="width:49%;display:inline-block;">
		            			<input type="text" name="company" class="form-control" placeholder="Company">
				            </div>
		            		<div style="width:49%;display:inline-block;">
		            			<input type="text" name="job_title" class="form-control" placeholder="Job Title">
				            </div>
			            </div>

			            <div>
	            			<div style="width:49%;display:inline-block;">
		            			<input type="text" name="work_from" class="form-control" placeholder="From">
				            </div>
		            		<div style="width:49%;display:inline-block;">
		            			<input type="text" name="work_to" class="form-control" placeholder="To">
				            </div>
				            <div style="width: 100%;"><label><input type="checkbox" name="work_current" id="to">Currently work here</label></div>
			            </div><br>

	           			<button type="submit" name="update_work" class="btn btn-primary">Update</button>
	           			<button type="submit" name="add_work" class="btn btn-success">Add</button>
			        </form>
			    </div>
		    </div>

		    <hr>

		    <div  class="col-xs-12 col-md-8">
			    <h4 style="">Social Media Verification</h4>

			    <div>
	            	<form method="POST" action="">
	            		<input type="text" name="facebook" class="form-control" placeholder="https://facebook.com/username" style="margin-bottom: 10px;">
	            		<input type="text" name="twitter" class="form-control" placeholder="https://twitter.com/username" style="margin-bottom: 10px;">
	            		<input type="text" name="linkedin" class="form-control" placeholder="https://linkedin.com/username">
	            		<br>
	            		<button class="btn btn-primary" type="submit" name="submit">Submit</button>
	            	</form>
	            </div>
            </div>
	    </div>
	</div>

@stop