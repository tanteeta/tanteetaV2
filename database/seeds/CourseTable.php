<?php

use Illuminate\Database\Seeder;

class CourseTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$faker = Faker\Factory::create();
		
		$courses = ['PHP','JAVA','AUTOCAD','JAVASCRIPT','LINUX','CORELDRAW','PYTHON','ANDROID','MICROSOFT WORD','MICROSOFT EXCEL','CSS','HTML'];
		
		$type =(object) DB::table('course_types')->select('id')->get();
		//var_dump($type);echo $type;
        $type_id = [];
		
        foreach ($type as $key) {
			array_push($type_id, $key->id);			
        }
		//print_r($type_id);
		
		for($i=0;$i<count($courses);$i++) {	
			shuffle($type_id);
			$r = rand(6,14);
			$d = rand(15,35);
			$age = $r .' - ' . $d;

			DB::table('courses')->insert([
				'type_id' => $type_id[0],
				'title' => $courses[$i],
				'description' => $faker->text($maxNbChars = 500),
				'age_range' => $faker->numberBetween($min = 6, $max = 30),
				'duration' => $faker->numberBetween($min = 15, $max = 30),
				'created_at' => $faker->dateTime($max = 'now')
			]);
		}		
    }
}
