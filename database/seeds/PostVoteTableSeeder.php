<?php

use Redditto\PostVote;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PostVoteTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		DB::table('post_votes')->delete();

		$votes = [
			[
				'post_id' => 1,
				'user_id' => 1,
				'value'   => 1
			],
			[
				'post_id' => 1,
				'user_id' => 2,
				'value'   => 1
			],
			[
				'post_id' => 1,
				'user_id' => 3,
				'value'   => 1
			],
			[
				'post_id' => 1,
				'user_id' => 4,
				'value'   => 1
			],
			[
				'post_id' => 1,
				'user_id' => 5,
				'value'   => 1
			]
		];

		foreach ($votes as $vote) {
			PostVote::create($vote);
		}
	}

}
