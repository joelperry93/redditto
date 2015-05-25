<?php

use Redditto\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		DB::table('users')->delete();

		$faker = Faker\Factory::create();

		User::create([
			'name'     => 'joel',
			'email'    => 'joelperry@me.com',
			'password' => '$2y$10$JFVBJO/RWmSL1UVFsv1uPeolMjqFn/BcFJAiMWjXApCW9/Uq.6WCa'
		]);

		for ($i = 0; $i < 20; $i++) {
			User::create([
				'name'     => $faker->userName,
				'email'    => $faker->email,
				'password' => $faker->word
			]);
		}
	}

}
