<?php

use App\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CommentsTableSeeder extends Seeder {

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
			]
		];

		foreach ($comments as $comment) {
			Comment::create($comment);
		}
	}

}
