<?php

namespace App\Http\Controllers;

use App\Models\User; 
use App\Models\Token; 
use Ramsey\Uuid\Uuid;
//use \MAbiola\Paystack\Paystack;

/**
* 
*/
class AuthController extends Controller
{
	function __construct()
    {
        //$this->middleware('auth');
       	$this->data = [];
       	return $this->data;
    }
    

//=======LOGIN===============
    public function viewLogin()
	{
		session_start();
		$data = $this->data;

		if (($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['login'])) && (isset($_POST['email'])) && (isset($_POST['password']))) {
			$email = trim($_POST['email']);
			$pass =  trim($_POST['password']);	

			$check = User::where('email','=',$email)->first();
			$num = count($check);

			if ($num > 0) {
				$tutor_id = $check->id;
				$tutor_pass = $check->password;
				$tutor_salt = $check->password_salt;

				$mask = $pass . $tutor_salt;
				$hash = hash('sha256', $mask);	

				if ($has == $tutor_pass) {
					$_SESSION['tutor_id'] = $tutor_id;

					header('location: /profile');
					exit;
				}
				else {
					$data['feedback'] = "Invalid email or password";
				}
			}
			else {
				$data['feedback'] = "Invalid email or password";
			}
		}
		else {
			return view('login');
		}
	}


//=======SIGNUP===============
	public function viewSignup()
	{
		$data = $this->data;

		if (($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['fname'])) && (isset($_POST['lname'])) && (isset($_POST['phone'])) && (isset($_POST['email'])) && (isset($_POST['pass'])) /* && (isset($_FILES['img']))*/) {
						
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$pass = $_POST['pass'];			

			$raw_uuid = Uuid::uuid4();
			$uuid = $raw_uuid->toString();
			$raw_salt = mcrypt_create_iv(10, MCRYPT_RAND);
			$salt = bin2hex($raw_salt);
			$mask = $pass . $salt;
			$hash = hash('sha256', $mask);

			$user = User::insert([
								'uuid' => $uuid,
								'first_name' => $fname,
								'last_name' => $lname,
								'phone' => $phone,
								'email' => $email,
								'password' => $hash,
								'password_salt' => $salt
							]);

			if ($user) {			
				$data['feedback'] = "<div class='alert alert-success'>An email verification link has been sent to your email. pLease check your inbox to complete this registration.</div>";

				$this->sendEmail($email);
			}
			else {
				$data['feedback'] = "<div class='alert alert-danger'>Something went wrong. Your registration was unsuccessfull, please try again later.</div>";
			}

			return view('signup', $data);			
		}
		else {
			return view('signup');
		}
	}

	function sendEmail($receiver)
	{	
		$raw_token = mcrypt_create_iv(18, MCRYPT_RAND);
        $token = bin2hex($raw_token);            
        $link = "http://tanteeta.com/login?token=$token";

		$to = $receiver;
		$subject = "Tanteeta Email Verification";
		$message = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
					<html xmlns='http://www.w3.org/1999/xhtml'>
					<head>
						<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>
						<title>Tanteeta - Email Verification</title>
						<meta name='viewport' content='width=device-width, initial-scale=1.0'/>
					</head>

					<body width='600px' style='margin:0 auto;padding:0 0 0 0;font-family:verdana;max-width:600px;'>
						<table width='100%'>
							<tr><td>Thank you for registering on <b><a href='tanteeta.com'>Tanteeta</a></b>.</td></tr>
							<tr><td>Please, click <a href='$link'>this link</a> to verify your email.
						</table>
					</body>
					</html>
				";
		$headers = "MIME-Version:1.0" . "\r\n";
		$headers .= "Content-type:text/html; charset=UTF-8" . "\r\n";
		$headers .= 'From: admin@tanteeta.com';

		if(mail($to,$subject,$message,$headers)) {
			Token::insert([
						"email" => $to,
						"token" => $token,
						"name" => "tutor",
						"phone" => ""
					]);

			//echo "mail sent";
		}else {
			//echo "failed!";
		}
	}
	
	public function viewSignout() {
		$this->redirect('/');
	}
}