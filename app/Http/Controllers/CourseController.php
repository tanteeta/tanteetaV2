<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use App\Models\Lesson;
use App\Models\Student;
use App\Models\Token;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use phpmailer\phpmailer as mail;
/**
* 
*/
class CourseController extends Controller
{	
	function __construct()
	{
		$this->data = [];
		$this->data['categories'] = Category::pluck('name');
		return $this->data;
	}

	public function viewCourses()
	{
		$data = $this->data;

		$data['single'] = Course::leftjoin('course_types','course_types.id','=','courses.type_id')
								->select('courses.*','course_types.name AS type')
								->where('course_types.name','=','single')
								->get();

		if (($_SERVER['REQUEST_METHOD'] == 'GET') && (isset($_GET['query']))) {
			$query = "%".$_GET['query']."%";

			$data['all'] = Course::leftjoin('course_types','course_types.id','=','courses.type_id')
								->select('courses.*','course_types.name AS type')
								->where('courses.title','LIKE',$query)
								->paginate(8);

			$data['search'] = $_GET['query'];

			return view('courses', $data);		
		}
		elseif (($_SERVER['REQUEST_METHOD'] == 'GET') && (isset($_GET['cat']))) {
			$cat = $_GET['cat'];

			$data['all'] = Course::leftjoin('course_categories','course_categories.id','=','courses.category_id')
								->leftjoin('course_types','course_types.id','=','courses.type_id')
								->select('courses.*','course_categories.name AS category','course_types.name AS type')
								->where('course_categories.name','=',$cat)
								->paginate(8);

			$data['name'] = $cat;

			return view('courses', $data);
		}
		else {
			$data['all'] = Course::leftjoin('course_types','course_types.id','=','courses.type_id')
								->select('courses.*','course_types.name AS type')
								//->where('course_types.name','=','recommended')
								//->where('course_types.name','=','single')
								//->limit(8)
								->orderBy('courses.type_id', 'desc')
								->paginate(8);

			return view('courses', $data);
		}		
	}

