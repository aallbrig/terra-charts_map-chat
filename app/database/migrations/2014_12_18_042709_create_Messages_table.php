<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Messages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('message');
			$table->integer('chat_circle_id')->unsigned();
			$table->foreign('chat_circle_id')->references('id')->on('ChatCircles')->onDelete('cascade');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Messages');
	}

}
