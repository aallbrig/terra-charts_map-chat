<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChatCirclesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ChatCircles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->float('lat');
			$table->float('lng');
			$table->float('radius');
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
		Schema::drop('ChatCircles');
	}

}
