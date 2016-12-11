<?php

use Illuminate\Database\Seeder;

class StudentTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
				
		$user =(object) DB::table('users')->select('id')->get();
        $user_id = [];
		
		foreach ($user as $key) {
			array_push($user_id, $key->id);			
        }
		
		$course =(object) DB::table('courses')->select('id')->get();
        $course_id = [];
		
        foreach ($course as $key) {
			array_push($course_id, $key->id);			
        }
		
		$tutor =(object) DB::table('tutors')->select('id')->get();
        $tutor_id = [];
		
        foreach ($tutor as $key) {
			array_push($tutor_id, $key->id);			
        }

		for($i=0;$i<20;$i++) {
			$r = rand(1,7);
			$d = [1,2,3,4,5,6,7];
			$days = "";
			$n = 0;
			for($j=0;$j<$r;$j++) {
				$days .= $d[$n];
				if ($j<$r-1) {
					$days .= "-";
				}
				$n++;
			}
			//echo $days;
			shuffle($user_id);
			shuffle($course_id);
			shuffle($tutor_id);
			
			DB::table('students')->insert([
				'user_id' => $user_id[$i],
				'course_id' => $faker->randomElement($array = array($course_id[1], $course_id[6])),
				'tutor_id' => $faker->randomElement($array = array($course_id[6], $course_id[3])),
				'weekly_duration' => $faker->numberBetween($min = 2, $max = 15),
				'days' => $days,
				'time' => $faker->time($format = 'H', $max = 'now'),
				'start_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
				'end_date' => $faker->date($format = 'Y-m-d', $min = 'now'),
				'status' => $faker->numberBetween($min = 1, $max = 4),
				'assigned' => $faker->numberBetween($min = 0, $max = 1) ,
				'created_at' => $faker->dateTime($max ='now')
			]);			
		}
    }
}
