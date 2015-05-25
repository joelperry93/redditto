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

		$votes = [];

		for ($i = 0; $i < 2000; $i++) {
			CommentVote::create([
				'comment_id' => rand(1, 5),
				'user_id'    => rand(1, 5),
				'value'      => rand(0, 5) ? 1 : -1
			]);
		}
	}

}
