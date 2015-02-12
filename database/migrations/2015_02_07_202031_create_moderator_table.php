<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModeratorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('moderators', function(Blueprint $table)
		{
			$table->integer('user_id')->unsigned();
			$table->integer('channel_id')->unsigned();
			
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('channel_id')->references('id')->on('channels');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('moderators');
	}

}
