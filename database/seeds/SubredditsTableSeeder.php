<?php

use App\Subreddit;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SubredditTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		DB::table('subreddits')->delete();

		$subreddits = [
			['name' => 'animals', 'description' => 'We love animals here', 'adult_content' => false, 'creator_id' => 1],	
			['name' => 'videos', 'description' => 'Watch good videos', 'adult_content' => false, 'creator_id' => 1 ],	
			['name' => 'funny', 'description' => 'Things that are funny', 'adult_content' => false, 'creator_id' => 1],
			['name' => 'futurology', 'description' => 'Things about the future', 'adult_content' => false, 'creator_id' => 1],
			['name' => 'pcgaming', 'description' => 'PC gaming is really good', 'adult_content' => false, 'creator_id' => 1]
		];	

		foreach ($subreddits as $subreddit) {
			Subreddit::create($subreddit);
		}
	}

}
