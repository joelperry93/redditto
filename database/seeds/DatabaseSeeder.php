<?php


use database\seeds\UserTableSeeder;
use database\seeds\SubredditTableSeeder;
use database\seeds\PostTableSeeder;
use database\seeds\CommentTableSeeder;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UserTableSeeder');
		$this->call('SubredditTableSeeder');
		$this->call('PostTableSeeder');
		$this->call('CommentTableSeeder');
	}

}
