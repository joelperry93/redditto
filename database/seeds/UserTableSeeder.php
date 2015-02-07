<?php

use App\User;
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

		$users = [
			['name' => 'joel', 'email' => 'joelperry@me.com', 'password' => '$2y$10$JFVBJO/RWmSL1UVFsv1uPeolMjqFn/BcFJAiMWjXApCW9/Uq.6WCa']
		];

		foreach ($users as $user) {
			User::create($user);
		}
	}

}
