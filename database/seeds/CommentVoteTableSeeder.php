<?php

use Redditto\CommentVote;
use Redditto\Comment;
use Redditto\User;
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

		for ($i = 0; $i < 2000; $i++) {
			CommentVote::create([
				'comment_id' => Comment::orderByRaw("RAND()")->first()->id,
				'user_id'    => User::orderByRaw("RAND()")->first()->id,
				'value'      => rand(0, 5) ? 1 : -1
			]);
		}
	}

}
