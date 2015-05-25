<?php

use Redditto\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PostTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		DB::table('posts')->delete();

		$faker = Faker\Factory::create();

		for ($i = 0; $i < 15; $i++) {
			$sentence = $faker->sentence;

			Post::create([
				'user_id'      => rand(1, 5),
				'subreddit_id' => rand(1, 5),
				'title'        => $sentence,
				'content'      => $faker->paragraph,
				'slug'         => str_replace($sentence, ' ', '-'),
				'is_link'      => false,
				'is_nsfw'      => false
			]);
		}
	}

}
