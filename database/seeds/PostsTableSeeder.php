<?php

use App\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PostsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		DB::table('posts')->delete();

		$posts = [
			[
				'user_id'      => 1, 
				'subreddit_id' => 3, 
				'title'        => 'This funny thing happened to me', 
				'content'      => 'It was real funny.',
				'slug'         => 'this-funny-thing-happened-to-me', 
				'is_link'      => false, 
				'is_nsfw'      => false
			],	
			[
				'user_id'      => 1, 
				'subreddit_id' => 1, 
				'title'        => 'I love my hamster', 
				'content'      => 'He is really cool!',
				'slug'         => 'i-love-my-hamter', 
				'is_link'      => false, 
				'is_nsfw'      => false
			],	
			[
				'user_id'      => 1, 
				'subreddit_id' => 2, 
				'title'        => 'Good video', 
				'content'      => 'http://www.youtube.com',
				'slug'         => 'good-video', 
				'is_link'      => true,
				'is_nsfw'      => false
			]
		];

		foreach ($posts as $post) {
			Post::create($post);
		}
	}

}