<?php

use Illuminate\Database\Seeder;

class CategoryTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {		
		$faker = Faker\Factory::create();
		$limit = 5;
		
		$cat_name = ['mobile app','software development','web development','graphics','computer basics'];

		for($i=0;$i<$limit;$i++) {
			DB::table('course_categories')->insert([
				'name' => $cat_name[$i],
				'created_at' => $faker->dateTime($max = 'now')
			]);
		}
    }
}
