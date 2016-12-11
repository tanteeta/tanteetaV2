<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Ramsey\Uuid\Uuid;
use App\Models\Student;
use App\Models\Course;
use App\Models\Lesson;
use Paystack;

class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        session_start();

        $id = $_POST['id'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $no = $_POST['student_no'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $state = $_POST['state'];
        $city = $_POST['city'];
        $street = $_POST['street'];
        $day = implode(",", $_POST['day']);
        $time = implode(",",$_POST['time']);
        $duration = implode(",",$_POST['duration']);

        $course = Course::where('id',$id)->first();
        $title = $course->title;

        $_SESSION['title'] = $title;
        $_SESSION['user_email'] = $email;
        $_SESSION['user_name'] = $name;
        $_SESSION['fee'] = $course->fee;

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

        $s_id = Student::where('uuid',$uuid)->first();

        Lesson::insert([
                        'course_id' => $id,
                        'student_no' => $no,
                        'duration' => $duration,
                        'days' => $day,
                        'time' => $time,
                        'student_id' => $s_id->id,
                        'gender' => $gender
                    ]);

        //echo "<script>alert('');</script>";

        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        //dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
        /*
        echo 'hey';
        $data = json_decode(file_get_contents('php://input'));
        echo $data;

        dd('hey you');
        */
        session_start();

        $to = $_SESSION['user_email'];
        $subject = "Tanteeta - Registration fee payment confirmation";
        $message = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
                    <html xmlns='http://www.w3.org/1999/xhtml'>
                    <head>
                        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>
                        <title>Tanteeta.com - Course Registration</title>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
                    </head>

                    <body width='600px' style='margin:0 auto;padding:0 0 0 0;font-family:verdana;max-width:600px;'>
                        <table style='border:0;padding:10px 10px 10px 10px;' cellpadding='0' cellspacing='2px' align='left' width='100%'>
                            <tr>
                                <td>
                                    <div style='padding: 10px 15px 20px 15px;background-color: #f2f2f2;height: 70px;'>
                                        <header>
                                            <img src='logo.png' style='float: left;width: 200px;height: 70px;'>
                                            <p style='float: right;text-align: right;color: red;' align='right'>09030001991 <br> talktous@tanteeta.com</p>
                                        </header>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style='padding: 0 25px;'>
                                    <p>Hello ".$_SESSION['user_name'].",</p>
                                    <p>Thank you for choosing Tanteeta. Hope this is meeting you well?</p>
                                    <p>Your registration for <span style='color: #2987e7;'>".$_SESSION['title']."</span> was successful and your registration fee of <span style='color: #2987e7;'>N3,000</span> has been confirmed. An instructor will be assigned to you within 7 days.</p>
                                    <p>The tuition fee for <span style='color: #2987e7;'>".$_SESSION['title']."</span> is <span style='color: #2987e7;'>N".$_SESSION['fee']."</span> per month. This fee excludes the instructor's cost of transportation to your home. Once an instructor has benn assigned to you, you will recieve an invoice containing the overall cost of the training, which includes tuition fee and instructor's cost of transportation.</p>
                                </td>
                            </tr>
                        </table>
                        <table style='border:0;padding:10px 10px 10px 10px;' cellpadding='0' cellspacing='2px' align='left' width='100%'>
                        <tr>
                            <td style='padding: 0 25px;background-color: #f2f2f2;color: #777;'>
                                <p> At Tanteeta, we believe the best economic plan we can have for the future is to start preparing a generation of creators and innovators, if we want to have a flourishing economy in the future. We are working with parents and schools to make this happen and we are happy you have chosen to be a part of this.</p>
                                <p>Please, feel free to contact us (09030001991) if you have any suggestions on how we can do this in a better way.</p>
                            </td>
                        </tr>
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
            session_destroy();
            echo "<script>
                    alert('Your registration payment was successfull. Please check your email for more details.');
                    window.location = 'http://tanteeta.localhost';
                </script>";
            
            //$this->redirect('/');
        }
        else {
            echo "<script>alert('Something went wrong. Please try again later or contact us on 09030001991');</script>";
        }
        //   

    }
}