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
			$isChild = false;

			if ($i > 0 && rand(1, 3) === 3) {
				$isChild = true;
				$parent = Comment::orderByRaw("RAND()")->first();
			}

			Comment::create([
				'user_id'   => rand(1, 5),
				'post_id'   => $isChild ? $parent->post->id : rand(1, 15),
				'parent_id' => $isChild ? $parent->id : null,
				'content'   => $faker->sentence
			]);
		}
	}

}
