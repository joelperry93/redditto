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

		$users = [
			['name' => 'joel', 'email' => 'joelperry@me.com', 'password' => '$2y$10$JFVBJO/RWmSL1UVFsv1uPeolMjqFn/BcFJAiMWjXApCW9/Uq.6WCa'],
			['name' => 'dan', 'email' => 'dan@example.com', 'password' => '$2y$10$JFVBJO/RWmSL1UVFsv1uPeolMjqFn/BcFJAiMWjXApCW9/Uq.6WCa'],
			['name' => 'tom', 'email' => 'tom@example.com', 'password' => '$2y$10$JFVBJO/RWmSL1UVFsv1uPeolMjqFn/BcFJAiMWjXApCW9/Uq.6WCa'],
			['name' => 'bill', 'email' => 'bill@example.com', 'password' => '$2y$10$JFVBJO/RWmSL1UVFsv1uPeolMjqFn/BcFJAiMWjXApCW9/Uq.6WCa'],
			['name' => 'ted', 'email' => 'ted@example.com', 'password' => '$2y$10$JFVBJO/RWmSL1UVFsv1uPeolMjqFn/BcFJAiMWjXApCW9/Uq.6WCa']
		];

		foreach ($users as $user) {
			User::create($user);
		}
	}

}
