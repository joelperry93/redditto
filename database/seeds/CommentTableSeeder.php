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

		$comments = [
			[
				'user_id'   => 1, 
				'post_id'   => 1, 
				'parent_id' => null, 
				'content'   => 'This is great'
			],
			[
				'user_id'   => 1, 
				'post_id'   => 1,
				'parent_id' => 1, 
				'content'   => 'I agree'
			],
			[
				'user_id'   => 1, 
				'post_id'   => 1,
				'parent_id' => 2, 
				'content'   => 'Me, three'
			],
			[
				'user_id'   => 1, 
				'post_id'   => 1,
				'parent_id' => null, 
				'content'   => 'And we can start a little convo over here'
			],
			[
				'user_id'   => 1, 
				'post_id'   => 1,
				'parent_id' => 4, 
				'content'   => 'But we want to keep talking over here'
			]
		];

		foreach ($comments as $comment) {
			Comment::create($comment);
		}
	}

}
