<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentVotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comment_votes', function (Blueprint $table)
		{
			$table->increments('id');
			$table->integer('comment_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->integer('value');
			$table->timestamps();

			$table->foreign('comment_id')->references('id')->on('comments');
			$table->foreign('user_id')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('comment_votes');
	}

}
