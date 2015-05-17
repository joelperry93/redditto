<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('subreddit_id')->unsigned();
			$table->string('title');
			$table->text('content');
			$table->string('slug');
			$table->boolean('is_link');
			$table->boolean('is_nsfw');
			$table->boolean('deleted')->default(false);
			$table->timestamps();
			
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('subreddit_id')->references('id')->on('subreddits');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}

}
