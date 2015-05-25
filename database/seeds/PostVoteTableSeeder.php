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

		for ($i = 1; $i < 2000; $i++) {
			PostVote::creatE([
				'post_id' => rand(1, 5),
				'user_id' => rand(1, 5),
				'value'   => rand(0, 5) ? 1 : -1
			]);
		}
	}

}
