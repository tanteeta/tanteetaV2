<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Tutor;
use App\Models\Student;
use App\Models\Lesson;
use App\Models\Skill;
use App\Models\Social;
use App\Models\Work;
use App\Models\Education;

/**
* 
*/
class ProfileController extends Controller
{
	function __construct()
	{
		$data = [];
	}

	public function viewProfile($id)
	{
		if ($_SERVER['REQUEST_METHOD'] == 'GET')
		{
			$data['info'] = User::where('id','=', $id)->first();

			$data['courses'] = Tutor::leftjoin('courses','courses.id','=','tutors.course_id')
									->select('courses.title','courses.curriculum')
									->where('tutors.id','=', $id)
									->get();

			$data['lessons'] = Lesson::leftjoin('tutors','tutors.id','=','lessons.tutor_id')
										->leftjoin('students', 'students.id', '=', 'lessons.student_id')
										->select('lessons.status as status', 'lessons.days as days','lessons.time as time', 'students.name as st_name', 'students.phone as st_phone', 'students.state as st_state', 'students.city as st_city', 'students.street as st_street')
										->where('tutors.user_id','=', $id)
										//->where('lessons.tutor_id','=', 'tutors.user_id')
										->get();

			for ($y = 0; $y < count($data['lessons']); $y++) {
				$days = $data['lessons'][$y]['days'];
				$ty[] = $days;
				$day = explode('-', $days);
				
				$r = count($day);
				for ($i=0; $i < count($day); $i++) { 
					switch ($day[$i]) {
						case 5:
							$col = "<td class='info'>$i $days[$i]</td>";
							array_push($ty, $col);					
							break;
						
						default:
							$col = "<td>$i $days[$i]</td>";
							array_push($ty, $col);
							break;
					}
				}

				if (count($day) < 7) {
					for ($x=0; $x < (7 - count($day)); $x++) { 
						$more_cols = "<td></td>";
						array_push($ty, $more_cols);
					}
				}
			}


			$data['total'] = count(Lesson::where('tutor_id','=', $id)->get());

			$data['active'] = count(Lesson::where('tutor_id','=', $id)
											->where('status','=','2')
											->get());

			$data['pending'] = count(Lesson::where('tutor_id','=', $id)
											->where('status','=','1')
											->get());

			$data['history'] = count(Lesson::where('tutor_id','=', $id)
											->where('status','=','3')
											->get());
									
			$data['skill'] = Skill::where('user_id',$id)->get();

			return view('profile', $data);
		}
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$link = '/profile/'.$id;
			//instructor add courses
			if (isset($_POST['add'])) //&& isset($_POST['skill'])) 
			{
				foreach($_POST['skill'] as $skill) 
				{
					$add = Skill::insert([
									'user_id' => $id,
									'name' => $skill
								]);
				}
				//($add) ? $data['feedback'] = "Courses added successfully" : $data['feedback'] = "something went wrong, pls try again later";
				//return view('profile', $data); 
				$this->redirect($link);
			}
			
		// instructor remove course
			if (isset($_POST['remove'])) 
			{
				foreach($_POST['skill'] as $skill) 
				{
					Skill::where('name',$skill)->delete();
				}				
				$this->redirect($link);
			}
			
		//update social info
			if (isset($_POST['update_edu']))
			{				
				Education::insert([
									'user_id' => $id,
									'qualification' => $_POST['qualification'],
									'year' => $_POST['year'],
									'school' => $_POST['school']
								]);
				$this->redirect($link);
			}
			
			if (isset($_POST['update_work']))
			{
				Work::insert([
									'user_id' => $id,
									'company' => $_POST['company'],
									'title' => $_POST['job_title'],
									'worked_from' => $_POST['work_from'],
									'worked_to' => $_POST['work_to']
								]);
				$this->redirect($link);
			}
			
			if (isset($_POST['submit_social']))
			{
				Social::insert([
									'user_id' => $id,
									'facebook' => $_POST['facebook'],
									'twitter' => $_POST['twitter'],
									'linkedin' => $_POST['linkedin']
								]);
				$this->redirect($link);
			}
			
		//change profile picture
			if (isset($_POST['change_photo']))
			{				
				$img = $_FILES['photo']['name'];
				$temp = $_FILES['photo']['tmp_name'];				
				//$user = User::where('id',$id)->get();
				//$uuid = $user['uuid'];
				$update = User::where('id',$id)->update([ 'image' => $img ]);			
					
				if($update) {
					move_uploaded_file($temp, "images/tutors/$img");
					/*
					if (mkdir("images/tutors")) {										
					}
					else {
						$data['feedback'] = "<div class='alert alert-info'>Well, we are not proud of this :'( <br> Your registration was successfull, but we could not store your photo.</div>";
					}
					*/
					$this->redirect($link);
				}
				else {
					
				}
			}
		
		//update overview profile info
			if (isset($_POST['save_changes']))
			{
				User::where('id',$id)->update([
											'first_name' => $_POST['fname'],
											'last_name' => $_POST['lname'],
											'street_address' => $_POST['street'],
											'city' => $_POST['city'],
											'state' => $_POST['state'],
											'phone' => $_POST['phone'],
											'email' => $_POST['email'],
											'gender' => $_POST['gender']
										]);
				$this->redirect($link);
			}
		}
	}

	public function viewProf($id)
	{
		$data['info'] = User::where('id','=', $id)->first();

		$data['courses'] = Tutor::leftjoin('courses','courses.id','=','tutors.course_id')
								->select('courses.title','courses.curriculum')
								->where('tutors.id','=', $id)
								->get();

		$data['lessons'] = Lesson::leftjoin('tutors','tutors.id','=','lessons.tutor_id')
									->leftjoin('students', 'students.id', '=', 'lessons.student_id')
									->select('lessons.status as status', 'lessons.days as days', 'students.name as st_name', 'students.phone as st_phone', 'students.state as st_state', 'students.city as st_city', 'students.street as st_street')
								   	->where('tutors.user_id','=', $id)
								   	//->where('lessons.tutor_id','=', 'tutors.user_id')
								   	->get();

		$data['total'] = count(Lesson::where('tutor_id','=', $id)->get());

		$data['active'] = count(Lesson::where('tutor_id','=', $id)
										->where('status','=','2')
										->get());

		$data['pending'] = count(Lesson::where('tutor_id','=', $id)
										->where('status','=','1')
										->get());

		$data['history'] = count(Lesson::where('tutor_id','=', $id)
										->where('status','=','3')
										->get());

		return view('prof', $data);
	}

}