<?php

use Redditto\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CommentTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		DB::table('comments')->delete();

		$faker = Faker\Factory::create();

		for ($i = 0; $i < 100; $i++) {
			Comment::create([
				'user_id'   => rand(1, 5),
				'post_id'   => rand(1, 15),
				'parent_id' => null,//rand(0, 2) ? rand(1, $i - 1) : null,
				'content'   => $faker->sentence
			]);
		}
	}

}
