<?php

use Redditto\CommentVote;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CommentVoteTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		DB::table('comment_votes')->delete();

		$votes = [
			[
				'comment_id' => 1,
				'user_id' => 1,
				'value'   => 1
			],
			[
				'comment_id' => 1,
				'user_id' => 2,
				'value'   => 1
			],
			[
				'comment_id' => 1,
				'user_id' => 3,
				'value'   => 1
			],
			[
				'comment_id' => 1,
				'user_id' => 4,
				'value'   => 1
			],
			[
				'comment_id' => 1,
				'user_id' => 5,
				'value'   => 1
			]
		];

		foreach ($votes as $vote) {
			CommentVote::create($vote);
		}
	}

}
