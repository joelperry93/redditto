<?php

use App\Channel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ChannelsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		DB::table('channels')->delete();

		$channels = [
			['name' => 'animals', 'description' => 'We love animals here', 'adult_content' => false, 'creator_id' => 1],	
			['name' => 'videos', 'description' => 'Watch good videos', 'adult_content' => false, 'creator_id' => 1 ],	
			['name' => 'funny', 'description' => 'Things that are funny', 'adult_content' => false, 'creator_id' => 1],
			['name' => 'futurology', 'description' => 'Things about the future', 'adult_content' => false, 'creator_id' => 1],
			['name' => 'pcgaming', 'description' => 'PC gaming is really good', 'adult_content' => false, 'creator_id' => 1]
		];	

		foreach ($channels as $channel) {
			Channel::create($channel);
		}
	}

}
