<?php

use Illuminate\Database\Seeder;

class UserTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::Create();
		
		$limit = 40;
		
		$salt = [];
		for ($i=0; $i<$limit;$i++) { 
			array_push($salt, str_replace(" ", "", $faker->unique()->text($maxNbChars = 10)));
		}
		$gender = ['male','female'];

		for($i=0;$i<$limit;$i++) {
			shuffle($gender);
			
			DB::table('users')->insert([
				'first_name' => $faker->firstName,
				'last_name' => $faker->lastName,
				'street_address' => $faker->streetAddress,
				'city' => $faker->city,
				'state' => $faker->state,
				'phone' => $faker->e164PhoneNumber,
				'email' => $faker->freeEmail,
				'gender' => $gender[0],
				'password' => hash('sha256', $faker->password . $salt[$i]),
				'password_salt' => $salt[$i],
				'created_at' => $faker->dateTime($max = 'now')
			]);
		}
    }
}