	public function viewCourse($id)
	{
		//$id = $_GET['id'];
		$data = $this->data;

		$data['unique'] = Course::leftjoin('course_types','course_types.id','=','courses.type_id')
								->select('courses.*','course_types.name AS type')
								->where('courses.id','=', $id)
								->first();

		if (($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['course_verify_email']))) {	
			$name = $_POST['name'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$id = $_POST['id'];

			$raw_token = mcrypt_create_iv(18, MCRYPT_RAND);
        	$token = bin2hex($raw_token); 
        	$link = "http://tanteeta.com/register?tk=$token"."&id=$id";   

        	Token::insert([
        					'email' => $email,
        					'token' => $token,
        					'name' => $name,
							'course_id' => $id,
        					'phone' => $phone
        				]);
        	        	
        	$to = $email;
			$subject = "Tanteeta - Email verification for course registration";
			$message = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
						<html xmlns='http://www.w3.org/1999/xhtml'>
						<head>
							<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>
							<title>Tanteeta.com - Email Verification</title>
							<meta name='viewport' content='width=device-width, initial-scale=1.0'/>
						</head>
						<body width='600px' style='margin:0 auto;padding:0 0 0 0;font-family:verdana;max-width:600px;'>						
							<table style='border:0;padding:10px 10px 10px 10px;' cellpadding='0' cellspacing='2px' align='left' width='100%'>
								<tr>
									<td>
										<div style='padding: 10px 15px 10px 15px;background-color: #f2f2f2;height: 60px;'>
											<header>
												<img class='tanteeta.localhost/images/logo/logo.png' src='logo.png' style='float: left;width: 230px;height: 60px;'>
												<p class='contact' style='float: right;text-align: right;color: red;' align='right'>09030001991 <br> talktous@tanteeta.com</p>
											</header>
										</div>
									</td>
								</tr>
								<tr>
									<td style='padding: 0 25px;'>
										<p>Hello $name,</p>
										<p>Thank you for choosing Tanteeta. Hope this is meeting you well?</p>
										<p>Kindly click the button below, to proceed with the course registration.</p>
										<p><a href='$link'><button type='button' style='background-color: #2987e7;padding: 5px 45px;border: none;color: #ffffff;font-size: 15px;cursor: pointer;'>Proceed</button></a></p>
									</td>
								</tr>
								<tr><td>&nbsp;</td></tr>
							</table>
							<table style='border:0;padding:10px 10px 10px 10px;' cellpadding='0' cellspacing='2px' align='left' width='100%'>
								<tr align='center'>
									<td colspan='6'>Sent with &#9825; from us at Tanteeta</td>
								</tr>
								<tr><td>&nbsp;</td></tr>
								<tr><td>&nbsp;</td></tr>
								<tr align='center' style='font-size: 15px;text-align: center;'>
									<td><a href='' style='text-decoration: none;'>Tanteeta blog</a></td>
									<td><a href='' style='text-decoration: none;'>facebook</a></td>
									<td><a href='' style='text-decoration: none;'>twitter</a></td>
									<td><a href='' style='text-decoration: none;'>instagram</a></td>
									<td><a href='' style='text-decoration: none;'>google+</a></td>
									<td><a href='' style='text-decoration: none;'>youtube</a></td>
								</tr>
							</table>
						</body>
						</html>
					";//.
					
			$headers = "MIME-Version:1.0" . "\r\n";
			$headers .= "Content-type:text/html; charset=UTF-8" . "\r\n";
			$headers .= 'From: talktous@tanteeta.com';

			
			if(mail($to,$subject,$message,$headers)) {
				$data['feedback'] = "<div class='alert alert-success' ><b>Thank you for registering</b>. A confirmation email has been sent to the email address you provided.<br> Follow the link in the email to complete your registration. <a href='/' style='color:#2987e7;'>Go back to home page</a></div>";

            	return view('course', $data);
			}else {
				echo "failed!";
			}
				

		}


	/*
		if (($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['register'])) && (isset($_POST['name'])) && (isset($_POST['state'])) && (isset($_POST['city'])) && (isset($_POST['streetAddress'])) && (isset($_POST['phone'])) && (isset($_POST['email'])) && (isset($_POST['gender'])) && (isset($_POST['goal'])) && (isset($_POST['loc'])) && (isset($_POST['start'])) && (isset($_POST['std_no']))) {

			$name = $_POST['name'];
			$state = $_POST['state'];
			$city = $_POST['city'];
			$street = $_POST['streetAddress'];
			$phone	= $_POST['phone'];
			$email = $_POST['email'];
			$gender = $_POST['gender'];
			$goal = $_POST['goal'];
			$loc = $_POST['loc'];
			$start = $_POST['start'];
			$std_no = $_POST['std_no'];

			$raw_uuuid = Uuid::uuid4();
			$uuid = $raw_uuuid->toString();

			$student = Student::insert([
									'uuid' => $uuid,
									'name' => $name,
									'state' => $state,
									'city' => $city,
									'street' => $street,
									'phone' => $phone,
									'email' => $email,
									'course_id' => $id
								]);

			$student_id = Student::where('uuid','=',$uuid)->pluck('id');

			$lesson = Lesson::insert([
									'student_id' => $student_id[0],
									'course_id' => $id,
									'gender' => $gender,
									'goal' => $goal,
									'location' => $loc,
									'start_date' => $start,
									'Student_no' => $std_no
								]);

			if ($student && $lesson) {
				$data['feedback'] = "Course registration successfull.";
				return view('course', $data);
			}
			else {
				$data['feedback'] = "Well, we are not proud of this :'( <br> something went wrong. Please try again later";

				return view('course', $data);
			}

			
		}
	*/

		else {
			return view('course',  $data);
		}
	}

	public function search() {
		
	}

	
	public function register()
	{
		if (($_SERVER['REQUEST_METHOD'] == "GET") && isset($_GET['tk']) && isset($_GET['id'])) {
			
			$check = Token::where('token',$_GET['tk'])->where('course_id',$_GET['id'])->first();

			if (count($check) > 0) {
				$data['register'] = $check;

				$data['course_title'] = Course::where('id',$_GET['id'])->first();

				return view('register', $data);
			}
			else {
				$data['feedback'] = "Invalid registration link";
				$data['hide'] = "<style rel='text/css'>#reg_form, .help{display:none;}</style>";

				return view('register', $data);
			}			
		}		

	/*		
		if (($_SERVER['REQUEST_METHOD'] == "POST")) {
			$id = $_POST['id'];
			$name = $_POST['name'];
			$phone = $_POST['phone'];
			$gender = $_POST['gender'];
			$email = $_POST['email_user'];
			$state = $_POST['state'];
			$city = $_POST['city'];
			$street = $_POST['street'];
			$day = $_POST['day'];
			$time = $_POST['time'];
			$duration = $_POST['duration'];

			$raw_uuid = Uuid::uuid4();
			$uuid = $raw_uuid->toString();

			Student::insert([
							'uuid' => $uuid,
							'name' => $name,
							'phone' => $phone,
							'email' => $email,
							'course_id' => $id,
							'state' => $state,
							'city' => $city,
							'street' => $street
				]);

			/*
			$to = $email;
			$subject = "Tanteeta - Email verification for course registration";
			$message = "";
			$headers = "MIME-Version:1.0" . "\r\n";
			$headers .= "Content-type:text/html; charset=UTF-8" . "\r\n";
			$headers .= 'From: admin@tanteeta.com';

			mail($to,$subject,$message,$headers);
			

			$this->redirect('/pay');
		}
		*/
	
	}
	
}
