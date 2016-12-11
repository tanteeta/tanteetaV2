<?php

use Illuminate\Database\Seeder;

class TutorTable extends Seeder
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
		
		for($i=0;$i<16;$i++) {	
			shuffle($course_id);
			shuffle($user_id);
			
			DB::table('tutors')->insert([
				'user_id' => $user_id[$i],
				'course_id' => $faker->randomElement($array = array($course_id[1], $course_id[6])),
				'created_at' => $faker->dateTime($max = 'now')
			]);
			
		}
    }
}
